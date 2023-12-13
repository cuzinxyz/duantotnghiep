<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\RelationManagers\RelationManager;

class SupportRelationManager extends RelationManager
{
    protected static string $relationship = 'support';

    protected static ?string $title = 'Hỗ trợ';
    protected static ?string $label = 'Hỗ trợ';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->label('Tiêu đề')
                    ->words(5),
                Tables\Columns\TextColumn::make('category')
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

            ->emptyStateActions([]);
    }
}
