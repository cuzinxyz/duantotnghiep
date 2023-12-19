<?php

namespace App\Filament\Resources\CollaboratorsResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\CollaboratorsResource;
use App\Events\reassignUnfinishedTasksAfterDayEvent;
use App\Filament\Resources\CollaboratorsResource\Widgets\CollaboratorsOverview;

class EditCollaborators extends EditRecord
{
    protected static string $resource = CollaboratorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('task')
            ->label('Bàn giao công việc')
            ->action(function() {
                $url = request()->session()->all()['_previous']['url'];
                preg_match('/\/(\d+)\/edit/', $url, $matches);
                $collaboratorId = $matches[1];

                event(new reassignUnfinishedTasksAfterDayEvent($collaboratorId));

                Notification::make()
                    ->title('Đã bàn giao công việc thành công')
                    ->success()
                    ->send();
            }),
            Actions\DeleteAction::make()
            ->action(function() {
                
            }),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    public function getHeaderWidgets(): array
    {
        return [
            CollaboratorsOverview::class
        ];
    }
}
