<?php

use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
});

route::get('/index', 'App\Http\Controllers\SongController@index');
route::get('/details/{id}', 'App\Http\Controllers\SongController@show');

Route::get('/create', function () {
    return view('songs_table.create');
});

Route::post('/created', 'App\Http\Controllers\SongController@store');
Route::get('/edit/{id}', 'App\Http\Controllers\SongController@edit');
Route::patch('/edited/{id}', 'App\Http\Controllers\SongController@update');

Route::delete('/details/{id}', 'App\Http\Controllers\SongController@destroy');
