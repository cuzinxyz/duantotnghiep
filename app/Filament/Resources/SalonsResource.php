<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Salon;
use Filament\Forms\Form;
use App\Models\ChMessage;
use Filament\Tables\Table;
use App\Mail\SendMailSalon;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use App\Models\TransactionsHistory;
use Filament\Tables\Columns\Column;
use Illuminate\Support\Facades\Mail;
use App\Events\SalonCollaboratorEvent;
use Illuminate\Database\Eloquent\Model;
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
                    ->label('Ngày hết hạn')
                    ->dateTime('d-m-Y')
                    ->since(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian tạo')
                    ->dateTime('d-m-Y')
                    ->since(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Trạng thái')
                    ->badge()
                    ->state(function (Model $record) {
                        if ($record->status == 0) return 'Chờ xác nhận';
                        if ($record->status == 1) return 'Đã xác nhận';
                        if ($record->status == 2) return 'Cửa hàng đã bị khóa';
                        if ($record->status == 4) return 'Cửa hàng đang chờ duyệt lại';
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('collaborator.name')
                    ->label('Người kiểm duyệt')
                    ->default(function (Model $model) {
                        if (
                            $model->collaborator_id == null
                            && $model->status == 1
                            || $model->status == 2
                            || $model->status == 4
                        )
                            return 'Quản trị viên';

                        if ($model->collaborator_id == null && $model->status == 0) return 'Chưa có người kiểm duyệt';
                    }),

            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    \Filament\Tables\Actions\Action::make('active')
                        ->label('Xác nhận')
                        ->action(function (Model $salon) {
                            if ($salon->status == 2) {
                                Notification::make()
                                    ->title('Yêu cầu này đã được xử lý. Không thể xử lý lại')
                                    ->success()
                                    ->send();
                                return true;
                            }
                            
                            if ($salon->status == 4) {
                                $salon->status = 1;
                                $salon->save();
                                Notification::make()
                                    ->title('Đã xác nhận lại thành công')
                                    ->success()
                                    ->send();
                                return true;
                            }
                            
                            $collaborator = User::find($salon->collaborator_id);
                            if ($collaborator) {
                                $total_assign = $collaborator->total_assign - 1;
                                if ($collaborator->total_assign <= 0) {
                                    $total_assign = 0;
                                }
                                User::where('id', $salon->collaborator_id)->update([
                                    'total_assign' => $total_assign
                                ]);
                            }

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
                            $salon->collaborator_id = null;
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
                            Mail::to($salon->user->email)->later(now()->addSeconds(5), new SendMailSalon($salon));
                            
                            Notification::make()
                                ->title('Đã xác nhận thành công')
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
                            $collaborator = User::find($salon->collaborator_id);
                            if ($salon->status == 1) {
                                Notification::make()
                                    ->title('Yêu cầu này đã được xử lý. Không thể xử lý lại')
                                    ->success()
                                    ->send();
                                return true;
                            }
                            $collaborator = User::find($salon->collaborator_id);
                            if ($collaborator) {
                                $total_assign = $collaborator->total_assign - 1;
                                if ($collaborator->total_assign <= 0) {
                                    $total_assign = 0;
                                }
                                User::where('id', $salon->collaborator_id)->update([
                                    'total_assign' => $total_assign
                                ]);
                            }
                            $salon->status = 2;
                            $salon->collaborator_id = null;
                            $salon->reason = $data['reason'];
                            $salon->save();


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

                            Mail::to($salon->user->email)->later(now()->addSeconds(5), new SendMailSalon($salon));

                            Notification::make()
                                ->title('Đã gửi phản hồi tới khách hàng')
                                ->success()
                                ->send();
                        })
                        ->icon('heroicon-m-x-mark'),
                    \Filament\Tables\Actions\Action::make('cancel')
                        ->label('Huỷ kích hoạt')
                        ->icon('heroicon-m-x-mark')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->form([
                            TextInput::make('reason')
                                ->label('Vui lòng điền lý do ?')
                                ->required(),
                        ])
                        ->action(function (array $data, Model $salon) {
                            $collaborator = User::find($salon->collaborator_id);
                            if ($salon->status == 1) {
                                $collaborator = User::find($salon->collaborator_id);
                                if ($collaborator) {
                                    $total_assign = $collaborator->total_assign - 1;
                                    if ($collaborator->total_assign <= 0) {
                                        $total_assign = 0;
                                    }
                                    User::where('id', $salon->collaborator_id)->update([
                                        'total_assign' => $total_assign
                                    ]);
                                }
                                $salon->status = 3;
                                $salon->collaborator_id = null;
                                $salon->reason = $data['reason'];
                                $salon->save();


                                $bot = User::where('name', 'BOT')->first();
                                $user = User::where('id', $salon->user_id)->first();
                                $reason = 'Chào bạn ' . $user->name . ',
                                            Salon trực tuyến của bạn đã bị huỷ,
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

                            }

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
                    ->schema(
                        function (Model $model) {
                            if ($model->status == 1 || $model->status == 2) {
                                return [];
                            } else {
                                return [
                                    Actions::make([
                                        Action::make('active')
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
                                ];
                            }
                        }
                    )


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

    public static function getNavigationBadge(): ?string
    {
        return static::$model::where('status', 0)->count();
    }
}
