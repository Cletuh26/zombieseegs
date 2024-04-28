<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Iniciar base de datos desde cero';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('migrate:fresh');
        $this->call('db:seed');
        
        $this->info('Base de datos reseteada y rellenada correctamente!');
    }
}
