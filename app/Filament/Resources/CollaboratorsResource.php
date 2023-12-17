<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Collaborators;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CollaboratorsResource\Pages;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\CollaboratorsResource\RelationManagers;
use App\Filament\Resources\CollaboratorsResource\RelationManagers\CarRelationManager;
use App\Filament\Resources\CollaboratorsResource\RelationManagers\DemnadRelationManager;
use App\Filament\Resources\CollaboratorsResource\RelationManagers\ReportCollaboratorRelationManager;
use App\Filament\Resources\CollaboratorsResource\RelationManagers\SalonCollaboratorRelationManager;
use App\Filament\Resources\CollaboratorsResource\RelationManagers\SupportCollaboratorRelationManager;
use App\Filament\Resources\CollaboratorsResource\RelationManagers\WithDrawCollaboratorRelationManager;
use App\Filament\Resources\CollaboratorsResource\Widgets\CollaboratorsOverview;

class CollaboratorsResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Tài khoản';

    protected static ?string $navigationLabel = 'Cộng tác viên';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Họ tên')
                            ->rules(['required']),
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->rules(['required','email'])
                            ->unique(),
                        Forms\Components\TextInput::make('phone_number')
                            ->label('Số điện thoại')
                            ->tel()
                            ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                            ->rules(['required']),
                        Forms\Components\TextInput::make('password')
                            ->password()
                            ->visible(fn ($livewire) => $livewire instanceof CreateUser)
                            ->rules(['required']),
                    ])->columnSpan([
                        'md' => 1,
                        'xl' => 2
                    ]),
                Section::make()
                    ->schema([
                        FileUpload::make('avatar')
                            ->imageEditor()
                            ->disk('public')
                            ->required()
                            ->rules(['required'])
                            ->directory('avatars/users'),
                    ])->columnSpan([
                        'md' => 1,
                        'xl' => 1
                    ]),

            ])->columns([
                'md' => 2,
                'xl' => 3
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('avatar')
                    ->label('Ảnh đại diện')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Họ tên')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone_number')
                    ->default('Không có số điện thoại')
                    ->label('Số điện thoại'),


            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCollaborators::route('/'),
            'create' => Pages\CreateCollaborators::route('/create'),
            'edit' => Pages\EditCollaborators::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('is_collaborator', 1)->withoutGlobalScope(SoftDeletingScope::class);
    }

    public static function getModelLabel(): string
    {
        return __('cộng tác viên');
    }

    public static function getRelations(): array
    {
        return [
            CarRelationManager::class,
            DemnadRelationManager::class,
            SalonCollaboratorRelationManager::class,
            WithDrawCollaboratorRelationManager::class,
            ReportCollaboratorRelationManager::class,
            SupportCollaboratorRelationManager::class

        ];
    }

    public static function getWidgets(): array
    {
        return [
            CollaboratorsOverview::class
        ];
    }
}
