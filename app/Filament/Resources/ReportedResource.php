<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Reported;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Mail\CarRegistMail;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\ReplicateAction;
use App\Filament\Resources\ReportedResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ReportedResource\RelationManagers;

class ReportedResource extends Resource
{
  protected static ?string $navigationGroup = 'Hành động khách hàng';

    protected static ?string $model = Reported::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fromUsers.name')
                    ->label('Người tố cáo')
                    ->sortable(),

                Tables\Columns\TextColumn::make('toUsers.name')
                    ->label('Người bị tố cáo')
                    ->sortable(),

                Tables\Columns\TextColumn::make('car_id')
                    ->label('Tên xe')
                    ->sortable(),

                Tables\Columns\TextColumn::make('content')
                    ->label('Nội dung tố cáo'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian')
                    ->dateTime()
                    ->sortable()
                    ->since()
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
            ActionGroup::make([
                ReplicateAction::make()
                    ->label('Xem bài đăng')
                    // ->successRedirectUrl(route('/'))
                    ->url('/')
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-eye'),
                Tables\Actions\DeleteAction::make(),
                // Tables\Actions\ForceDeleteAction::make(),
                // Tables\Actions\RestoreAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->button()
            ->label('Hành động')
            ])

            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([]);
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
            'index' => Pages\ListReporteds::route('/'),
            'view' => Pages\ViewReported::route('/{record}'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getModelLabel(): string
    {
        return __('Report');
    }

    public function redirectToFrontend()
    {
        return redirect()->route('/');
    }
}
