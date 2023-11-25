<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\SavedCar;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontFamily;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Support\Enums\IconPosition;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SavedCarResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SavedCarResource\RelationManagers;

class SavedCarResource extends Resource
{
  protected static ?string $navigationGroup = 'Hành động khách hàng';

    protected static ?string $model = SavedCar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Xe đã lưu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('car_id')
                    ->relationship('car', 'title')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->fontFamily(FontFamily::Mono)
                    ->searchable()
                    ->label('TT'),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Tên người dùng')
                    ->searchable(),
                Tables\Columns\TextColumn::make('car.title')
                    ->label('Tiêu đề xe')
                    ->icon('heroicon-m-bookmark')
                    ->searchable()
                    ->iconPosition(IconPosition::After),
            ])

            ->filters([
                Tables\Filters\TrashedFilter::make(),
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
//            json_encode($)
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSavedCars::route('/'),
            'create' => Pages\CreateSavedCar::route('/create'),
            'edit' => Pages\EditSavedCar::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel(): string
    {
        return __('Xe đã lưu');
    }
}
