<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
});

Route::get('/user/profile', function () { 
// 
})->name('profile'); 
Route::get( 
    '/user/profile', 
    [UserProfileController::class, 'show'] 
)->name('profile'); 
// Generating URLs... 
$url = route('profile'); 
// Generating Redirects... 
return redirect()->route('profile');
