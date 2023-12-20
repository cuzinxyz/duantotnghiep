<?php

namespace App\Filament\Resources;

use App\Models\Car;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\ChMessage;
use Filament\Tables\Table;
use App\Mail\CarRegistMail;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use App\Events\CarCollaboratorEvent;
use Illuminate\Support\Facades\Mail;
use Filament\Infolists\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use App\Infolists\Components\VideoEntry;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Actions;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Actions\Action;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostCarManagerResource\Pages;
use App\Mail\SendMailCar;

class PostCarManagerResource extends Resource
{
    protected static ?string $pollingInterval = '10s';

    protected static ?string $model = Car::class;

    // protected static ?string $navigationGroup = 'Quản lý bài đăng';

    protected static ?string $navigationLabel = 'Duyệt tin đăng';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Tiêu đề bài đăng')
                    ->default('x bài đăng lỗi x')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('user.name')
                    ->label('Tác giả'),

                Tables\Columns\TextColumn::make('status')
                    ->label('Trạng thái')
                    ->badge()
                    ->state(function (Model $record) {
                        if ($record->status == 0) return 'Chờ xác nhận';
                        if ($record->status == 1) return 'Đã xác nhận';
                        if ($record->status == 2) return 'Xe này đã bị xóa';
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian tạo')
                    ->dateTime()
                    ->sortable()
                    ->since(),

                Tables\Columns\TextColumn::make('collaborator.name')
                    ->label('Người kiểm duyệt')
                    ->default(function (Model $model) {
                        if (
                            $model->collaborator_id == null
                            && $model->status == 1
                            || $model->status == 2
                        )
                            return 'Quản trị viên';

                        if ($model->collaborator_id == null && $model->status == 0) return 'Chưa có người kiểm duyệt';
                    }),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Filter::make('unactive')
                    ->label('Bài đăng chưa duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 0))
                    ->default(),
                Filter::make('active')
                    ->label('Bài đăng đã duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 1)),
                Filter::make('locked')
                    ->label('Bài đăng không duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 2))
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->deferLoading();
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Grid::make()
                    ->schema([
                        Section::make('Thông tin bài đăng')
                            ->schema([
                                TextEntry::make('user.name')
                                    ->label('Tên người đăng')
                                    ->icon('heroicon-o-user-circle')
                                    ->default('Tuấn'),

                                TextEntry::make('contact.email')
                                    ->label('Email')
                                    ->icon('heroicon-m-envelope')
                                    ->default('tuannvn@gmail.com'),

                                TextEntry::make('full_address')
                                    ->label('Địa chỉ')
                                    ->icon('heroicon-o-map-pin')
                                    ->default('Hà Nội'),

                                TextEntry::make('contact.phone_number')
                                    ->label('Số điện thoại')
                                    ->icon('heroicon-o-phone')
                                    ->default('0889967845'),

                                TextEntry::make('created_at')
                                    ->label('Thời gian tạo')
                                    ->dateTime()
                                    ->since()
                                    ->icon('heroicon-o-calendar-days'),

                                IconEntry::make('status')
                                    ->boolean()
                                    ->label('Trạng thái bài đăng'),
                            ])
                            ->columns([
                                'xl' => 2,
                                '2xl' => 2,
                            ])
                            ->columnSpan([
                                'xl' => 3,
                                '2xl' => 3,
                            ]),
                        Section::make('Hành động')
                            ->schema(function (Model $model) {
                                if ($model->status == 1 || $model->status == 2) {
                                    return [];
                                } else {
                                    return [
                                        Actions::make([
                                            Action::make('ActivePost')
                                                ->label('Duyệt bài')
                                                ->icon('heroicon-m-check')
                                                ->requiresConfirmation()
                                                ->action(function (Car $record) {
                                                    $collaborator = User::find($record->collaborator_id);
                                                    if ($collaborator) {
                                                        $total_assign = $collaborator->total_assign - 1;
                                                        if ($collaborator->total_assign <= 0) {
                                                            $total_assign = 0;
                                                        }


                                                        User::where('id', $record->collaborator_id)->update([
                                                            'total_assign' => $total_assign
                                                        ]);
                                                    }

                                                    $bot = User::where('name', 'BOT')->first();
                                                    $reason = 'Chào bạn ' . $record->user->name . ',
                                                    Tin đăng bán xe của bạn có tiêu đề: ' . $record->title . ' được phê duyệt thành công.
                                                    Cảm ơn bạn đã tin dùng DRIVCO của chúng tôi!';

                                                    ChMessage::create([
                                                        'from_id' => $bot->id,
                                                        'to_id' => $record->user_id,
                                                        'body' => $reason
                                                    ]);
                                                    $data = $record;
                                                    Mail::to($record->contact['email'])->later(now()->addSeconds(5), new CarRegistMail($data));

                                                    $record->status = 1;
                                                    $record->collaborator_id = null;
                                                    $record->save();


                                                    Notification::make()
                                                        ->title('Đã duyệt tin thành công')
                                                        ->success()
                                                        ->send();
                                                    redirect()->route('filament.admin.resources.post-car-managers.index');
                                                }),

                                            Action::make('UnActivePost')
                                                ->label('Không duyệt')
                                                ->icon('heroicon-m-x-mark')
                                                ->color('danger')
                                                ->requiresConfirmation()
                                                ->form([
                                                    TextInput::make('reason')
                                                        ->label('Vui lòng điền lý do ?')
                                                        ->required(),
                                                ])
                                                ->action(function (array $data, Car $record) {
                                                    $collaborator = User::find($record->collaborator_id);
                                                    if ($collaborator) {
                                                        $total_assign = $collaborator->total_assign - 1;
                                                        if ($collaborator->total_assign <= 0) {
                                                            $total_assign = 0;
                                                        }


                                                        User::where('id', $record->collaborator_id)->update([
                                                            'total_assign' => $total_assign
                                                        ]);
                                                    }

                                                    $bot = User::where('name', 'BOT')->first();
                                                    $reason = 'Chào bạn ' . $record->user->name . ',
                                                    Tin đăng bán xe có tiêu đề: ' . $record->title . ' của bạn không được phê duyệt, vì lý do: "' . $data['reason'] . '"
                                                    Bạn vui đăng lại tin của mình và sửa lại những lỗi nêu trên
                                                    Cảm ơn bạn đã tin dùng DRIVCO của chúng tôi!';

                                                    ChMessage::create([
                                                        'from_id' => $bot->id,
                                                        'to_id' => $record->user_id,
                                                        'body' => $reason
                                                    ]);

                                                    Mail::to($record->user->email)->later(now()->addSeconds(5), new SendMailCar($record));


                                                    $record->reason = $data['reason'];
                                                    $record->status = 2;
                                                    $record->collaborator_id = null;
                                                    $record->save();

                                                    Notification::make()
                                                        ->success()
                                                        ->title('Đã gửi thông báo tới khách hàng')
                                                        ->send();

                                                    redirect()->route('filament.admin.resources.post-car-managers.index');
                                                })
                                        ]),
                                    ];
                                }
                            })->columnSpan([
                                'xl' => 1,
                                '2xl' => 2,
                            ]),

                        Section::make('Nội dung')
                            ->schema([
                                Section::make('')
                                    ->schema([
                                        TextEntry::make('title')
                                            ->label('Tiêu đề'),

                                        TextEntry::make('price')
                                            ->label('Giá muốn bán')
                                            ->money('VND'),
                                    ])
                                    ->columns([
                                        'xl' => 2,
                                        '2xl' => 2,
                                    ]),

                                Section::make('Thông số kĩ thuật')
                                    ->schema([
                                        TextEntry::make('brand.brand_name')
                                            ->label('Hãng xe')
                                            ->default('Vinfast'),

                                        TextEntry::make('car_info.mileage')
                                            ->label('Số KM đã đi')
                                            ->default(1000),

                                        TextEntry::make('car_info.seat')
                                            ->label('Số chỗ ngồi')
                                            ->default(7),

                                        TextEntry::make('car_info.year_of_manufacture')
                                            ->label('Năm sản xuất'),

                                        TextEntry::make('car_info.color')
                                            ->label('Màu sắc')
                                            ->default('Khác'),

                                        TextEntry::make('car_info.engine')
                                            ->label('Động cơ')
                                            ->default('Tubo'),

                                        TextEntry::make('car_info.fuelType')
                                            ->label('Nhiên liệu')
                                            ->default('Điện'),

                                        TextEntry::make('car_info.features')
                                            ->label('Một số tính năng khác')
                                    ])
                                    // ->collapsed()
                                    ->columns([
                                        'default' => 1,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ]),

                                Section::make('Hình ảnh')
                                    ->schema([
                                        ImageEntry::make('verhicle_image_library')
                                            ->label('Hình ảnh')
                                            ->default('https://picsum.photos/200')
                                    ])
                                    ->extraAttributes([
                                        'class' => 'overflow-x-auto',
                                    ])
                                    ->columnSpan([
                                        'xl' => 1,
                                        '2xl' => 1,
                                    ]),

                                Section::make('Video')
                                    ->schema([
                                        VideoEntry::make('verhicle_videos')
                                            ->label('Video')
                                    ])
                                    ->columnSpan([
                                        'xl' => 1,
                                        '2xl' => 1,
                                    ]),

                                Section::make('Mô tả chi tiết về xe')
                                    ->schema([
                                        TextEntry::make('description')
                                            ->label('Mô tả chi tiết')
                                            ->markdown()
                                            ->html()
                                            ->default('Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt mollit anim id est laborum.')

                                    ])
                                    ->collapsed(),

                            ])
                            ->columns([
                                'default' => 1,
                                '2xl' => 2,
                            ]),
                    ])->columns([
                        'xl' => 4,
                        '2xl' => 5,
                    ]),

            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPostCarManagers::route('/'),
            'view' => Pages\ViewPostCarManager::route('/{record}'),
            // 'create' => Pages\CreatePostCarManager::route('/create'),
            // 'edit' => Pages\EditPostCarManager::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getModelLabel(): string
    {
        return __('duyệt bài đăng');
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::where('status', 0)->count();
    }
}
