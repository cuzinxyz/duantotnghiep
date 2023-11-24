<?php

namespace App\Filament\Resources\SupportResource\Pages;

use App\Filament\Resources\SupportResource;
use App\Models\ChMessage;
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
        $result = $record->update($data);
        if($result){
            ChMessage::create([
                'from_id' => 1,
                'to_id' => $record->user_id,
                'body' => $record->body,
                'seen' => 0
            ]);
            $user = User::find($record->user_id);
            // dd($user);
            Mail::send('mails.response-support', compact('record', 'user'), function($email) use($user, $record){
                $email->subject('PHẢN HỒI YÊU CẦU HỖ TRỢ KHÁCH HÀNG');
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
