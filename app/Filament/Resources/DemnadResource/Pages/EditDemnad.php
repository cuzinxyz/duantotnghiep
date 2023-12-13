<?php

namespace App\Filament\Resources\DemnadResource\Pages;

use App\Filament\Resources\DemnadResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemnad extends EditRecord
{
    protected static string $resource = DemnadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
