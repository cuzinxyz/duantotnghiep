<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ViewColumn;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('price')->required()->numeric(),
                TextInput::make('user_id')->required(),
                Select::make('brand_id')->options([
                    '1' => 'Tesla',
                    '2' => 'VinFast'
                ])->required()->placeholder('Chọn loại xe'),
                Select::make('city')->options([
                    'Hà Nội' => 'Hà Nội',
                    'Tp Hồ Chí Minh' => 'Tp Hồ Chí Minh'
                ])->required()->placeholder('Chọn thành phố'),
                TextInput::make('full_address')->required()->placeholder('Quận, Huyện, Thị xã'),
                TextInput::make('recommended')->required()->numeric(),
                Section::make('Contact')->schema([
                    TextInput::make('email')->email()->required(),
                    TextInput::make('phone_number')->numeric()->required(),
                    TextInput::make('facebook'),
                    TextInput::make('twitter'),
                ]),
                Section::make('Car Infor')->schema([
                    TextInput::make('Mileage')->required()->numeric(),
                    TextInput::make('Engine')->required()->numeric(),
                    Select::make('FuelType')->options([
                        'Petrol' => 'Petrol',
                        'Gas' => 'Gas'
                    ]),
                    Select::make('Condition')->options([
                        'used' => 'Used',
                    ]),
                    CheckboxList::make('features')->required()->options([
                        'PremiumWheel' => 'Premium Wheel',
                        'Moonroof' => 'Moonroof',
                        'PremiumAudio' => 'Premium Audio',
                        'Navigation' => 'Navigation',
                        'FrontHeatedSeats' => 'Front Heated Seats',
                        'PremiumSeatMaterial' => 'Premium Seat Material',
                        'Bluetooth' => 'Bluetooth',
                        'PremiumSeatMaterial' => 'Premium Seat Material',
                        'FrontHeatedSeats' => 'Front Heated Seats',
                        'RemoteEngineStart' => 'Remote Engine Start',
                        'BlindSpotSystem' => 'Blind Spot System',
                        'Multi_ZoneClimateControl' => 'Multi-Zone Climate Control'
                    ]),
                ]),
                FileUpload::make('verhicle_image_library')
                    ->multiple()->image(),
                FileUpload::make('verhicle_videos')
                    ->required(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('brand_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('full_address')
                    ->searchable(),
                Tables\Columns\IconColumn::make('recommended')
                    ->boolean(),
                Tables\Columns\IconColumn::make('car_info')
                    ->separator(','),
                Tables\Columns\ImageColumn::make('verhicle_image_library'),
                // Tables\Columns\ViewColumn::make('verhicle_image_library')->view('tables.columns.images-car'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->dateTime()
                //     ->sortable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                // 
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'view' => Pages\ViewCar::route('/{record}'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
