<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DBDrop extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:drop {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop a database';

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
     * @return int
     */
    public function handle()
    {
        $db = $this->argument('name');
        $query = 'DROP DATABASE IF EXISTS `' . $db . '`';
        config(['database.connections.mysql.database' => null]);
        DB::statement($query);
        config(['database.connections.mysql.database' => $db]);
        $this->info("Database dropped successfully");
    }
}
