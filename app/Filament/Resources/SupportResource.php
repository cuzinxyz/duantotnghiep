<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Infolists\Infolist;
use Filament\Tables;
use App\Models\Support;
use Filament\Forms\Form;
use Filament\Tables\Table;
use PhpParser\Node\Stmt\Label;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontFamily;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SupportResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SupportResource\RelationManagers;

class SupportResource extends Resource
{
  protected static ?string $model = Support::class;

  protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Forms\Components\Textarea::make('response')
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->description('Status! 0: chưa được hỗ trợ, 1: đang hỗ trợ, 2: đã hoàn thành, 3: lưu trữ')
      ->columns([
        Tables\Columns\TextColumn::make('user.name')
          ->fontFamily(FontFamily::Mono)
          ->searchable()
          ->label('User name'),
        Tables\Columns\TextColumn::make('title')
          ->fontFamily(FontFamily::Mono)
          ->searchable()
          ->label('Title')
          ->words(10),
        Tables\Columns\TextColumn::make('category')
          ->fontFamily(FontFamily::Mono)
          ->searchable()
          ->label('Category'),
        Tables\Columns\TextColumn::make('status')
          ->badge()
          ->color(fn(string $state): string => match ($state) {
            '0' => 'gray',
            '1' => 'warning',
            '2' => 'success',
            '3' => 'danger',
          })
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

  public static function canCreate(): bool
  {
    return false;
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListSupports::route('/'),
      // 'create' => Pages\CreateSupport::route('/create'),
      'edit' => Pages\EditSupport::route('/{record}/edit'),
    ];
  }
}
