<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'login']);
Route::post('/cadastrar', [AuthController::class, 'cadastrar']);

Route::get('/academia/cadastro', function () {
    return view('academia.cadastro');
});

Route::get('/aluno/dashboard', function () {
    return view('aluno.dashboard');
});