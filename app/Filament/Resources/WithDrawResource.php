<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\WithDraw;
use Filament\Forms\Form;
use App\Models\ChMessage;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use App\Models\TransactionsHistory;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\TextEntry;
use App\Filament\Resources\WithDrawResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WithDrawResource\RelationManagers;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Section;

class WithDrawResource extends Resource
{
    protected static ?string $model = WithDraw::class;

    // protected static ?string $navigationGroup = 'Tương tác';

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Tên người rút tiền')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bank_price')
                    ->numeric(
                        decimalPlaces: 0,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    )
                    ->money('VND')
                    ->label('Số tiền muốn rút'),
                Tables\Columns\TextColumn::make('user.account_balence')
                    ->label('Số dư trong tài khoản')
                    ->numeric(
                        decimalPlaces: 0,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    )
                    ->money('VND'),

                Tables\Columns\TextColumn::make('status')
                    ->label('Trạng thái')
                    ->badge()
                    ->state(function (Model $record) {
                        if ($record->status == 0) return 'Chờ xác nhận';
                        if ($record->status == 1) return 'Đã xác nhận';
                        if ($record->status == 2) return 'Đã hủy yêu cầu';
                    })
                    ->sortable(),

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
                    ->label('Yêu cầu rút tiền chưa được duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 0))
                    ->default(),
                Filter::make('active')
                    ->label('Yêu cầu rút tiền đã được duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 1)),
                Filter::make('locked')
                    ->label('Yêu cầu rút tiền không được duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 2))
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                ActionGroup::make([
                    Action::make('active')
                        ->action(function (WithDraw $record) {
                            if ($record->status == 1 || $record->status == 2) {
                                Notification::make()
                                    ->title('Yêu cầu này đã được xử lý. Không thể xử lý lại')
                                    ->success()
                                    ->send();
                                return 0;
                            }
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


                            $record->status = 1;
                            $record->save();


                            $user_balance = User::find($record->user_id);

                            $account_balence = intval($user_balance->account_balence) - intval($record->bank_price);

                            $resultWithdraw = TransactionsHistory::create([
                                'user_id' => $record->user_id,
                                'transaction_type' => 'rút tiền',
                                'amount' => intval($record->bank_price),
                                'balance_after_transaction' => $account_balence
                            ]);

                            User::where('id', $record->user_id)->update([
                                'account_balence' => $account_balence
                            ]);

                            $bot = User::where('name', 'BOT')->first();

                            $reason = 'Chào bạn ' . $user_balance->name . ',
                                    Yêu cầu rút tiền của bạn đã được duyệt thành công.
                                    Chúng tôi đã hoàn thành chuyển khoản cho bạn.
                                    Cảm ơn bạn đã sử dụng dịch vụ của DRIVCO, mong rằng chúng tôi có thể đem lại sự trải nhiệm tuyệt vời dành cho bạn.';
                            ChMessage::create([
                                'from_id' => $bot->id,
                                'to_id' => $record->user_id,
                                'body' => $reason
                            ]);

                            Notification::make()
                                ->title('Xác nhận chuyển khoản thành công')
                                ->success()
                                ->send();
                        })
                        ->icon('heroicon-o-check')
                        ->label('Xác nhận chuyển khoản'),

                    Action::make('unacrive')
                        ->label('Không duyệt')
                        ->icon('heroicon-m-x-mark')
                        ->form([
                            TextInput::make('reason')
                                ->label('Vui lòng điền lý do ?')
                                ->required(),
                        ])
                        ->action(function (array $data, WithDraw $record) {
                            if ($record->status == 1 || $record->status == 2) {
                                Notification::make()
                                    ->title('Yêu cầu này đã được xử lý. Không thể xử lý lại')
                                    ->success()
                                    ->send();
                                return 0;
                            }
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

                            $record->reason = $data['reason'];
                            $record->status = 2;
                            $record->save();

                            $bot = User::where('name', 'BOT')->first();

                            $reason = 'Chào bạn ' . $record->user->name . ',
                                    Yêu cầu rút tiền của bạn đã không được duyệt thành công.
                                    Vì lý do: ' . $data['reason'] . '.
                                    Bạn vui lòng kiểm tra lại và có thể gửi lại yêu cần rút tiền với chúng tôi
                                    Cảm ơn bạn đã sử dụng dịch vụ của DRIVCO, mong rằng chúng tôi có thể đem lại sự trải nhiệm tuyệt vời dành cho bạn.';
                            ChMessage::create([
                                'from_id' => $bot->id,
                                'to_id' => $record->user_id,
                                'body' => $reason
                            ]);

                            Notification::make()
                                ->title('Đã gửi thông báo tới khách hàng')
                                ->success()
                                ->send();
                        }),
                ])

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make()
                    ->schema([
                        TextEntry::make('bank_name')
                            ->label('Tên ngân hàng')
                            ->copyable(),

                        TextEntry::make('bank_number')
                            ->label('Số tài khoản nhận tiền')
                            ->copyable(),

                        TextEntry::make('username')
                            ->label('Tên người nhận')
                            ->copyable(),

                        TextEntry::make('bank_price')
                            ->label('Số tiền muốn rút')
                            ->numeric(
                                decimalPlaces: 0,
                                decimalSeparator: '.',
                                thousandsSeparator: ',',
                            )
                            ->money('VND')
                            ->copyable(),
                    ])
                    ->columnSpan([
                        'default' => 1,
                        'lg' => 1,
                    ]),

                Section::make()
                    ->schema([
                        ImageEntry::make('image')
                            ->label('Mã chuyển khoản')
                            ->defaultImageUrl(function (Model $model) {
                                $urlBank = "https://img.vietqr.io/image/$model->bank_name-$model->bank_number-compact2.png?amount=$model->bank_price&addInfo=DRIVCO chuyen tien&accountName=$model->username";
                                return url($urlBank);
                            })
                            ->width('100%')
                            ->height('auto')
                            ->columnSpanFull()
                    ])
                    ->columnSpan([
                        'default' => 1,
                        'lg' => 1,
                    ])

            ])
            ->columns([
                'default' => 1,
                'lg' => 2,
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageWithDraws::route('/'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('rút tiền');
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::where('status', 0)->count();
    }
}
