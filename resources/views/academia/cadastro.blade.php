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
    <link rel="stylesheet" href="/css/pages/academia/cadastro.css">

</head>

<body>
    <div class="logo-fit-planner">
        <img src="/images/icons/logo.png" alt="FitPlanner">
        <h1>Fit<span>Planner</span></h1>
    </div>
    <!-- Cadastro da Academia -->
    <form method="POST">
        @csrf
        <h1>Cadastro de Academia</h1>
        <span>Preencha os dados institucionais da sua academia</span>
        <div class="input-box">
            <label for="email">Email <span>*</span></label>
            <i class="fa-solid fa-envelope"></i>
            <input id="email" name="email" type="text" placeholder="contato@academia.com">
        </div>
        <div class="input-box width50">
            <label for="senha">Senha <span>*</span></label>
            <i class="fa-solid fa-key"></i>
            <input id="senha" name="password" type="password" placeholder="Mínimo 8 caracteres">
        </div>
        <div class="input-box width50">
            <label for="confirm-senha">Confirmar Senha <span>*</span></label>
            <i class="fa-solid fa-key"></i>
            <input id="confirm-senha" name="password_confirmation" type="password" placeholder="Confirmar Senha">
        </div>
        <!-- Contato - Endereço -->
        <div class="input-box">
            <label for="nome">Nome da Academia <span>*</span></label>
            <i class="fa-solid fa-building"></i>
            <input id="nome" name="nome" type="text" placeholder="Academia Fitness Pro">
        </div>
        <div class="input-box width50">
            <label for="cnpj">CNPJ <span>*</span></label>
            <i class="fa-solid fa-hashtag"></i>
            <input id="cnpj" name="cnpj" type="number" placeholder="00.000.000/0000-00">
        </div>
        <div class="input-box width50">
            <label for="telefone">Telefone <span>*</span></label>
            <i class="fa-solid fa-phone"></i>
            <input id="telefone" name="telefone" type="number" placeholder="(00) 00000-0000">
        </div>
        <div class="input-box">
            <label for="endereco">Endereço <span>*</span></label>
            <i class="fa-solid fa-road"></i>
            <input id="endereco" name="endereco" type="text" placeholder="Rua, número">
        </div>
        <div class="input-box width50">
            <label for="cidade">Cidade <span>*</span></label>
            <i class="fa-solid fa-city"></i>
            <input id="cidade" name="cidade" type="text" placeholder="Campo Grande">
        </div>
        <div class="input-box width50">
            <label for="estado">Estado <span>*</span></label>
            <i class="fa-solid fa-city"></i>
            <input id="estado" name="estado" type="text" placeholder="MS">
        </div>
        <div class="input-box width50">
            <label for="cep">CEP <span>*</span></label>
            <i class="fa-solid fa-hashtag"></i>
            <input id="cep" name="cep" type="text" placeholder="00000-000">
        </div>
        <div class="input-box">
            <label for="descricao">Descrição <span>*</span></label>
            <i class="fa-solid fa-comment"></i>
            <textarea name="descricao" id="descricao"></textarea>
        </div>
        <button class="btn btn-primary">Criar Conta</button>
    </form>
    <script src="/js/login.js"></script>
</body>

</html>