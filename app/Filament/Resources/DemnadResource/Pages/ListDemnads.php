<?php

namespace App\Filament\Resources\DemnadResource\Pages;

use App\Filament\Resources\DemnadResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDemnads extends ListRecords
{
    protected static string $resource = DemnadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
