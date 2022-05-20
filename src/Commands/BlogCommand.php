<?php

namespace Nhiha60591\LaravelBase\Commands;

use Illuminate\Console\Command;

class BlogCommand extends Command
{
    protected $signature = 'lr-base:blog';

    protected $description = 'Generate blog structure';

    public function handle()
    {
        $this->info('Start generate blog structure');

        $this->info('Done for generating blog structure!');
    }
}