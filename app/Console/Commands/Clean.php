<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Message;


class Clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laracarte';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cleand database after one month';

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
        $this->info('cleaning database...');
    }
}
