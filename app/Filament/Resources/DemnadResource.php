<?php

namespace App\Filament\Resources;

use App\Models\Demnad;
use App\Filament\Resources\DemnadResource\Pages;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\Actions;
use Filament\Infolists\Components\Actions\Action;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\IconColumn;
use Filament\Resources\Resource;
use Filament\Infolists\Infolist;
use Filament\Notifications\Notification;

class DemnadResource extends Resource
{
  protected static ?string $navigationGroup = 'Quản lý nội dung';

    protected static ?string $model = Demnad::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Thông tin')
                    ->schema([
                        TextEntry::make('user.name')
                            ->label('Tác giả')
                            ->icon('heroicon-o-user-circle'),
                        TextEntry::make('user.email')
                            ->label('Email')
                            ->icon('heroicon-m-envelope'),
                        TextEntry::make('user.phone_number')
                            ->label('SĐT')
                            ->icon('heroicon-o-phone'),
                        TextEntry::make('created_at')
                            ->label('Thời gian tạo')
                            ->icon('heroicon-o-calendar-days'),
                        IconEntry::make('status')
                            ->boolean() 
                            ->label('Trạng thái'),
                        TextEntry::make('service.service_name')
                            ->label('Loại gói tin')
                            ->badge()
                            ->color('warning'),
                    ])->columns(2)
                    ->columnSpan(1),
                Section::make('Hành động')
                    ->schema([
                        Actions::make([
                            Action::make('activePost')
                                ->label('Duyệt bài')
                                ->icon('heroicon-m-check')
                                ->requiresConfirmation()
                                ->action(function (Demnad $record) {
                                    $record->status = 1;
                                    $record->save();
                                })
                                ->successNotificationTitle('Phê duyệt thành công'),
                            Action::make('unActivePost')
                                ->label('Không duyệt')
                                ->icon('heroicon-m-x-mark')
                                ->color('danger')
                                ->requiresConfirmation()
                                ->form([
                                    TextInput::make('reason')
                                        ->label('Vui lòng điền lý do ?')
                                        ->required(),
                                ])
                                ->action(function (array $data, Demnad $record) {
                                    $record->reason = $data['reason'];
                                    $record->status = 0;
                                    $record->save();
                                })
                                ->successNotification(
                                    Notification::make()
                                        ->success()
                                        ->title('Đã gửi thông báo tới tác giả'),
                                ),
                        ])->fullWidth(),
                    ])->columnSpan(1),
                Section::make('Chi tiết')
                    ->schema([
                        TextEntry::make('title')
                            ->label('Tiêu đề'),
                        TextEntry::make('content')
                            ->label('Nội dung'),
                    ])
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Tác giả'),

                Tables\Columns\TextColumn::make('title')
                    ->label('Tiêu đề'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian')
                    ->dateTime()
                    ->sortable()
                    ->since(),
                IconColumn::make('status')
                    ->label('Phê duyệt')
                    ->icon(fn (string $state): string => match ($state) {
                        '0' => 'heroicon-o-x-circle',
                        '1' => 'heroicon-o-check-circle',
                    })
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListDemnads::route('/'),
            // 'create' => Pages\CreateDemnad::route('/create'),
            'view' => Pages\ViewDemnad::route('/{record}'),
            'edit' => Pages\EditDemnad::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('bài đăng mua');
    }
}
