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

class DemnadRelationManager extends RelationManager
{
    protected static string $relationship = 'demnadCollaborator';
    protected static ?string $title = 'Tin bán xe';
    protected static ?string $label = 'Tin bán xe';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Thong-tin-mua-xe')
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Tác giả'),
                Tables\Columns\TextColumn::make('content')
                    ->label('Nội dung')
                    ->limit(20),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian')
                    ->dateTime()
                    ->sortable()
                    ->since(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Phê duyệt')
                    ->state(function (Model $model) {
                        if ($model->status == 0) return 'Chưa duyệt';
                        if ($model->status == 1) return 'Duyệt thành công';
                        if ($model->status == 2) return 'Không duyệt';
                    }),
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
            ->headerActions([])
            ->actions([
                Action::make('url_demand')
                    ->label('Xem chi tiết')
                    ->url(fn (Action $action) => 'admin/demnads/' . $action->getRecord()->id),
            ])
            ->bulkActions([])
            ->emptyStateActions([])
            ->modifyQueryUsing(fn (Builder $query) => $query->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]));
    }
}
