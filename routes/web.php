<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/sb', function () {
    return view('inc.sidebar');
});

Route::get('/posts', 'PostController@index');

Route::get('/comments', function () {
    return view('comments.show');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

