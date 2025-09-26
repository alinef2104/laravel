<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    // Registro de usuário
    public function registrar(Request $request) 
    {
        $dados = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $dados['password'] = bcrypt($dados['password']);

        if (Schema::hasColumn('users', 'picture')) {
            $dados['picture'] = 'https://i.pinimg.com/564x/f3/6b/fa/f36bfa3b60559e7da0014f91250abf66.jpg';
        }

        if (Schema::hasColumn('users', 'status')) {
            $dados['status'] = 'active';
        }

        if (Schema::hasColumn('users', 'enabled')) {
            $dados['enabled'] = true;
        }

        $usuario = User::create($dados);

        $token = $usuario->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Usuário registrado com sucesso.',
            'user' => $usuario,
            'token' => $token
        ], 201);
    }

    // Login
    public function login(Request $request)
    {
        $credenciais = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $usuario = User::where('email', $credenciais['email'])->first();

        if (!$usuario || !Hash::check($credenciais['password'], $usuario->password)) {
            return response()->json(['message' => 'Credenciais inválidas'], 401);
        }

        $token = $usuario->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login realizado com sucesso.',
            'user' => $usuario,
            'token' => $token
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logout realizado com sucesso.']);
    }

    // Upload de foto
    public function fotoUpload(Request $request)
    {
        $request->validate([
            'picture' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);
    
        $user = $request->user();
    
        if (!$user) {
            return response()->json(['error' => 'Usuário não autenticado'], 401);
        }
    
        $path = $request->file('picture')->store('profile_pics', 'public');
    
        $user->picture = $path;
        $user->save();
    
        return response()->json([
            'message' => 'Foto atualizada com sucesso',
            'picture_url' => asset('storage/' . $path)
        ]);
    }
    
    

    // Desativar conta
    public function desativar(Request $request)
    {
        $usuario = $request->user();

        if (Schema::hasColumn('users', 'enabled') && Schema::hasColumn('users', 'status')) {
            $usuario->update(['enabled' => false, 'status' => 'inactive']);
        }

        return response()->json(['message' => 'Conta desativada com sucesso.']);
    }

    // Perfil
    public function perfil(Request $request)
    {
        return response()->json($request->user());
    }

    // Editar usuário
    public function editar(Request $request)
    {
        $usuario = $request->user();

        $dados = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|max:255|unique:users,email,' . $usuario->id,
            'password' => 'nullable|string|min:6|confirmed'
        ]);

        if (!empty($dados['password'])) {
            $dados['password'] = bcrypt($dados['password']);
        } else {
            unset($dados['password']);
        }

        $usuario->update($dados);

        return response()->json([
            'message' => 'Dados atualizados com sucesso.',
            'user' => $usuario
        ]);
    }
}
