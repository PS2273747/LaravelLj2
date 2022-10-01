<!-- 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ -->


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', [SongController::class, 'index']);



Route::get('/index/{id}',[SongController::class, 'show']);


Route::get('/create', function () {
    return view('create');
});

 Route::post('/song',[SongController::class, 'create']);

 Route::get('/edit', [SongController::class, 'edit']);
 Route::post('/store',[SongController::class, 'store']);