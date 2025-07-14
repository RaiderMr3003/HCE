<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;

Route::get('/pacientes/buscar', [HomeController::class, 'buscarPaciente'])->name('buscarPaciente');
