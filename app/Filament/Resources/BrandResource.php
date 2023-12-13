<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandResource\Pages;
use App\Filament\Resources\BrandResource\RelationManagers;
use App\Models\Brand;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BrandResource extends Resource
{
    protected static ?string $navigationGroup = 'Nội dung chính';

    protected static ?string $model = Brand::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Thương hiệu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make("Biểu tượng của nhà sản xuất")
                    ->schema([
                        Forms\Components\TextInput::make('brand_name')
                            ->required()
                            ->columnSpanFull()
                            ->maxLength(191),
                        Forms\Components\FileUpload::make('logo_url')
                            ->label('Hình ảnh')
                            ->required()
                            ->columnSpanFull()
                            ->image()
                            ->imageEditor()
                            ->openable()
                            ->directory('brand_image')
                            ->required(),
                    ])

            ]);
    }

    /**
     * @throws \Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('brand_name')
                    ->label('Tên thương hiệu')
                    ->searchable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('logo_url')
                    ->label('Biểu tượng url')
                    ->size(150),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                // Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    // Tables\Actions\ForceDeleteBulkAction::make(),
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
            'index' => Pages\ListBrands::route('/'),
            'create' => Pages\CreateBrand::route('/create'),
            'view' => Pages\ViewBrand::route('/{record}'),
            'edit' => Pages\EditBrand::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel(): string
    {
        return __('Thương hiệu ');
    }

    // public static function getEloquentQuery(): Builder
    // {
    //   return parent::getEloquentQuery()
    //     ->withoutGlobalScopes([
    //       SoftDeletingScope::class,
    //     ]);
    // }
}
