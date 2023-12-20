<?php

namespace App\Providers;

use App\Events\NotificationExtendServices;
use App\Events\reassignUnfinishedTasksAfterDayEvent;
use App\Models\User;
use App\Models\Admin;
use App\Models\Banner;
use App\Models\Partner;
use App\Observers\UserObserver;
use App\Observers\AdminObserver;
use App\Observers\BannerObserver;
use App\Observers\PartnerObserver;
use App\Events\WorkCollaboratorEvent;
use Illuminate\Auth\Events\Registered;
use App\Listeners\UpdateActiceStatusUser;
use App\Events\WorkCollaboratorWhenOnline;
use App\Listeners\NotificationExtendServicesListen;
use App\Listeners\reassignUnfinishedTasksAfterDayListen;
use App\Listeners\WorkCollaboratorListener;
use App\Listeners\WorkCollaboratorWhenOnlineListener;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        WorkCollaboratorEvent::class => [
            WorkCollaboratorListener::class
        ],

        WorkCollaboratorWhenOnline::class => [
            WorkCollaboratorWhenOnlineListener::class
        ],

        reassignUnfinishedTasksAfterDayEvent::class => [
            reassignUnfinishedTasksAfterDayListen::class
        ],  

        NotificationExtendServices::class => [
            NotificationExtendServicesListen::class
        ],
        
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Banner::observe(BannerObserver::class);
        User::observe(UserObserver::class);
        Admin::observe(AdminObserver::class);
        Partner::observe(PartnerObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
        UpdateActiceStatusUser::class,
    ];
}
