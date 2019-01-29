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


Route::get('/', 'TodoController@index');
Route::get('/tasks/{todoId}',   'TaskController@index');
Route::post('/tasks',           'TaskController@store');
Route::put('/tasks',            'TaskController@update');
Route::get('/home',             'HomeController@index')->name('home');

//Route::get('/home', function () {
//    $visits = Redis::incr('visits');
//    return view('welcome')->with('visits', $visits);
//});

/*Route::get('/', function () {
    return view('welcome');
});*/

//Auth::routes();

//Route::get('/', 'Auth\LoginController@showLoginForm')->name('home');


