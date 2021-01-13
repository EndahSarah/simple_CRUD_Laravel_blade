<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SiswaController;

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
// route jalur tembak
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa', [SiswaController::class, 'store']);
Route::delete('/{siswa}', [SiswaController::class, 'destroy']);
Route::get('/{siswa}/edit', [SiswaController::class, 'edit']);
Route::patch('/siswa/{siswa}', [SiswaController::class, 'update']);
