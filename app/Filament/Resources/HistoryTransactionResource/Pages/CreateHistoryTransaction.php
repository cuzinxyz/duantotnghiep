<?php

namespace App\Filament\Resources\HistoryTransactionResource\Pages;

use App\Filament\Resources\HistoryTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHistoryTransaction extends CreateRecord
{
    protected static string $resource = HistoryTransactionResource::class;
}
