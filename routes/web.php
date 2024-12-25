<?php
use Illuminate\Support\Facades\Route;


  include __DIR__ .'/user.php';

route::get('test',function() {
    return 'samer';
});