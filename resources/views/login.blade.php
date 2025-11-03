<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitPlanner</title>

    <!-- Link de Ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link de Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Link de CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div class="logo-fit-planner">
        <img src="/images/icons/temaki--gym.png" alt="FitPlanner">
        <h1>Fit<span>Planner</span></h1>
    </div>
    <div class="escolha">
        <button class="active">Login</button>
        <button>Cadastro</button>
    </div>
    <!-- Login -->
    <form id="form-login" method="POST">
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
        <button class="btn-primary">Entrar</button>
    </form>
    <!-- Cadastro -->
    <form id="form-cadastro" method="POST">
        @csrf
        <h1>Criar conta</h1>
        <span>Comece sua jornada fitness hoje</span>
        <div class="input-box">
            <label for="c-nome">Nome completo</label>
            <i class="fa-solid fa-user"></i>
            <input id="c-nome" name="nome" type="text" placeholder="Seu nome">
        </div>
        <div class="input-box">
            <label for="c-email">Email</label>
            <i class="fa-solid fa-envelope"></i>
            <input id="c-email" name="email" type="text" placeholder="seu@email.com">
        </div>
        <div class="input-box">
            <label for="c-senha">Senha</label>
            <i class="fa-solid fa-key"></i>
            <input id="c-senha" name="password" type="password" placeholder="Mínimo 8 caracteres">
        </div>
        <div class="input-box">
            <label for="c-confirm-senha">Confirmar Senha</label>
            <i class="fa-solid fa-key"></i>
            <input id="c-confirm-senha" name="password_confirmation" type="password" placeholder="Confirmar Senha">
        </div>
        <button class="btn-primary">Criar Conta</button>
    </form>
    <script src="/js/login.js"></script>
</body>

</html>