<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FitPlanner</title>

    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/pages/login.css">

</head>

<body>
    @if(session('success'))
    <div class="msg sucess">
        <p>{{ session('success') }}</p>
    </div>
    @endif
    @if ($errors->any())
    <div class="msg error">
        <p>Erro, tente novamente!</p>
    </div>
    @endif
    <div class="logo-fit-planner">
        <img src="/images/icons/logo.png" alt="FitPlanner">
        <h1>Fit<span>Planner</span></h1>
    </div>
    <div class="escolha">
        <button class="active">Login</button>
        <button>Cadastro</button>
    </div>
    <!-- Login -->
    <form id="form-login" method="POST" action="/login">
        @csrf
        <h1>Bem-vindo de volta</h1>
        <span>Entre com suas credenciais para continuar</span>
        <div class="input-box">
            <label for="email">Email</label>
            <i class="fa-solid fa-envelope"></i>
            <input id="email" name="email" type="text" placeholder="seu@email.com">
        </div>
        <div class="input-box">
            <label for="senha">Senha</label>
            <i class="fa-solid fa-key"></i>
            <input id="senha" name="password" type="password" placeholder="Senha">
        </div>
        <button class="btn btn-primary">Entrar</button>
    </form>
    <!-- Cadastro -->
    <form id="form-cadastro" method="POST" action="/cadastrar">
        @csrf
        <h1>Criar conta</h1>
        <span>Comece sua jornada fitness hoje</span>
        <div class="input-box">
            <label for="c-nome">Nome completo <span>*</span></label>
            <i class="fa-solid fa-user"></i>
            <input id="c-nome" name="nome" type="text" placeholder="Seu nome">
        </div>
        <div class="input-box">
            <label for="c-email">Email <span>*</span></label>
            <i class="fa-solid fa-envelope"></i>
            <input id="c-email" name="email" type="text" placeholder="seu@email.com">
        </div>
        <div class="input-box">
            <label for="c-senha">Senha <span>*</span></label>
            <i class="fa-solid fa-key"></i>
            <input id="c-senha" name="password" type="password" placeholder="Mínimo 8 caracteres">
        </div>
        <div class="input-box">
            <label for="c-confirm-senha">Confirmar Senha <span>*</span></label>
            <i class="fa-solid fa-key"></i>
            <input id="c-confirm-senha" name="password_confirmation" type="password" placeholder="Confirmar Senha">
        </div>
        <button class="btn btn-primary">Criar Conta</button>
    </form>
    <small class="link-cadastro">É uma academia? <a href="/academia/cadastro">Cadastre sua academia aqui</a></small>
    <script src="/js/login.js"></script>
</body>

</html>