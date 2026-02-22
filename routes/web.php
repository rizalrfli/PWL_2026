<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class)->only([ 
'index', 'show' 
]); 
Route::resource('photos', PhotoController::class)->except([ 
'create', 'store', 'update', 'destroy' 
]);
Route::resource('photos', PhotoController::class); 
Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);
Route::get('/greeting', function () { 
    return view('blog.hello', ['name' => 'Afrizal']); 
});
Route::get('/greeting', [WelcomeController::class, 
'greeting']);      