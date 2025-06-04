<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/veiculo/formulario', [App\Http\Controllers\VeiculoController::class, 'formulario'])->name('veiculo-formulario');

Route::post('/veiculo/store', [App\Http\Controllers\VeiculoController::class, 'store'])->name('veiculo-store');

Route::get('/veiculo/listar', [App\Http\Controllers\VeiculoController::class, 'listar'])->name('veiculo-listar');
