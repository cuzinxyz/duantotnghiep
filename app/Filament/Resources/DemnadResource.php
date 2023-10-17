<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemnadResource\Pages;
use App\Filament\Resources\DemnadResource\RelationManagers;
use App\Models\Demnad;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DemnadResource extends Resource
{
    protected static ?string $model = Demnad::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('brand_id')
                    ->relationship('brand', 'brand_name')
                    ->required(),
                Forms\Components\Select::make('car_model_id')
                    ->relationship('car_model', 'model_name')
                    ->required(),
                Select::make('status')
                ->label('Status')
                ->options([
                  '1' => 'Đã tìm được',
                  '2' => 'Chưa tìm được'
                ])
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('brand.brand_name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('car_model.model_name')
                    ->sortable(),
                IconColumn::make('status')
                ->icon(fn (string $state): string => match ($state) {
                    '1' => 'heroicon-o-check-circle',
                    '2' => 'heroicon-o-x-circle'
                }),
                Tables\Columns\TextColumn::make('created_at')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListDemnads::route('/'),
            'create' => Pages\CreateDemnad::route('/create'),
            'view' => Pages\ViewDemnad::route('/{record}'),
            'edit' => Pages\EditDemnad::route('/{record}/edit'),
        ];
    }
}
