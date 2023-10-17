<?php

namespace App\Filament\Resources\BannerResource\Pages;

use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\BannerResource;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class EditBanner extends EditRecord
{
    protected static string $resource = BannerResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {

        $id = $record->id;

        $old_image = Banner::find($id)->image_url;
        if(isset($old_image)) {
            $resultUrl = Storage::delete('public/' . $old_image);
        }

        $record->update($data);
        return $record;
    }
}
