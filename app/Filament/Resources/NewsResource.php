<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
  protected static ?string $navigationGroup = 'Quản lý nội dung';

  protected static ?string $model = News::class;

  protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        TextInput::make('title')
          ->required()
          ->maxLength(255),
        TextInput::make('content')
          ->required()
          ->maxLength(255),
        TextInput::make('summary')
          ->required()
          ->maxLength(255),
        Textarea::make('thumbnailImage')
          ->required()
          ->maxLength(65535),
        TextInput::make('viewCount'),
        TextInput::make('shareCount'),
        Toggle::make('isPublished')
          ->required(),
        Select::make('user_id')
        ->relationship('user','name')
        ->required()
        //
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([

        TextColumn::make('title')
          ->searchable(),
        TextColumn::make('content')
          ->searchable(),
        TextColumn::make('summary')
          ->searchable(),
        TextColumn::make('thumbnailImage')
          ->searchable(),
        TextColumn::make('viewCount'),
        TextColumn::make('shareCount'),
        ToggleColumn::make('isPublished'),
        TextColumn::make('user.name'),


        TextColumn::make('created_at')
          ->dateTime()
          ->sortable()
          ->toggleable(isToggledHiddenByDefault: true),
        TextColumn::make('updated_at')
          ->dateTime()
          ->sortable()
          ->toggleable(isToggledHiddenByDefault: true),
        TextColumn::make('deleted_at')
          ->dateTime()
          ->sortable(),
        //
      ])
      ->filters([
        //
      ])
      ->actions([
        Tables\Actions\ViewAction::make(),
        Tables\Actions\EditAction::make(),
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
      'index' => Pages\ListNews::route('/'),
      'create' => Pages\CreateNews::route('/create'),
      'view' => Pages\ViewNews::route('/{record}'),
      'edit' => Pages\EditNews::route('/{record}/edit'),
    ];
  }
}
