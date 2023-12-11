<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Resources\RelationManagers\RelationManager;

class WithDrawRelationManager extends RelationManager
{
    protected static string $relationship = 'withDraw';

    protected static ?string $title = 'Rút tiền';
    protected static ?string $label = 'Rút tiền';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('WithDrawList')
            ->columns([
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
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->emptyStateActions([]);
    }

    public function infolist(Infolist $infolist): Infolist
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
}
