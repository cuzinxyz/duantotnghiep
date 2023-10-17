<?php

namespace App\Observers;

use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class PartnerObserver
{
    /**
     * Handle the Partner "created" event.
     */
    public function created(Partner $partner): void
    {
        //
    }

    /**
     * Handle the Partner "updated" event.
     */
    public function updated(Partner $partner): void
    {
        if ($partner->isDirty('logo_url')) {
            Storage::disk('public')->delete($partner->getOriginal('logo_url'));
        }
        if (is_null($partner->logo_url)) {
            $partner->logo_url;
            $partner->save();
        }
    }

    /**
     * Handle the Partner "deleted" event.
     */
    public function deleted(Partner $partner): void
    {
        // if (! is_null($partner->logo_url)) {
        //     Storage::disk('public')->delete($partner->logo_url);
        // }
    }

    /**
     * Handle the Partner "restored" event.
     */
    public function restored(Partner $partner): void
    {
        //
    }

    /**
     * Handle the Partner "force deleted" event.
     */
    public function forceDeleted(Partner $partner): void
    {
        //
    }
}
