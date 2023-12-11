<?php

namespace App\Filament\Resources\CollaboratorsResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Support\Enums\FontFamily;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class SupportCollaboratorRelationManager extends RelationManager
{
    protected static string $relationship = 'supportCollaborator';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->fontFamily(FontFamily::Mono)
                    ->searchable()
                    ->label('Tên người dùng'),
                Tables\Columns\TextColumn::make('title')
                    ->fontFamily(FontFamily::Mono)
                    ->searchable()
                    ->label('Tiêu đề')
                    ->words(5),
                Tables\Columns\TextColumn::make('category')
                    ->fontFamily(FontFamily::Mono)
                    ->searchable()
                    ->label('Chuyên mục')
                    ->words(5),
                Tables\Columns\TextColumn::make('status')
                    ->label('Phê duyệt')
                    ->state(function (Model $model) {
                        if ($model->status == 0) return 'Chưa phản hồi';
                        if ($model->status == 1) return 'Đã phản hồi';
                        if ($model->status == 2) return 'Đã xóa';
                    }),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make()
            ])
            ->actions([
            ])
            ->bulkActions([
            ])
            ->emptyStateActions([
            ])
            ->modifyQueryUsing(fn (Builder $query) => $query->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]));
    }
}
