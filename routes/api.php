<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('usuario')->group(function() {
    Route::post('registrar-se', [UsuarioController::class, 'registrar']);
    Route::post('login', [UsuarioController::class, 'login']);
});

Route::middleware('auth:sanctum')->prefix('usuario')->group(function() {
    Route::post('logout', [UsuarioController::class, 'logout']);
    Route::post('perfil', [UsuarioController::class, 'perfil']);
    Route::post('editar', [UsuarioController::class, 'editar']);
    Route::post('foto-upload', [UsuarioController::class, 'fotoUpload']);
    Route::post('desativar-conta', [UsuarioController::class, 'desativar']);
});

Route::middleware('auth:sanctum')->prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index']);       // Listar todos os posts
    Route::post('criar', [PostController::class, 'store']);  // Criar novo post
});
