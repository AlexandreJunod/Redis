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

use Illuminate\Support\Facades\Redis;

Route::get('/home', function () {
    $visits = Redis::incr('visits');
    return view('welcome')->with('visits', $visits);
});

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/todolist', 'todolistController@index');
Route::get('/todoitem', 'todoitemController@index');

