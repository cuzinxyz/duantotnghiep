<?php

namespace App\Console\Commands;

use App\Events\reassignUnfinishedTasksAfterDayEvent;
use Illuminate\Console\Command;

class ReassignTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:reassign-task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Chia lại công việc nhân viên';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        event(new reassignUnfinishedTasksAfterDayEvent());
    }
}
