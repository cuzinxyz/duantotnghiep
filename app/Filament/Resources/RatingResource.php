<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Rating;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\RatingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RatingResource\RelationManagers;
use IbrahimBougaoua\FilamentRatingStar\Columns\RatingStarColumn;

class RatingResource extends Resource
{
  protected static ?string $navigationGroup = 'Hành động khách hàng';

    protected static ?string $model = Rating::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fromUsers.name')
                    ->label('Người đánh giá')
                    ->sortable(),

                Tables\Columns\TextColumn::make('toUsers.name')
                    ->label('Người nhận')
                    ->sortable(),

                RatingStarColumn::make('start'),

                Tables\Columns\TextColumn::make('content')
                ->label('Nội dung đánh giá'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian')
                    ->dateTime()
                    ->sortable()
                    ->since()

            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRatings::route('/'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('đánh giá');
    }
}
