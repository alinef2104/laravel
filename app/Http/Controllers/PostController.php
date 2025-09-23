<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Listar todos os posts de todos os usuários
    public function index(Request $request)
    {
        $posts = Post::with('user') // traz o usuário junto
                     ->orderBy('created_at', 'desc')
                     ->get();

        return response()->json($posts);
    }

    // Criar post (apenas o usuário logado pode criar)
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'picture' => 'nullable|string'
        ]);

        $post = Post::create([
            'user_id' => $request->user()->id,
            'description' => $request->description,
            'picture' => $request->picture ?? null
        ]);

        return response()->json([
            'message' => 'Post criado com sucesso',
            'post' => $post
        ]);
    }
}
