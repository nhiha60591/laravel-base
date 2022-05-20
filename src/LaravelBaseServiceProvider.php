<?php

namespace Nhiha60591\LaravelBase;

use Illuminate\Support\ServiceProvider;
use Nhiha60591\LaravelBase\Commands\BlogCommand;
use Nhiha60591\LaravelBase\Commands\EcommerceCommand;

class LaravelBaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // TODO
    }

    public function register()
    {
        $this->registerCommands();
    }

    protected function registerCommands(): void
    {
        $this->app->bind('lr-base:blog', BlogCommand::class);
        $this->app->bind('lr-base:e-commerce', EcommerceCommand::class);

        $this->commands([
            'lr-base:blog',
            'lr-base:e-commerce',
        ]);
    }
}