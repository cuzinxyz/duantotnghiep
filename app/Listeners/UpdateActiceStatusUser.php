<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Events\Dispatcher;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;

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
    }

    /**
     * Handle user logout events.
     */
    public function handleUserLogout(Logout $event): void
    {
        User::where('id', $event->user->id)->update([
            'active' => 0,
        ]);
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
