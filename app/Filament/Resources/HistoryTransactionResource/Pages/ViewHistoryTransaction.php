<?php

namespace App\Filament\Resources\HistoryTransactionResource\Pages;

use App\Filament\Resources\HistoryTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewHistoryTransaction extends ViewRecord
{
    protected static string $resource = HistoryTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
