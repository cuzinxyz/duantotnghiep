<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Tables;
use App\Models\Demnad;
use App\Models\ChMessage;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Illuminate\Support\Facades\Mail;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Actions;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use App\Filament\Resources\DemnadResource\Pages;
use App\Mail\SendMailDemnad;
use Filament\Infolists\Components\Actions\Action;

class DemnadResource extends Resource
{
    // protected static ?string $navigationGroup = 'Quản lý nội dung';

    protected static ?string $model = Demnad::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Thông tin')
                    ->schema([
                        TextEntry::make('user.name')
                            ->label('Tác giả')
                            ->icon('heroicon-o-user-circle'),
                        TextEntry::make('user.email')
                            ->label('Email')
                            ->icon('heroicon-m-envelope'),
                        TextEntry::make('user.phone_number')
                            ->label('SĐT')
                            ->icon('heroicon-o-phone'),
                        TextEntry::make('created_at')
                            ->label('Thời gian tạo')
                            ->icon('heroicon-o-calendar-days')
                            ->since(),
                        TextEntry::make('status')
                            ->state(function (Model $record) {
                                if ($record->status == 0) return 'Chưa được duyệt';
                                if ($record->status == 1) return 'Đã được duyệt';
                            })
                            ->label('Trạng thái'),
                    ])->columns(2)
                    ->columnSpan(1),
                Section::make('Hành động')
                    ->schema([
                        Actions::make([
                            Action::make('activePost')
                                ->label('Duyệt bài')
                                ->icon('heroicon-m-check')
                                ->requiresConfirmation()
                                ->action(function (Demnad $record) {
                                    $record->status = 1;
                                    $record->save();


                                    $bot = User::where('name', 'BOT')->first();
                                    $user = User::where('id', $record->user_id)->first();

                                    $reason = 'Chào bạn <b>' . $user->name . '</b>,
                                    Bài viết của bạn đã được duyệt thành công.
                                    Để xem bài viết đã đăng của bạn, truy cập link:
                                    <a href="' . route('buyCar') . '">tại đây</a>
                                    Cảm ơn bạn đã sử dụng DRIVCO, mong rằng chúng tôi có thể đem lại sự trải nhiệm tuyệt vời dành cho bạn.';
                                    ChMessage::create([
                                        'from_id' => $bot->id,
                                        'to_id' => $record->user_id,
                                        'body' => $reason
                                    ]);

                                    Mail::to($user)->later(now()->addSeconds(5), new SendMailDemnad($record, $user));
                                    Notification::make()
                                        ->title('Đã gửi thông báo tới khách hàng')
                                        ->success()
                                        ->send();

                                    redirect()->route('filament.admin.resources.demnads.index');
                                }),
                            Action::make('unActivePost')
                                ->label('Không duyệt')
                                ->icon('heroicon-m-x-mark')
                                ->color('danger')
                                ->requiresConfirmation()
                                ->form([
                                    TextInput::make('reason')
                                        ->label('Vui lòng điền lý do ?')
                                        ->required(),
                                ])
                                ->action(function (array $data, Demnad $record) {
                                    $record->reason = $data['reason'];
                                    $record->status = 0;
                                    $record->save();

                                    $bot = User::where('name', 'BOT')->first();
                                    $user = User::where('id', $record->user_id)->first();

                                    $reason = 'Chào bạn ' . $user->name . ',
                                    Bài viết có tiêu đề: "' . $record->title . '" của bạn đã không được duyệt.
                                    Vì lý do: ' . $data['reason'] . ', vui lòng điều chỉnh lại bài viết của bạn để chúng tôi có thể hỗ trợ bạn dễ dàng tìm được chiếc xe như mong muốn.';
                                    ChMessage::create([
                                        'from_id' => $bot->id,
                                        'to_id' => $record->user_id,
                                        'body' => $reason
                                    ]);

                                    $user = User::where('id', $record->user_id)->first();
                                    Mail::to($user)->later(now()->addSeconds(5), new SendMailDemnad($record, $user));
                                    Notification::make()
                                        ->title('Đã gửi phản hồi tới khách hàng')
                                        ->success()
                                        ->send();
                                    redirect()->route('filament.admin.resources.demnads.index');
                                }),
                        ])->fullWidth(),
                    ])->columnSpan(1),
                Section::make('Chi tiết')
                    ->schema([
                        TextEntry::make('content')
                            ->label('Nội dung'),
                    ])
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Tác giả'),
                Tables\Columns\TextColumn::make('content')
                    ->label('Nội dung')
                    ->limit(20),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian')
                    ->dateTime()
                    ->sortable()
                    ->since(),
                IconColumn::make('status')
                    ->label('Phê duyệt')
                    ->icon(fn (string $state): string => match ($state) {
                        '0' => 'heroicon-o-x-circle',
                        '1' => 'heroicon-o-check-circle',
                    })
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Filter::make('unactive')
                    ->label('Bài đăng chưa duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 0))
                    ->default()
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading('Không có bài đăng cần duyệt');
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
            'index' => Pages\ListDemnads::route('/'),
            // 'create' => Pages\CreateDemnad::route('/create'),
            'view' => Pages\ViewDemnad::route('/{record}'),
            'edit' => Pages\EditDemnad::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Duyệt tin mua');
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::where('status', 0)->count();
    }
}
