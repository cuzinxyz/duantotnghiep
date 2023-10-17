<?php

namespace App\Observers;

use App\Models\Admin;
use Illuminate\Support\Facades\Storage;

class AdminObserver
{
    /**
     * Handle the Admin "created" event.
     */
    public function created(Admin $admin): void
    {
        //
    }

    /**
     * Handle the Admin "updated" event.
     */
    public function updated(Admin $admin): void
    {
        if ($admin->isDirty('avatar')) {
            Storage::disk('public')->delete($admin->getOriginal('avatar'));
        }
        if (is_null($admin->avatar)) {
            $admin->avatar;
            $admin->save();
        }
    }

    /**
     * Handle the Admin "deleted" event.
     */
    public function deleted(Admin $admin): void
    {
        // if (! is_null($admin->avatar)) {
        //     Storage::disk('public')->delete($admin->avatar);
        // }
    }

    /**
     * Handle the Admin "restored" event.
     */
    public function restored(Admin $admin): void
    {
        //
    }

    /**
     * Handle the Admin "force deleted" event.
     */
    public function forceDeleted(Admin $admin): void
    {
        //
    }
}
