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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/html-css-project', function () {
    return view('html-css-project');
});

Route::get('/sass-project', function () {
    return view('sass-project');
});

Route::get('/javascript-project', function () {
    return view('javascript-project');
});

Route::get('/php-mysql-project', function () {
    return view('php-mysql-project');
});

Route::get('/wordpress-project', function () {
    return view('wordpress-project');
});

Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin');
