<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AuthController;

require __DIR__.'/home.php';

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

Route::redirect('/', '/login');

Route::view('/login', "auth.login")->name('login');
Route::post('/inicia-sesion', [AuthController::class, 'login'])->name('inicia-sesion'); 
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('guest')->group(function () {
    Route::view('/login', "auth.login")->name('login');
    Route::post('/inicia-sesion', [AuthController::class, 'login'])->name('inicia-sesion');
});


Route::middleware(['auth'])->group(function () {
    Route::view('/home', 'pages.home')->name('home');
    Route::view('/historia-clinica', 'pages.historia_clinica')->name('historia_clinica');
    Route::view('/configuracion', 'pages.configuracion')->name('configuracion');
    Route::view('/ayuda', 'pages.ayuda')->name('ayuda');
});