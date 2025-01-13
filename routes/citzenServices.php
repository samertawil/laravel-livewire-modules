<?php

use App\Livewire\CitzenServices\ServicesIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\CitzenServices\ServicesResoucre;

 

Route::get('citzen-services-resouces',ServicesResoucre::class)->name('citzen.services.resouces');
Route::get('citzen-services-index',ServicesIndex::class)->name('citzen.services.index');