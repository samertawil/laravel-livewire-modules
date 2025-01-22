
## About  library

laravel-livewire/uc-modules library base on PHP Laravel framework, contains primary modules presets (status, users control, abilities and roles, website setting )to make building the website or application easier
development by "samer tawil"  eng.samertawil@gmail.com 


## Installation
You can install the package via composer:
<pre><span>composer require laravel-livewire/uc-modules</span></pre>

 
Register package by add provider services in bootstrap folder 
<pre><span> uc\modules\UcModulesServiceProvider::class, </span></pre>

publish :
<pre><span>php artisan vendor:publish --provider="uc\modules\UcModulesServiceProvider" </span></pre>

<h5 style="color:red !important;">Attention, overwrite User model if you not customize it  </h5>
<pre><span>php artisan vendor:publish --provider="uc\modules\UcModulesServiceProvider" --tag="userModel" --force</span></pre>

<pre><span>php artisan livewire:publish --config</span></pre>

<pre><span>php artisan flasher:install</span></pre>

<pre><span>php artisan migrate;</span></pre>

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
	 
	 include __DIR__ . '/citzenServices.php';

    });</span></pre>
	
    

Helper function publish : edit composer.json autoload section and add 
<pre><span> ,
        "files": [
            "app/helper/uploads.php",
            "app/helper/generalfunctions.php"
        ]</span></pre>
		
<pre><span> composer dump-autoload;</span></pre>

Add constant value for attributesConst.php
	 
