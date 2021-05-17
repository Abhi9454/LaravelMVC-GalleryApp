<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/', [AuthController::class, 'index'])->name('HOME');
Route::post('/', [AuthController::class, 'login'])->name('LOGIN');
Route::get('/logout', [AuthController::class, 'logout'])->name('LOGOUT');


Route::resource('folders', 'App\Http\Controllers\FolderController')->middleware('auth');
Route::resource('images', 'App\Http\Controllers\ImageController')->middleware('auth');

