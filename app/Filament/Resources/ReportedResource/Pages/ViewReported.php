<?php

namespace App\Filament\Resources\ReportedResource\Pages;

use App\Filament\Resources\ReportedResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewReported extends ViewRecord
{
    protected static string $resource = ReportedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
