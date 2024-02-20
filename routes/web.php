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

        Route::get('/', 'PostController')->name('admin.category.index');
        Route::get('/create', 'PostController@create')->name('admin.category.create');
        Route::post('/', 'PostController@store')->name('admin.category.store');
        Route::get('/{category}', 'PostController@show')->name('admin.category.show');
        Route::get('/{category}/edit', 'PostController@edit')->name('admin.category.edit');
        Route::patch('/{category}', 'PostController@update')->name('admin.category.update');
        Route::delete('/{category}', 'PostController@destroy')->name('admin.category.destroy');

    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {

        Route::get('/', 'PostController')->name('admin.tag.index');
        Route::get('/create', 'PostController@create')->name('admin.tag.create');
        Route::post('/', 'PostController@store')->name('admin.tag.store');
        Route::get('/{tag}', 'PostController@show')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'PostController@edit')->name('admin.tag.edit');
        Route::patch('/{tag}', 'PostController@update')->name('admin.tag.update');
        Route::delete('/{tag}', 'PostController@destroy')->name('admin.tag.destroy');

    });
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
