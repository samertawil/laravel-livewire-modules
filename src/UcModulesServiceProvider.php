<?php

namespace uc\modules;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class UcModulesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    //
       
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::anonymousComponentPath(base_path('package\modules\resources\views\components'));  
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'modules');
        $this->mergeConfigFrom(__DIR__.'/../config/myConstants.php','modules');
    }
}
