<?php

namespace App\Filament\Resources\ReplyCommentsResource\Pages;

use App\Filament\Resources\ReplyCommentsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewReplyComments extends ViewRecord
{
    protected static string $resource = ReplyCommentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
