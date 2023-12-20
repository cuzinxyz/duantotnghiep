<?php

namespace App\Filament\Resources\CollaboratorsResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class WithDrawCollaboratorRelationManager extends RelationManager
{
    protected static string $relationship = 'withDrawCollaborator';
    protected static ?string $title = 'Rút tiền';
    protected static ?string $label = 'Rút tiền';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('rut-tien')
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
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Filter::make('unactive')
                    ->label('Yêu cầu chưa duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 0))
                    ->default(),
                Filter::make('active')
                    ->label('Yêu cầu đã duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 1)),
                Filter::make('locked')
                    ->label('Yêu cầu không duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 2))
            ])
            ->actions([
                Action::make('url_car')
                    ->label('Xem chi tiết')
                    ->url(fn (Action $action) => '/admin/demnads/' . $action->getRecord()->id),
            ])
            ->bulkActions([])
            ->emptyStateActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->modifyQueryUsing(fn (Builder $query) => $query->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]));
    }
}
