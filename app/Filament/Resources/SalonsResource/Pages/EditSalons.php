<?php

namespace App\Filament\Resources\SalonsResource\Pages;

use App\Filament\Resources\SalonsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSalons extends EditRecord
{
    protected static string $resource = SalonsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
