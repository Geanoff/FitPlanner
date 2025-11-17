<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/academia/cadastro', function () {
    return view('academia.cadastro');
});

Route::post('/cadastrar', [AuthController::class, 'cadastrar']);