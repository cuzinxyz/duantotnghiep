<?php

namespace App\Filament\Resources\ReplyCommentsResource\Pages;

use App\Filament\Resources\ReplyCommentsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReplyComments extends EditRecord
{
    protected static string $resource = ReplyCommentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
