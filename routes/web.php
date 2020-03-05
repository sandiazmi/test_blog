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

Auth::routes();

// Route::group(['middleware' => ['auth', 'CheckRole:admin, author']], function () {
Route::get('/home', 'HomeController@index')->name('home');
// });


// Route::group(['middleware' => ['auth', 'CheckRole:admin']], function () {
Route::resource('/post', 'PostController');
Route::resource('/admin', 'AdminController');
// });
