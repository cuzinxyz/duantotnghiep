<?php

namespace App\Filament\Resources;

use App\Events\SalonCollaboratorEvent;
use Carbon\Carbon;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Salon;
use Filament\Forms\Form;
use App\Models\ChMessage;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use App\Models\TransactionsHistory;
// use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use App\Infolists\Components\VideoEntry;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Actions;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use App\Filament\Resources\SalonsResource\Pages;
use Filament\Infolists\Components\Actions\Action;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;
use App\Filament\Resources\SalonsResource\RelationManagers;

class SalonsResource extends Resource
{
    protected static ?string $model = Salon::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_salon')
                    ->label('Hình ảnh'),

                Tables\Columns\TextColumn::make('salon_name')
                    ->label('Tên cửa hàng')
                    ->searchable(),

                Tables\Columns\TextColumn::make('expired_date')
                    ->label('ngày hết hạn')
                    ->dateTime('d-m-Y')
                    ->since(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Trạng thái')
                    ->badge()
                    ->state(function (Model $record, Column $column) {
                        if ($record->status == 0) return 'Chờ xác nhận';
                        if ($record->status == 1) return 'Đã xác nhận';
                        if ($record->status == 2) return 'Tài khoản đã bị khóa';
                    })
                    ->sortable()


            ])
            ->filters([
                // Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                ActionGroup::make([
                    \Filament\Tables\Actions\Action::make('active')
                        ->label('Xác nhận')
                        ->action(function (Model $salon) {
                            if ($salon->status == 1) return true;

                            $bot = User::where('name', 'BOT')->first();
                            $user = User::where('id', $salon->user_id)->first();

                            $account_balence = intval($user->account_balence) - intval(300000);

                            if ($account_balence < 0) {
                                $reason = 'Chào bạn ' . $user->name . ',
                                        Yêu cầu mở cửa hàng của bạn không được phê duyệt,
                                        Lý do được đưa ra là số dư tài khoản của bạn không đủ.
                                        Kinh phí bạn cần thanh toán hàng tháng là 300.000đ,
                                        vui lòng nạp thêm tiền để được phê duyệt.';

                                ChMessage::create([
                                    'from_id' => $bot->id,
                                    'to_id' => $salon->user_id,
                                    'body' => $reason
                                ]);

                                Notification::make()
                                    ->title('Số dư của khách hàng không đủ. Đã thông báo tới khách hàng!')
                                    ->success()
                                    ->send();

                                return false;
                            }

                            $salon->status = 1;
                            $salon->expired_date = Carbon::now()->addDays(30);
                            $salon->save();

                            $resultWithdraw = TransactionsHistory::create([
                                'user_id' => $salon->user_id,
                                'transaction_type' => 'dịch vụ: Mở của hàng',
                                'amount' => intval(300000),
                                'balance_after_transaction' => $account_balence
                            ]);

                            User::where('id', $salon->user_id)->update([
                                'account_balence' => $account_balence
                            ]);

                            $reason = 'Chào bạn ' . $user->name . ',
                                Yêu cầu mở cửa hàng của bạn đã được chấp nhận,
                                Phí duy trì của hàng mỗi tháng của bạn là 300.000 VNĐ
                                Hiện tại bạn có thể vào cửa hàng của mình để sử dụng dịch vụ của chúng tôi.
                                Trân trọng cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của chúng tôi.';

                            ChMessage::create([
                                'from_id' => $bot->id,
                                'to_id' => $salon->user_id,
                                'body' => $reason
                            ]);

                            $collaborator = User::find($salon->collaborator_id);
                            $total_assign = $collaborator->total_assign - 1;
                            if ($user->total_assign <= 0) {
                                $total_assign = 0;
                            }

                            User::where('id', $salon->collaborator_id)->update([
                                'total_assign' => $total_assign
                            ]);

                            Notification::make()
                                ->title('Đã gửi thông báo tới khách hàng')
                                ->success()
                                ->send();
                        })
                        ->icon('heroicon-o-check-circle'),

                    \Filament\Tables\Actions\Action::make('unactive')
                        ->label('Không xác nhận')
                        ->icon('heroicon-m-x-mark')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->form([
                            TextInput::make('reason')
                                ->label('Vui lòng điền lý do ?')
                                ->required(),
                        ])
                        ->action(function (array $data, Model $salon) {

                            $bot = User::where('name', 'BOT')->first();
                            $user = User::where('id', $salon->user_id)->first();
                            $reason = 'Chào bạn ' . $user->name . ',
                                        Yêu cầu mở cửa hàng của bạn không được chấp nhận,
                                        Vì lý do: ' . $data['reason'] . ' .
                                        Nếu có thắc mắc vui lòng liên hệ với chúng tôi.
                                        Trân trọng cảm ơn.';

                            ChMessage::create([
                                'from_id' => $bot->id,
                                'to_id' => $salon->user_id,
                                'body' => $reason
                            ]);

                            Notification::make()
                                ->title('Đã gửi phản hồi tới khách hàng')
                                ->success()
                                ->send();
                        })
                        ->icon('heroicon-m-x-mark'),



                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([]);
    }


    public static function infolist(Infolist $infolist): infolist
    {
        return $infolist
            ->schema([
                Section::make('Thông tin')
                    ->schema([
                        TextEntry::make('salon_name')
                            ->label('Tên cửa hàng')
                            ->icon('heroicon-o-user-circle'),
                        TextEntry::make('email')
                            ->label('Email cửa hàng')
                            ->icon('heroicon-m-envelope'),
                        TextEntry::make('phone_number')
                            ->label('SĐT cửa hàng')
                            ->icon('heroicon-o-phone'),
                        TextEntry::make('address')
                            ->label('Địa chỉ cửa hàng')
                            ->icon('heroicon-o-map-pin'),
                        TextEntry::make('status')
                            ->label('Phê duyệt')
                            ->icon(fn (string $state): string => match ($state) {
                                '0' => 'heroicon-o-x-circle',
                                '1' => 'heroicon-o-check-circle',
                                '2' => 'heroicon-o-lock-closed',
                            }),
                        Section::make('Hình ảnh của cửa hàng')
                            ->schema([
                                ImageEntry::make('image_salon')
                                    ->label('Hình ảnh của cửa hàng')
                                    ->default('https://picsum.photos/200')
                            ])
                            ->extraAttributes([
                                'class' => 'overflow-x-auto',
                            ])
                            ->columnSpan([
                                'xl' => 2,
                                '2xl' => 2,
                            ]),
                    ])
                    ->columns(2),
                Section::make('Kiểm duyệt')
                    ->schema([
                        Actions::make([
                            Action::make('active')
                                ->label('Xác nhận')
                                ->action(function (Model $salon) {
                                    if ($salon->status == 1) return true;

                                    $bot = User::where('name', 'BOT')->first();
                                    $user = User::where('id', $salon->user_id)->first();

                                    $account_balence = intval($user->account_balence) - intval(300000);
                                    if ($account_balence < 0) {
                                        Notification::make()
                                            ->title('Số dư tài khoản của khách hàng không đủ.')
                                            ->danger()
                                            ->send();
                                        return false;
                                        // die();
                                    }

                                    $salon->status = 1;
                                    $salon->expired_date = Carbon::now()->addDays(30);
                                    $salon->save();


                                    $resultWithdraw = TransactionsHistory::create([
                                        'user_id' => $salon->user_id,
                                        'transaction_type' => 'dịch vụ: Mở của hàng',
                                        'amount' => intval(300000),
                                        'balance_after_transaction' => $account_balence
                                    ]);

                                    User::where('id', $salon->user_id)->update([
                                        'account_balence' => $account_balence
                                    ]);

                                    $reason = 'Chào bạn ' . $user->name . ',
                                                Yêu cầu mở cửa hàng của bạn đã được chấp nhận,
                                                Phí duy trì của hàng mỗi tháng của bạn là 300.000 VNĐ
                                                Hiện tại bạn có thể vào cửa hàng của mình để sử dụng dịch vụ của chúng tôi.
                                                Trân trọng cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của chúng tôi.';

                                    ChMessage::create([
                                        'from_id' => $bot->id,
                                        'to_id' => $salon->user_id,
                                        'body' => $reason
                                    ]);

                                    Notification::make()
                                        ->title('Đã gửi thông báo tới khách hàng')
                                        ->success()
                                        ->send();
                                })
                                ->icon('heroicon-o-check-circle'),

                            Action::make('unactive')
                                ->label('Không xác nhận')
                                ->icon('heroicon-m-x-mark')
                                ->color('danger')
                                ->requiresConfirmation()
                                ->form([
                                    TextInput::make('reason')
                                        ->label('Vui lòng điền lý do ?')
                                        ->required(),
                                ])
                                ->action(function (array $data, Model $salon) {

                                    $bot = User::where('name', 'BOT')->first();
                                    $user = User::where('id', $salon->user_id)->first();
                                    $reason = 'Chào bạn ' . $user->name . ',
                                                Yêu cầu mở cửa hàng của bạn không được chấp nhận,
                                                Vì lý do: ' . $data['reason'] . ' .
                                                Nếu có thắc mắc vui lòng liên hệ với chúng tôi.
                                                Trân trọng cảm ơn.';

                                    ChMessage::create([
                                        'from_id' => $bot->id,
                                        'to_id' => $salon->user_id,
                                        'body' => $reason
                                    ]);

                                    Notification::make()
                                        ->title('Đã gửi phản hồi tới khách hàng')
                                        ->success()
                                        ->send();
                                })
                                ->icon('heroicon-m-x-mark'),
                        ])
                    ])
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\CarsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSalons::route('/'),
            'view' => Pages\ViewSalons::route('/{record}'),
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
        return __('Salon');
    }
}
