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

//Rotas de Veículos

Route::get('/veiculo/formulario', [App\Http\Controllers\VeiculoController::class, 'formulario'])->name('veiculo-formulario');

Route::post('/veiculo/store', [App\Http\Controllers\VeiculoController::class, 'store'])->name('veiculo-store');

Route::get('/veiculo/listar', [App\Http\Controllers\VeiculoController::class, 'listar'])->name('veiculo-listar');

Route::get('/veiculo/remover', [App\Http\Controllers\VeiculoController::class, 'remover'])->name('veiculo-remover');

Route::get('/veiculo/editar', [App\Http\Controllers\VeiculoController::class, 'editar'])->name('veiculo-editar');

//Rotas de Proprietario

Route::get('/proprietario/formulario', [App\Http\Controllers\VeiculoController::class, 'formulario'])->name('veiculo-formulario');

Route::post('/proprietario/store', [App\Http\Controllers\VeiculoController::class, 'store'])->name('veiculo-store');

Route::get('/proprietario/listar', [App\Http\Controllers\VeiculoController::class, 'listar'])->name('veiculo-listar');

Route::get('/proprietario/remover', [App\Http\Controllers\VeiculoController::class, 'remover'])->name('veiculo-remover');

Route::get('/proprietario/editar', [App\Http\Controllers\VeiculoController::class, 'editar'])->name('veiculo-editar');

//Rotas de Anuncio

Route::get('/anuncio/formulario', [App\Http\Controllers\VeiculoController::class, 'formulario'])->name('veiculo-formulario');

Route::post('/anuncio/store', [App\Http\Controllers\VeiculoController::class, 'store'])->name('veiculo-store');

Route::get('/anuncio/listar', [App\Http\Controllers\VeiculoController::class, 'listar'])->name('veiculo-listar');

Route::get('/anuncio/remover', [App\Http\Controllers\VeiculoController::class, 'remover'])->name('veiculo-remover');

Route::get('/anuncio/editar', [App\Http\Controllers\VeiculoController::class, 'editar'])->name('veiculo-editar');




