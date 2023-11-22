<?php

namespace App\Filament\Resources\PostCarManagerResource\Pages;

use App\Filament\Resources\PostCarManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPostCarManager extends EditRecord
{
    protected static string $resource = PostCarManagerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
