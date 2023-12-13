<?php

namespace App\Filament\Resources\ModelCarResource\Pages;

use App\Filament\Resources\ModelCarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModelCar extends EditRecord
{
    protected static string $resource = ModelCarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
