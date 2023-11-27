<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdsResource\Pages;
use App\Models\Ads;
use App\Models\Partner;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

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
                    ->label('Đối tác')
                    ->relationship(name: 'partner', titleAttribute: 'name'),
                FileUpload::make('image_url')
                    ->label('Ảnh')
                    ->imageEditor()
                    ->disk('public')
                    ->directory('ads'),
                TextInput::make('video_url')
                    ->label('Đường dẫn video')
                    ->url(),
                TextInput::make('target_url')
                    ->label('Đường dẫn đích')
                    ->url(),
                Radio::make('priority')
                    ->label('Vị trí')
                    ->options([
                        '1' => 'Trang chủ',
                        '2' => 'Các trang khác',
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('partner.name')
                    ->label('Đối tác'),
                ImageColumn::make('image_url')
                    ->label('Đường dẫn ảnh'),
                TextColumn::make('target_url')
                    ->label('Đường dẫn đích'),


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
