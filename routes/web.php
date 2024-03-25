<?php

use Illuminate\Support\Facades\Auth;
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


Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
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
//        Route::resources(['tags'=> 'PostController']);

        Route::get('/', 'PostController')->name('admin.tag.index');
        Route::get('/create', 'PostController@create')->name('admin.tag.create');
        Route::post('/', 'PostController@store')->name('admin.tag.store');
        Route::get('/{tag}', 'PostController@show')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'PostController@edit')->name('admin.tag.edit');
        Route::patch('/{tag}', 'PostController@update')->name('admin.tag.update');
        Route::delete('/{tag}', 'PostController@destroy')->name('admin.tag.destroy');

    });

    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {

        Route::get('/', 'PostController')->name('admin.post.index');
        Route::get('/create', 'PostController@create')->name('admin.post.create');
        Route::post('/', 'PostController@store')->name('admin.post.store');
        Route::get('/{post}', 'PostController@show')->name('admin.post.show');
        Route::get('/{post}/edit', 'PostController@edit')->name('admin.post.edit');
        Route::patch('/{post}', 'PostController@update')->name('admin.post.update');
        Route::delete('/{post}', 'PostController@destroy')->name('admin.post.destroy');

    });

    Route::group(['namespace' => 'Image', 'prefix' => 'images'], function () {

        Route::get('/', 'PostController')->name('admin.image.index');
        Route::get('/create', 'PostController@create')->name('admin.image.create');
        Route::post('/', 'PostController@store')->name('admin.image.store');
        Route::get('/{image}', 'PostController@show')->name('admin.image.show');
        Route::get('/{image}/edit', 'PostController@edit')->name('admin.image.edit');
        Route::patch('/{image}', 'PostController@update')->name('admin.image.update');
        Route::delete('/{image}', 'PostController@destroy')->name('admin.image.destroy');

    });
    Route::group(['namespace' => 'Award', 'prefix' => 'awards'], function () {

        Route::get('/', 'PostController')->name('admin.award.index');
        Route::get('/create', 'PostController@create')->name('admin.award.create');
        Route::post('/', 'PostController@store')->name('admin.award.store');
        Route::get('/{award}', 'PostController@show')->name('admin.award.show');
        Route::get('/{award}/edit', 'PostController@edit')->name('admin.award.edit');
        Route::patch('/{award}', 'PostController@update')->name('admin.award.update');
        Route::delete('/{award}', 'PostController@destroy')->name('admin.award.destroy');

    });

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {

        Route::get('/', 'PostController')->name('admin.user.index');
        Route::get('/create', 'PostController@create')->name('admin.user.create');
        Route::post('/', 'PostController@store')->name('admin.user.store');
        Route::get('/{user}', 'PostController@show')->name('admin.user.show');
        Route::get('/{user}/edit', 'PostController@edit')->name('admin.user.edit');
        Route::patch('/{user}', 'PostController@update')->name('admin.user.update');
        Route::delete('/{user}', 'PostController@destroy')->name('admin.user.destroy');

    });
});
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('layouts.about');
});
Route::get('/video', function () {
    return view('image.show');
});

Route::get('/contacts', '\App\Http\Controllers\FeedbackController@index')->name('contacts.index');
Route::post('/contacts', '\App\Http\Controllers\FeedbackController@send')->name('contacts.send');

Route::get('/image', \App\Http\Controllers\Main\ImageController::class);
Route::get('/award', \App\Http\Controllers\Main\AwardController::class);


Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/posts', \App\Http\Controllers\Main\PostController::class);
    Route::get('/{post}', 'PostController@single')->name('post.single');
});

