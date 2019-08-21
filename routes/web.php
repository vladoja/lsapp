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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return '<b>Hello World</b>';
// });

// Pristupujeme k view priamo.
// Nachadza sa v: resources/views/pages/about.blade.php
// Route::get('/about', function () {
//     return view('pages.about');
// });
// Route::get('/about', 'PagesController@about');

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is: ' . $name . ' with an ' . $id;
// });


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
