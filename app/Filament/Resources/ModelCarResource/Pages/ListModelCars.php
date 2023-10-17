<?php

namespace App\Filament\Resources\ModelCarResource\Pages;

use App\Filament\Resources\ModelCarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModelCars extends ListRecords
{
    protected static string $resource = ModelCarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
