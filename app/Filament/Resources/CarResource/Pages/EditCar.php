<?php

namespace App\Filament\Resources\CarResource\Pages;

use App\Filament\Resources\CarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCar extends EditRecord
{
    protected static string $resource = CarResource::class;


    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    // protected static string $view = 'filament.pages.view-video';
}
