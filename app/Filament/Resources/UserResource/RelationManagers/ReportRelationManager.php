<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Grid;
use Illuminate\Database\Eloquent\Model;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\RelationManagers\RelationManager;

class ReportRelationManager extends RelationManager
{
    protected static string $relationship = 'report';

    protected static ?string $title = 'Tố cáo';
    protected static ?string $label = 'Tố cáo';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('toUsers.name')
                    ->label('Người bị tố cáo')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Thời gian')
                    ->dateTime()
                    ->sortable()
                    ->since(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Trạng thái')
                    ->badge()
                    ->state(function (Model $record) {
                        if ($record->status == 0) return 'Chờ xử lý';
                        if ($record->status == 1) return 'Đã xử lý';
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('collaborator.name')
                    ->label('Người kiểm duyệt')
                    ->default(function (Model $model) {
                        if (
                            $model->collaborator_id == null
                            && $model->status == 1
                        )
                            return 'Quản trị viên';

                        if ($model->collaborator_id == null && $model->status == 0) return 'Chưa có người kiểm duyệt';
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->emptyStateActions([]);
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Grid::make()
                    ->schema([
                        Section::make('Thông tin người tố cáo')
                        ->schema([
                            TextEntry::make('fromUsers.name')
                            ->label('Tên người tố cáo')
                            ->icon('heroicon-o-user-circle'),

                            TextEntry::make('fromUsers.email')
                            ->label('Email')
                            ->icon('heroicon-m-envelope'),

                            TextEntry::make('fromUsers.phone_number')
                            ->label('Số điện thoại')
                            ->icon('heroicon-o-phone'),

                            TextEntry::make('created_at')
                            ->label('Thời gian tạo')
                            ->icon('heroicon-o-calendar-days'),
                        ])
                            ->columns([
                                'xl' => 2,
                                '2xl' => 2,
                            ]),

                        Section::make('Nội dung')
                        ->schema([
                            Section::make('')
                                ->schema([
                                    TextEntry::make('toUsers.name')
                                    ->label('Người bị tố cáo'),

                                    TextEntry::make('cars.title')
                                    ->label('Xe bị tố cáo'),

                                    TextEntry::make('content')
                                    ->label('Nội dung tố cáo'),
                                ])
                                ->columns([
                                    'xl' => 2,
                                    '2xl' => 2,
                                ]),
                        ]),
                    ])->columns([
                        'xl' => 4,
                        '2xl' => 5,
                    ]),

            ]);
    }
}
