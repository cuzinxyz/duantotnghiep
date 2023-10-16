<?php

namespace App\Filament\Resources\SavedCarResource\Pages;

use App\Filament\Resources\SavedCarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSavedCars extends ListRecords
{
    protected static string $resource = SavedCarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
