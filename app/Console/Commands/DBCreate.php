<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DBCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a database';

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
        $db = $this->argument('name') ?? env('DB_DATABASE');
        $query = 'CREATE DATABASE IF NOT EXISTS `' . $db . '` CHARACTER SET `utf8mb4` COLLATE `utf8mb4_unicode_ci`;';
        config(['database.connections.mysql.database' => null]);
        DB::statement($query);
        config(['database.connections.mysql.database' => $db]);
        $this->info("Database created successfully");
    }
}
