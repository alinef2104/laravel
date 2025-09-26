<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsuarioController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Usuário - rotas públicas
Route::prefix('usuario')->group(function() {
    Route::post('registrar', [UsuarioController::class, 'registrar']);
    Route::post('login', [UsuarioController::class, 'login']);
});

// Usuário
Route::middleware('auth:sanctum')->prefix('usuario')->group(function() {
    Route::post('logout', [UsuarioController::class, 'logout']);
    Route::get('perfil', [UsuarioController::class, 'perfil']); 
    Route::post('editar', [UsuarioController::class, 'editar']);
    Route::post('foto-upload', [UsuarioController::class, 'fotoUpload']);
    Route::post('desativar-conta', [UsuarioController::class, 'desativar']);
});

// Posts 
Route::middleware('auth:sanctum')->prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index']);      
    Route::post('criar', [PostController::class, 'store']);
});
