<?php

namespace App\Filament\Resources\CollaboratorsResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Support\Enums\FontFamily;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class SupportCollaboratorRelationManager extends RelationManager
{
    protected static string $relationship = 'supportCollaborator';
    protected static ?string $title = 'Hỗ trợ';
    protected static ?string $label = 'Hỗ trợ';

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
                Tables\Filters\TrashedFilter::make(),
                Filter::make('unactive')
                    ->label('Yêu cầu chưa xử lý')
                    ->query(fn (Builder $query): Builder => $query->where('status', 0))
                    ->default(),
                Filter::make('active')
                    ->label('Yêu cầu đã xử lý')
                    ->query(fn (Builder $query): Builder => $query->where('status', 1)),
                Filter::make('locked')
                    ->label('Yêu cầu không xử lý')
                    ->query(fn (Builder $query): Builder => $query->where('status', 2))
            ])
            ->actions([
                Action::make('url_support')
                    ->label('Xem chi tiết')
                    ->url(fn (Action $action) => '/admin/supports/' . $action->getRecord()->id),
            ])
            ->bulkActions([])
            ->emptyStateActions([])
            ->modifyQueryUsing(fn (Builder $query) => $query->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]));
    }
}
