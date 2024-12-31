* composer require laravel-livewire/uc-modules:dev-main

* composer update laravel-livewire/uc-modules

* uc\modules\UcModulesServiceProvider::class,

*  php artisan vendor:publish --provider="uc\modules\UcModulesServiceProvider"


* php artisan migrate;



  *               ,
        "files": [
            "app/helper/uploads.php",
            "app/helper/generalfunctions.php"
        ]
		
* composer dump-autload;

* php artisan vendor:publish --provider="uc\modules\UcModulesServiceProvider" --tag="userModel" --force

* php artisan livewire:publish --config

* php artisan flasher:install

<pre><span>php artisan db:seed StatusSeeder</span></pre>

<pre><span> Route::group( [ 'prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] ], function(){

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

    
     Route::get('test',Test::class);
    
     include __DIR__.'/user.php';

     include __DIR__.'/setting.php';
	 
	 include __DIR__.'/status.php';
       
	 include __DIR__.'/permission.php';

    });</span></pre>
