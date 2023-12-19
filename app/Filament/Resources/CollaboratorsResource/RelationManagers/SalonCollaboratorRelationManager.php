<?php

namespace App\Filament\Resources\CollaboratorsResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class SalonCollaboratorRelationManager extends RelationManager
{
    protected static string $relationship = 'salonCollaborator';
    protected static ?string $title = 'Cửa hàng';
    protected static ?string $label = 'Cửa hàng';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('cua-hang')
            ->columns([
                Tables\Columns\ImageColumn::make('image_salon')
                    ->label('Hình ảnh'),

                Tables\Columns\TextColumn::make('salon_name')
                    ->label('Tên cửa hàng')
                    ->searchable(),

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
                    })
                    ->sortable(),
            ])
            ->filters([
                // Tables\Filters\TrashedFilter::make()
                Filter::make('unactive')
                    ->label('Cửa hàng chưa duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 0))
                    ->default(),
                Filter::make('active')
                    ->label('Cửa hàng đã duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 1)),
                Filter::make('locked')
                    ->label('Cửa hàng không duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 2))
            ])
            ->actions([
                Action::make('url_salon')
                    ->label('Xem chi tiết')
                    ->url(fn (Action $action) => '/admin/salons/' . $action->getRecord()->id),
            ])
            ->emptyStateActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->modifyQueryUsing(fn (Builder $query) => $query->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]));
    }
}
