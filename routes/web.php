<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/search', [PersonController::class, 'search'])->name('search');
Route::get('/similator', [PersonController::class, 'similation'])->name('similator');
Route::post('/calcutate', [PersonController::class, 'calculate'])->name('calculate');
Route::get('/calcutate', [PersonController::class, 'similation']);

Route::resource('room', RoomController::class);
Route::resource('person', PersonController::class);
