<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('layouts.about');
});

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/posts', \App\Http\Controllers\Main\PostController::class);
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function (){
    Route::group(['namespace'=>'Main'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Main\PostController::class);
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Category\PostController::class);
        Route::get('/create', \App\Http\Controllers\Admin\Category\CreateController::class);
    });
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
