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
  protected static ?string $navigationGroup = 'Hành động khách hàng';

  protected static ?string $model = Support::class;

  protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Forms\Components\Section::make("Hỗ trợ người dùng")
          ->schema([
            Forms\Components\Textarea::make('response')
            ->label('Nội dung phản hồi khách hàng')
            ->required()
            ,
        ])

      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->description('Status! 0: chưa được hỗ trợ, 1: đã hoàn thành')
      ->columns([
        Tables\Columns\TextColumn::make('user.name')
          ->fontFamily(FontFamily::Mono)
          ->searchable()
          ->label('User Name'),
        Tables\Columns\TextColumn::make('title')
          ->fontFamily(FontFamily::Mono)
          ->searchable()
          ->label('Title')
          ->words(5),
        Tables\Columns\TextColumn::make('category')
          ->fontFamily(FontFamily::Mono)
          ->searchable()
          ->label('Category')
          ->words(5),
        Tables\Columns\TextColumn::make('body')
          ->fontFamily(FontFamily::Mono)
          ->searchable()
          ->label('Body')
          ->words(5),
        Tables\Columns\TextColumn::make('response')
          ->fontFamily(FontFamily::Mono)
          ->searchable()
          ->words(5)
          ->label('Response'),
        Tables\Columns\TextColumn::make('status')
          ->badge()
          ->color(fn(string $state): string => match ($state) {
            '0' => 'gray',
            '1' => 'success'
          })
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
