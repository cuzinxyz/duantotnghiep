<?php

namespace App\Filament\Resources\SupportResource\Pages;

use App\Filament\Resources\SupportResource;
use App\Models\ChMessage;
use App\Models\Support;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class EditSupport extends EditRecord
{
    protected static string $resource = SupportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model{
        if($record->update($data)){
            ChMessage::create([
                'from_id' => Auth::user()->id,
                'to_id' => $record->user_id,
                'body' => $record->response,
                'seen' => 0
            ]);
            Support::where('id', $record->id)->update(['status' => 1]);
            $user = User::find($record->user_id);
            Mail::send('mails.response-support', compact('record', 'user'), function($email) use($user){
                $email->subject('EMAIL PHẢN HỒI YÊU CẦU HỖ TRỢ CỦA KHÁCH HÀNG');
                $email->to($user['email'], $user['name']);
            });
        }
        return $record;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
