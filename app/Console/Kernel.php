<?php

namespace App\Console;

use App\Console\Commands\CleanTempFolder;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        CleanTempFolder::class,
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->everyMinute();

        $schedule->command('clean:tempFolder')->everyMinute();

        // $schedule->call(function () {
        //     Log::info('Cron');
        // })->everyMinute()->description('Cron');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
