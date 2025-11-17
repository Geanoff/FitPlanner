<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function perfil()
    {
        $usuario = Auth::user();

        return view('aluno.perfil', compact('usuario'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
        ]);

        User::where('id', Auth::id())->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('aluno.perfil')->with('success', 'Perfil atualizado com sucesso!');
    }

    public function destroy()
    {
        $usuario = Auth::user();

        if ($usuario) {
            User::destroy($usuario->id);
            Auth::logout();
        }

        return redirect('/login')->with('success', 'Conta excluída com sucesso!');
    }
}
