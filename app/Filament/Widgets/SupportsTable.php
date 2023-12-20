<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SupportResource;
use Filament\Widgets\TableWidget as BaseWidget;

class SupportsTable extends BaseWidget
{
    protected static ?int $sort = 8;

    protected static ?string $heading = 'Hỗ trợ đang chờ xử lý';


    public function table(Table $table): Table
    {
        return $table
            ->query(
                SupportResource::getEloquentQuery()->where('created_at', null)
            )
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')

            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->label('Họ tên'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->label('Tiêu đề')
                    ->words(10),
            ])
            ->filters([
                Filter::make('unactive')
                ->label('Yêu cầu hỗ trợ chưa được xử lý')
                ->query(fn (Builder $query): Builder => $query->where('status', 0))
                ->default()
            ])
            ->actions([
                Action::make('toReport')
                ->label('Xem chi tiết')
                ->url(fn (Action $action) => ' admin/supports/' . $action->getRecord()->id.'/edit')
            ]);
    }
}
