<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;

class Fresh extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

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
        $commands = [
            ['optimize:clear'],
            ['migrate:fresh'],
            ['db:seed', ['--class' => 'PopulateSeeder']],
        ];

        $this->disableDatabaseConstraints();
        $this->perform($commands);
        $this->enableDatabaseConstraints();
    }

    protected function disableDatabaseConstraints(): void
    {
        Schema::disableForeignKeyConstraints();
    }

    protected function perform(array $commands): void
    {
        foreach ($commands as $command) {

            $arguments = $command[1] ?? [];

            $this->callSilent($command[0], $arguments);
        }

        $this->info('you are fresh now');
    }

    protected function enableDatabaseConstraints(): void
    {
        Schema::enableForeignKeyConstraints();
    }
}
