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
    <link rel="stylesheet" href="/css/pages/aluno/perfil.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo-fit-planner">
                <img src="/images/icons/logo.png" alt="FitPlanner">
                <h1>Fit<span>Planner</span></h1>
            </div>
            <a href="{{ route('aluno.perfil') }}" class="btn btn-primary">Meu Perfil</a>
            <a href="/" class="btn btn-secondary">Sair <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </header>
    <main>
        <div class="container">
            <a href="/aluno/dashboard" class="btn">Voltar</a>
            <div>
                <h1>Meu perfil</h1>
                <span>Gerencie suas informações pessoais</span>
            </div>
            @if(session('success'))
            <div class="msg sucess">
                <p>{{ session('success') }}</p>
            </div>
            @endif
            <div class="perfil">
                <div class="foto">
                    <img src="/images/pages/user-placeholder.jpg">
                    <p>{{ $usuario->name }}</p>
                    <span>{{ $usuario->email }}</span>
                </div>
                <form action="{{ route('aluno.update') }}" method="POST" class="info">
                    @csrf
                    @method('PUT')

                    <h3>Informações Pessoais</h3>
                    <div class="input-box">
                        <label for="name">Nome Completo</label>
                        <i class="fa-solid fa-user"></i>
                        <input id="name" name="name" type="text" value="{{ $usuario->name }}">
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <i class="fa-solid fa-envelope"></i>
                        <input id="email" name="email" type="email" value="{{ $usuario->email }}">
                    </div>
                    <button class="btn btn-primary">Salvar Alterações</button>
                </form>
            </div>
            <form action="{{ route('aluno.destroy') }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir sua conta?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Excluir Conta</button>
            </form>

        </div>
    </main>
</body>

</html>