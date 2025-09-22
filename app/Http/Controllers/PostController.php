<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Listar todos os posts
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return response()->json($posts);
    }

    // Criar novo post
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'picture' => 'nullable|string|max:255'
        ]);

        $post = Post::create([
            'description' => $request->description,
            'picture' => $request->picture ?? null,
            'data' => now() // Mantendo o campo data da sua tabela
        ]);

        return response()->json([
            'message' => 'Post criado com sucesso',
            'post' => $post
        ]);
    }
}
