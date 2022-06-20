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

/** 
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('top');
})->name('top');

Route::post('/room', [\App\Http\Controllers\Room\IndexController::class, 'roomExist'])
->name('room');


Route::get('/room-register', [\App\Http\Controllers\Room\RoomRegister::class, 'passwordRegister'])
->name('room-register');

require __DIR__.'/auth.php';
