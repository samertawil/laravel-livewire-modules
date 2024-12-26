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
        // Blade::anonymousComponentPath(base_path('package\modules\resources\views\components'));  
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        // $this->loadMigrationsFrom(__DIR__ . '/../migrations');
        // $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'modules');
        // $this->mergeConfigFrom(__DIR__.'/../config/myConstants.php','modules');

        
        $this->publishes(
            [__DIR__ . '/../resources/views' => resource_path('views'),],
            'views'
        );

        $this->publishes( [__DIR__ . '/../lang' => lang_path(),],
           
        'lang'
    );

        $this->publishes(
            [__DIR__ . '/../config/myConstants.php' => config_path('myConstants.php'),],
            'config'
        );

        $this->publishes([__DIR__.'/../routes/user.php'=>base_path('routes/user.php'),
        ],'routes');

	
        $this->publishes(
            [__DIR__ . '/../database/' => database_path(''),],
            'database'
        );

        $this->publishes([
            __DIR__.'/Http/Livewire' => app_path('Livewire'),
        ]);

        $this->publishes([
            __DIR__.'/Http/Middleware' => app_path('/Http/Middleware'),
        ]);

        $this->publishes([
            __DIR__.'/Models' => app_path('Models'),
        ],'models);
    

        $this->publishes([  __DIR__.'/Models/User.php' => app_path('Models/User.php'),],
        'userModel'
      );


    $this->publishes([
        __DIR__.'/helper' => app_path('helper'),
    ],'helper');

    $this->publishes([
        __DIR__.'/Traits' => app_path('Traits'),
    ],'Traits');



    }
}
