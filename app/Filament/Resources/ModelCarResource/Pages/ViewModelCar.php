<?php

namespace App\Filament\Resources\ModelCarResource\Pages;

use App\Filament\Resources\ModelCarResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewModelCar extends ViewRecord
{
    protected static string $resource = ModelCarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
