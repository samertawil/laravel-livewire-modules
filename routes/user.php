<?php

 

use Illuminate\Support\Facades\Route; 
use uc\modules\Http\Livewire\UserModule\UserIndex;
use uc\modules\Http\Livewire\UserModule\UserCreate;
 


Route::get('/users/index', UserIndex::class)->name('user.index');
Route::get('/users/create', UserCreate::class)->name('user.create');
 


