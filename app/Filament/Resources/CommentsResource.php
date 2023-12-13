<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Comments;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use App\Filament\Resources\CommentsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CommentsResource\RelationManagers;
use Filament\Infolists\Components\Actions;
use Filament\Infolists\Components\Actions\Action;

class CommentsResource extends Resource
{
    protected static ?string $navigationGroup = 'Tương tác';

    protected static ?string $model = Comments::class;
    

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Bình luận';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Chi tiết bình luận')
                    ->schema([
                        TextEntry::make('user.name')
                            ->label('Tác giả')
                            ->icon('heroicon-o-user-circle'),
                        TextEntry::make('car.title')
                            ->label('Tin đăng')
                            ->icon('heroicon-m-newspaper'),
                        TextEntry::make('news.title')
                            ->label('Tin tức')
                            ->icon('heroicon-o-newspaper'),
                        TextEntry::make('body')
                            ->label('Nội dung bình luận')
                            ->icon('heroicon-o-chat-bubble-bottom-center'),
                    ])->columns(2),
                Section::make('Hành động')
                    ->schema([
                        Actions::make([
                            Action::make('deleteComment')
                                ->label('Xoá bình luận')
                                ->color('danger')
                                ->icon('heroicon-m-trash')
                                ->requiresConfirmation()
                                ->action(function (Comments $comment) {
                                    $comment->delete();

                                    redirect()->route('filament.admin.resources.comments.index');
                                })
                                ->successNotificationTitle('Xoá thành công'),
                        ])
                    ])->columnSpan(1),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('body')
                    ->label('Nội dung')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Tên')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('car.title')
                    ->label('Tin đăng')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('news.title')
                    ->label('Tin tức')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                // Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListComments::route('/'),
            'view' => Pages\ViewComments::route('/{record}'),
        ];
    }
    public static function getModelLabel(): string
    {
        return __('Bình luận');
    }
}
