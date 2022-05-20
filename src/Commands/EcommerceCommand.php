<?php

namespace Nhiha60591\LaravelBase\Commands;

use Illuminate\Console\Command;

class EcommerceCommand extends Command
{
    protected $signature = 'lr-base:e-commerce';

    protected $description = 'Generate ecommerce structure';

    public function handle()
    {
        $this->info('Start generate ecommerce structure');

        $this->info('Done for generating ecommerce structure!');
    }
}