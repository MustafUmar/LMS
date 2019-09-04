<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MonthlyEndContrib extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'end:contrib';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'End the current month contributions.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        error_log('Running sched task');
        $this->info('Contributions closed for this month.');
    }
}
