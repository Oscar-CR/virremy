<?php

use App\Http\Controllers\FormularioController;
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


Route::get('/', [FormularioController::class, 'index'])->name('index');


Route::post('/formulario', [FormularioController::class, 'formulario'])->name('formulario');

Route::post('/cotizacion', [FormularioController::class, 'cotizacion'])->name('cotizacion');
Route::get('/privacidad', [FormularioController::class, 'privacidad'])->name('privacidad');

