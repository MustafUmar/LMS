<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use App\MonthlyContribution;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\MonthlyEndContrib::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->command('end:contrib')->everyMinute()->appendOutputTo(storage_path('logs/monthlysched.log'));

        if (Schema::hasTable('monthly_contributions')) {
            error_log("checking mctb..");
            $mctb = MonthlyContribution::where('current', 1)->latest()->get();
            if(count($mctb) > 1) {
                MonthlyContribution::where('current', 1)->update(['current' => 0]);
                // MonthlyContribution::whereMonth('begin_date', now()->month)->whereYear('begin_date', now()->year)->get();
                $checkmonth = MonthlyContribution::where('begin_date', '>', now()->startOfMonth())->latest()->first();
                if($checkmonth) {
                    if(now()->day >= 28)
                        MonthlyContribution::create([
                            'begin_date' => now()->addMonth()->startOfMonth(),
                            'close_date' => now()->addMonth()->endOfMonth(),
                            'current' => 1
                         ]);
                    else {
                        $checkmonth->current = true;
                        $checkmonth->save();
                    }
                } else {
                    if(now()->day >= 28)
                        MonthlyContribution::create([
                            'begin_date' => now()->addMonth()->startOfMonth(),
                            'close_date' => now()->addMonth()->endOfMonth(),
                            'current' => 1]);
                    else
                        MonthlyContribution::create([
                            'begin_date' => now()->startOfMonth(),
                            'close_date' => now()->endOfMonth(),
                            'current' => 1
                        ]);
                }
            } elseif (count($mctb) == 1) {
                $checkcur = $mctb->first();
                if(Carbon::parse($checkcur->begin_date)->month != now()->month && Carbon::parse($checkcur->begin_date)->year != now()->year) {
                    $checkcur->current = 0;
                    $checkcur->save();
                    if(now()->day >= 28)
                        MonthlyContribution::create([
                            'begin_date' => now()->addMonth()->startOfMonth(),
                            'close_date' => now()->addMonth()->endOfMonth(),
                            'current' => 1]);
                    else
                        MonthlyContribution::create([
                            'begin_date' => now()->startOfMonth(),
                            'close_date' => now()->endOfMonth(),
                            'current' => 1
                        ]);
                } else {
                    if(now()->day >= 28) {
                        $checkcur->current = 0;
                        $checkcur->save();
                        MonthlyContribution::create(['begin_date' => now()->addMonth()->startOfMonth(), 'current' => 1]);
                    }
                }
                
            } else {
                MonthlyContribution::create(['begin_date' => now()->startOfMonth(), 'current' => 1]);
            }
        }
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
