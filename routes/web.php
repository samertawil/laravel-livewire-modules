<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout',function() {
    return 'code is here';
})->name('logout');

Route::group( [ 'prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] ], function(){

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

    
    // Route::get('test',Test::class);
    
      include __DIR__.'/user.php';

      include __DIR__.'/setting.php';
	 
	  include __DIR__.'/status.php';
	   
	  include __DIR__ . '/citzenServices.php';

    });


 