<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class TransactionsHistoriesRelationManager extends RelationManager
{
    protected static string $relationship = 'transactions_histories';

    protected static ?string $title = 'Lịch sử giao dịch';
    protected static ?string $label = 'Lịch sử giao dịch';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian')
                    ->since(),

                Tables\Columns\TextColumn::make('transaction_type')
                    ->label('Loại dịch vụ'),

                Tables\Columns\TextColumn::make('amount')
                    ->numeric(
                        decimalPlaces: 0,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    )
                    ->label('Số tiền thanh toán'),

                Tables\Columns\TextColumn::make('balance_after_transaction')
                    ->numeric(
                        decimalPlaces: 0,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    )
                    ->label('Số dư tài khoản'),

            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }
    
}
