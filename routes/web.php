<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
});
