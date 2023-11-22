<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdsResource\Pages;
use App\Filament\Resources\AdsResource\RelationManagers;
use App\Models\Ads;
use App\Models\Partner;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdsResource extends Resource
{
  protected static ?string $navigationGroup = 'Giao diện';

    protected static ?string $model = Ads::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('partner_id')
                    ->label('Partner')
                    ->options(Partner::all()->pluck('name'))
                    ->searchable(),
                FileUpload::make('image_url')
                    ->imageEditor()
                    ->disk('public')
                    ->directory('ads'),
                FileUpload::make('video_url')
                    ->imageEditor()
                    ->disk('public')
                    ->directory('ads'),
                FileUpload::make('target_url')
                    ->imageEditor()
                    ->disk('public')
                    ->directory('ads'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListAds::route('/'),
            'create' => Pages\CreateAds::route('/create'),
            'edit' => Pages\EditAds::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('quảng cáo');
    }
}
