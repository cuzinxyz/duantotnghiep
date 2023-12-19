<?php

namespace App\Filament\Resources\CollaboratorsResource\RelationManagers;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class CarRelationManager extends RelationManager
{
    protected static string $relationship = 'carCollaborator';
    protected static ?string $title = 'Tin mua xe';
    protected static ?string $label = 'Tin mua xe';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Tiêu đề bài đăng')
                    ->default('x bài đăng lỗi x')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('user.name')
                    ->label('Tác giả'),

                Tables\Columns\TextColumn::make('status')
                    ->label('Trạng thái')
                    ->badge()
                    ->state(function (Model $record) {
                        if ($record->status == 0) return 'Chờ xác nhận';
                        if ($record->status == 1) return 'Đã xác nhận';
                        if ($record->status == 2) return 'Xe này đã bị xóa';
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian tạo')
                    ->dateTime()
                    ->sortable()
                    ->since(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Filter::make('unactive')
                    ->label('Bài đăng chưa duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 0))
                    ->default(),
                Filter::make('active')
                    ->label('Bài đăng đã duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 1)),
                Filter::make('locked')
                    ->label('Bài đăng không duyệt')
                    ->query(fn (Builder $query): Builder => $query->where('status', 2))
            ])
            ->actions([
                Action::make('url_car')
                    ->label('Xem chi tiết')
                    ->url(fn (Action $action) => '/admin/post-car-managers/' . $action->getRecord()->id),
            ])
            ->bulkActions([])
            ->emptyStateActions([])
            ->modifyQueryUsing(fn (Builder $query) => $query->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]));
    }

    public static function getRelationshipLabel(): string
    {
        return __('Xe');
    }
}
