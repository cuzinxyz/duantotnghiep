<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ModelCarResource\Pages;
use App\Filament\Resources\ModelCarResource\RelationManagers;
use App\Models\ModelCar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ModelCarResource extends Resource
{
    protected static ?string $navigationGroup = 'Nội dung chính';

    protected static ?string $model = ModelCar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Dòng xe';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('brand_id')
                    ->relationship('brand', 'brand_name')
                    ->required(),
                Forms\Components\TextInput::make('model_name')
                    ->required()
                    ->maxLength(191),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('brand.brand_name')
                    ->label('Thương hiệu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('model_name')
                    ->label('Tên dòng xe')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->since()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListModelCars::route('/'),
            'create' => Pages\CreateModelCar::route('/create'),
            'view' => Pages\ViewModelCar::route('/{record}'),
            'edit' => Pages\EditModelCar::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel(): string
    {
        return __('Tên xe');
    }
}
