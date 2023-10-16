<?php

namespace App\Filament\Resources\ReplyCommentsResource\Pages;

use App\Filament\Resources\ReplyCommentsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReplyComments extends ListRecords
{
    protected static string $resource = ReplyCommentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
