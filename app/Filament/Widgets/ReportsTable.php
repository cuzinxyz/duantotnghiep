<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ReportedResource;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Filament\Resources\ReportedResource\Pages\ViewReported;
use Filament\Tables\Actions\ViewAction;
use Illuminate\Http\Request;

class ReportsTable extends BaseWidget
{
    protected static ?int $sort = 7;

    protected static ?string $heading = 'Tố cáo chưa được xử lý';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                ReportedResource::getEloquentQuery()->where('deleted_at', null)
            )
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->columns([
            Tables\Columns\TextColumn::make('fromUsers.name')
                ->label('Người tố cáo')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('toUsers.name')
                ->label('Người bị tố cáo')
                ->sortable(),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Thời gian')
                ->dateTime()
                ->sortable()
                ->since()
            ])
            ->filters([
                Filter::make('unactive')
                    ->label('Yêu cầu hỗ trợ chưa được xử lý')
                    ->query(fn (Builder $query): Builder => $query->where('status', 0))
                    ->default()
            ])
            ->actions([
                Action::make('toReport')
                ->make('Xem chi tiết')
                ->url(fn (Action $action) => ' admin/reporteds')
            ]);
    }

}
