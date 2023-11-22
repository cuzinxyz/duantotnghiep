<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;

class ServiceResource extends Resource
{
  protected static ?string $navigationGroup = 'Quản lý nội dung';

    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('service_name')
                            ->label('Tên gói')
                            ->required(),
                        Forms\Components\TextInput::make('price')
                            ->label('Giá')
                            ->required(),
                        Forms\Components\TextInput::make('expiration_date')
                            ->prefix('Số ngày sẽ hết hạn')
                            ->label('Thời hạn')
                            ->numeric()
                            ->placeholder('30')
                            ->required(),
                        Forms\Components\TextInput::make('number_of_pushes')
                            ->label('Số lượt đẩy tin')
                            ->numeric()
                            ->placeholder('ex: 2')
                            ->required(),
                    ])->columnSpan(1),
                Section::make()
                    ->schema([
                        MarkdownEditor::make('description')
                            ->label('Mô tả')
                            ->required(),
                    ])->columnSpan(1),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('service_name')
                ->label('Gói')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                ->label('Giá')
                    ->numeric(
                        decimalPlaces: 0,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    )
                    ->money('VND'),
                Tables\Columns\TextColumn::make('description')
                ->label('Mô tả')
                ->limit(50),
                Tables\Columns\TextColumn::make('expiration_date')
                ->label('Ngày hết hạn')

            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('dịch vụ');
    }
}
