<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Events\Dispatcher;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use App\Events\WorkCollaboratorWhenOnline;

class UpdateActiceStatusUser
{
    /**
     * Handle user login events.
     */
    public function handleUserLogin(Login $event): void
    {
        User::where('id', $event->user->id)->update([
            'active' => 1,
        ]);

        event(new WorkCollaboratorWhenOnline());
    }

    /**
     * Handle user logout events.
     */
    public function handleUserLogout(Logout $event): void
    {
        // dd($event->user->id);
        if(auth()->check()) {
            User::where('id', auth()->id())->update([
                'active' => 0,
            ]);
        }
    }

    /**
     * Register the listeners for the subscriber.
     */
    public function subscribe(Dispatcher $events): array
    {
        return [
            Login::class => 'handleUserLogin',
            Logout::class => 'handleUserLogout',
        ];
    }
}
