<?php

namespace App\Filament\Resources\CarResource\Pages;

use App\Filament\Resources\CarResource;
use Filament\Resources\Pages\ViewRecord;


class ViewVideo extends ViewRecord
{
    protected static string $resource = CarResource::class;

    protected static string $view = 'filament.pages.view-video';
}