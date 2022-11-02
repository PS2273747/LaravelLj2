<?php
use App\Http\Controllers\BookController;
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


route::get('/home', [BookController::class, 'index']);
route::get('/book/{id}', [BookController::class, 'show']);
route::get('/bookCreate', [BookController::class, 'create']);
route::post('/book', [BookController::class, 'store']);

route::get('/bookEdit/{id}', [BookController::class, 'edit']);
route::put('/book/{id}', [BookController::class, 'update']);



route:: delete('/book/{id}', [BookController::class, 'destroy']);

