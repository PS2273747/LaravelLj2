<?php

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

Route::get('/', function () {
    return view('welcome');
});

// gets Index page and sends array as parameter to nav function on the Index Page
Route::get('/old', function () {
    $nav = ["index", "partijen","stemwijzer", "themas"];
    return view('old/Index', ['nav_from_web_php' => $nav]);
});

Route::get('/partijen', function () {
    return view('old/Partijen');
});

Route::get('/stemwijzer', function () {
    return view('old/stemwijzer');
});

Route::get('/themas', function () {
    return view('old/themas');
});

Route::get('partijen/deep', function () {
    return view('old/deep');
});