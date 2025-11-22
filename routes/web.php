<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/cadastrar', [AuthController::class, 'cadastrar']);

Route::get('/academia/cadastro', function () {
    return view('academia.cadastro');
});

Route::middleware('auth')->group(function () {
    Route::get('/aluno/dashboard', function () {
        return view('aluno.dashboard');
    });

    Route::get('/aluno/perfil', [AlunoController::class, 'perfil'])->name('aluno.perfil');
    Route::put('/aluno/update', [AlunoController::class, 'update'])->name('aluno.update');
    Route::delete('/aluno/delete', [AlunoController::class, 'destroy'])->name('aluno.destroy');
});
