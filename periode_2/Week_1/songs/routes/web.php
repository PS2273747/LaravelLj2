<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Bandcontroller;
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



// route::get('/song/{id}', [SongController::class, 'show']);
// route::get('/songCreate', [SongController::class, 'create']);
// route::post('/song', [SongController::class, 'store']);

// route::get('/songEdit/{id}', [SongController::class, 'edit']);
// route::put('/song/{id}', [SongController::class, 'update']);

// route:: delete('/song/{id}', [SongController::class, 'destroy']);
route::get('/home', [SongController::class, 'index']);
Route::resource('songs', SongController::class);


// route::get('/albumlist', [AlbumController::class, 'index']);
// route::get('/album/{id}', [AlbumController::class, 'show']);
// route::get('/albumCreate', [AlbumController::class, 'create']);
// route::post('/album', [AlbumController::class, 'store']);

// route::get('/albumEdit/{id}', [AlbumController::class, 'edit']);
// route::put('/album/{id}', [AlbumController::class, 'update']);

// route:: delete('/album/{id}', [AlbumController::class, 'destroy']);
Route::resource('albums', AlbumController::class);


// route::get('/bandlist', [Bandcontroller::class, 'index']);
// route::get('/band/{id}', [Bandcontroller::class, 'show']);
// route::get('/bandCreate', [Bandcontroller::class, 'create']);
// route::post('/band', [Bandcontroller::class, 'store']);

// route::get('/bandEdit/{id}', [Bandcontroller::class, 'edit']);
// route::put('/band/{id}', [Bandcontroller::class, 'update']);

// route:: delete('/band/{id}', [Bandcontroller::class, 'destroy']);
Route::resource('bands', BandController::class);