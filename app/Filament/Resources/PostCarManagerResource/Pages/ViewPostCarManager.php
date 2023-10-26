<?php

namespace App\Filament\Resources\PostCarManagerResource\Pages;

use App\Filament\Resources\PostCarManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPostCarManager extends ViewRecord
{
    protected static string $resource = PostCarManagerResource::class;

    protected static ?string $title = 'Xem chi tiết bài đăng';

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\EditAction::make(),
    //     ];
    // }
}
