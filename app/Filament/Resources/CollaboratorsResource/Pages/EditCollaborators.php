<?php

namespace App\Filament\Resources\CollaboratorsResource\Pages;

use App\Filament\Resources\CollaboratorsResource;
use App\Filament\Resources\CollaboratorsResource\Widgets\CollaboratorsOverview;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCollaborators extends EditRecord
{
    protected static string $resource = CollaboratorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    public function getHeaderWidgets(): array
    {
        return [
            CollaboratorsOverview::class
        ];
    }
}
