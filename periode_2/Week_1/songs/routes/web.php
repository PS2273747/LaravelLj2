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




route::get('/home', [SongController::class, 'index']);
Route::resource('songs', SongController::class);
Route::post('songs/{song}/albums/{album}/attach', [SongController::class, 'attach'])->name('songs.attach');
Route::post('songs/{song}/albums/{album}/detach', [SongController::class, 'detach'])->name('songs.detach');



Route::post('albums/{album}/songs/{song}/attach', [AlbumController::class, 'attach'])->name('albums.attach');
Route::post('albums/{album}/songs/{song}/detach', [AlbumController::class, 'detach'])->name('albums.detach');
Route::resource('albums', AlbumController::class);



Route::resource('bands', BandController::class);