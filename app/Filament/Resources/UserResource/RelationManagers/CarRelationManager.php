<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class CarRelationManager extends RelationManager
{
    protected static string $relationship = 'car';

    protected static ?string $title = 'Tin đăng xe';

    protected static ?string $label = 'Tin đăng xe';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('CarsList')
            ->columns([
                TextColumn::make('title')
                    ->label('Tiêu đề bài đăng')
                    ->default('x bài đăng lỗi x')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Trạng thái')
                    ->badge()
                    ->state(function (Model $record) {
                        if ($record->status == 0) {
                            return 'Chờ xác nhận';
                        }
                        if ($record->status == 1) {
                            return 'Đã xác nhận';
                        }
                        if ($record->status == 2) {
                            return 'Xe này đã bị xóa';
                        }
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian tạo')
                    ->dateTime()
                    ->sortable()
                    ->since(),

                Tables\Columns\TextColumn::make('collaborator.name')
                    ->label('Người kiểm duyệt')
                    ->default(function (Model $model) {
                        if (
                            $model->collaborator_id == null
                            && $model->status == 1
                            || $model->status == 2
                        ) {
                            return 'Quản trị viên';
                        }

                        if ($model->collaborator_id == null && $model->status == 0) {
                            return 'Chưa có người kiểm duyệt';
                        }
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([])
            ->bulkActions([])
            ->emptyStateActions([]);
    }
}
