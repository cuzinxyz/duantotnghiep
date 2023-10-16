<?php

namespace App\Filament\Resources\SavedCarResource\Pages;

use Filament\Actions;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\SavedCarResource;

class EditSavedCar extends EditRecord
{
    protected static string $resource = SavedCarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
