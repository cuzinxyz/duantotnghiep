<?php

namespace App\Console;

use App\Events\reassignUnfinishedTasksAfterDayEvent;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        // ...
        \App\Console\Commands\GenerateSitemap::class,
        \App\Console\Commands\ReassignTask::class
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('generate:sitemap')->dailyAt('15:00');
        $schedule->command('generate:reassign-task')->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
