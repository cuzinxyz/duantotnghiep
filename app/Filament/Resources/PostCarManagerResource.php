<?php

namespace App\Filament\Resources;

use App\Mail\CarRegistMail;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Infolists\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use App\Infolists\Components\VideoEntry;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;
use Filament\Tables\Columns\Layout\Split;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Actions;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ColorEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Actions\Action;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostCarManagerResource\Pages;
use App\Filament\Resources\PostCarManagerResource\RelationManagers;
use Illuminate\Support\Facades\Mail;

class PostCarManagerResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationGroup = 'Quản lý bài đăng';

    protected static ?string $navigationLabel = 'Duyệt bài đăng';

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
                    ->label('Tác giả')
                    ->default('tuấn'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian tạo')
                    ->dateTime()
                    ->sortable()
                    ->since()
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Filter::make('unactive')
                ->label('Bài đăng chưa duyệt')
                ->query(fn (Builder $query): Builder => $query->where('status', 0))
                ->default()
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
            ]);
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
                            ->schema([
                                Actions::make([
                                    Action::make('ActivePost')
                                        ->label('Duyệt bài')
                                        ->icon('heroicon-m-check')
                                        ->requiresConfirmation()
                                        ->action(function (Car $record) {
                                            
                                            $data = $record;
                                            Mail::to($record->contact['email'])->later(now()->addSeconds(5), new CarRegistMail($data));

                                            $record->status = 1;
                                            $record->save();

                                            redirect()->route('filament.admin.resources.post-car-managers.index');
                                        })
                                        ->successNotificationTitle('Phê duyệt thành công'),

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
                                            $record->reason = $data['reason'];
                                            $record->status = 2;
                                            $record->save();

                                            redirect()->route('filament.admin.resources.post-car-managers.index');
                                        })
                                        ->successNotification(
                                            Notification::make()
                                                ->success()
                                                ->title('Đã gửi thông báo tới khách hàng'),
                                        ),

                                ]),
                            ])->columnSpan([
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
