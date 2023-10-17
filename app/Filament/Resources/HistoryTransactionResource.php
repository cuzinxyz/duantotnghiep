<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoryTransactionResource\Pages;
use App\Filament\Resources\HistoryTransactionResource\RelationManagers;
use App\Models\HistoryTransaction;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HistoryTransactionResource extends Resource
{
    protected static ?string $model = HistoryTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('TransactionType')
                    ->options([
                    'Nạp Tiền' => 'Nạp Tiền',
                    'Thanh toán dịch vụ' => 'Thanh Toán dịch vụ'
                    ])
                    ->required(),
                Forms\Components\TextInput::make('Amount')
                    ->required(),       
                Forms\Components\TextInput::make('BalanceAfterTransaction')
                            
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('user.name'),
                TextColumn::make('TransactionType'),
                TextColumn::make('Amount')
                ->numeric(
                    decimalPlaces: 0,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )
                ->money('VND'),
                TextColumn::make('BalanceAfterTransaction')
                ->label('Balance After Transaction')
                ->numeric(
                    decimalPlaces: 0,
                    decimalSeparator: '.',
                    thousandsSeparator: ',',
                )
                ->money('VND'),
                TextColumn::make('created_at')
                ->label('Transaction Date')
                ->dateTime()
                ->since()
                ->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListHistoryTransactions::route('/'),
            'create' => Pages\CreateHistoryTransaction::route('/create'),
            'view' => Pages\ViewHistoryTransaction::route('/{record}'),
            'edit' => Pages\EditHistoryTransaction::route('/{record}/edit'),
        ];
    }    
}
