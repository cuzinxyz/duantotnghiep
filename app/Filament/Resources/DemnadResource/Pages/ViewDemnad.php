<?php

namespace App\Filament\Resources\DemnadResource\Pages;

use App\Filament\Resources\DemnadResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDemnad extends ViewRecord
{
    protected static string $resource = DemnadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\EditAction::make(),
        ];
    }
}
