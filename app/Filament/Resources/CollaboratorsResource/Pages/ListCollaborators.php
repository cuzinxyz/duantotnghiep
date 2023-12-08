<?php

namespace App\Filament\Resources\CollaboratorsResource\Pages;

use App\Filament\Resources\CollaboratorsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCollaborators extends ListRecords
{
    protected static string $resource = CollaboratorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
