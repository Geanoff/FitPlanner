<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/aluno/dashboard');
        }

        // Login falhou
        return back()->withErrors([
            'email' => 'E-mail ou senha inválidos.',
        ]);
    }

    public function cadastrar(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // return response()->json(['message' => 'Cadastro realizado com sucesso!']);
        return redirect('/login')->with('success', 'Cadastro realizado com sucesso! Faça login.');
    }
}
