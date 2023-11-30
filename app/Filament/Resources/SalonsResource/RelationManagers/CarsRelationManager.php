<?php

namespace App\Filament\Resources\SalonsResource\RelationManagers;

use App\Filament\Resources\CarResource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarsRelationManager extends RelationManager
{
    protected static string $relationship = 'cars';

    public function form(Form $form): Form
    {
        return CarResource::form($form);
    }

    public function table(Table $table): Table
    {
        return CarResource::table($table);
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}


