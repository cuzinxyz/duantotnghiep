<?php

namespace App\Filament\Resources\CollaboratorsResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
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
            ])
            ->emptyStateActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->modifyQueryUsing(fn (Builder $query) => $query->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]));
    }
}
