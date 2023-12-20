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

class ReportCollaboratorRelationManager extends RelationManager
{
    protected static string $relationship = 'reportCollaborator';
    protected static ?string $title = 'Tố cáo';
    protected static ?string $label = 'Tố cáo';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('to-cao')
            ->columns([
                Tables\Columns\TextColumn::make('fromUsers.name')
                    ->label('Người tố cáo')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('toUsers.name')
                    ->label('Người bị tố cáo')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian')
                    ->dateTime()
                    ->sortable()
                    ->since(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Trạng thái')
                    ->badge()
                    ->state(function (Model $record) {
                        if ($record->status == 0) return 'Chờ xử lý';
                        if ($record->status == 1) return 'Đã xử lý';
                    })
                    ->sortable(),

            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Filter::make('unactive')
                    ->label('Tố cáo chưa xử lý')
                    ->query(fn (Builder $query): Builder => $query->where('status', 0))
                    ->default(),
                Filter::make('active')
                    ->label('Tố cáo đã xử lý')
                    ->query(fn (Builder $query): Builder => $query->where('status', 1)),
                Filter::make('locked')
                    ->label('Tố cáo không xử lý')
                    ->query(fn (Builder $query): Builder => $query->where('status', 2))
            ])

            ->actions([
                Action::make('url_report')
                    ->label('Xem chi tiết')
                    ->url(fn (Action $action) => '/admin/reporteds/' . $action->getRecord()->id),
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
