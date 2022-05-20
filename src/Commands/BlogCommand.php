<?php

namespace Nhiha60591\LaravelBase\Commands;

use Illuminate\Console\Command;
use Nhiha60591\LaravelBase\ControllerGenerator;

class BlogCommand extends Command
{
    protected $signature = 'lr-base:blog';

    protected $description = 'Generate blog structure';

    public function handle()
    {
        $this->info('Start generate blog structure');
        (new ControllerGenerator([
            'name' => $this->argument('name'),
            'force' => $this->option('force'),
        ]))->run();
        $this->info('Done for generating blog structure!');
    }
}