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
    <link rel="stylesheet" href="/css/dashboard.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo-fit-planner">
                <img src="/images/icons/temaki--gym.png" alt="FitPlanner">
                <h1>Fit<span>Planner</span></h1>
            </div>
            <a href="/index" class="btn btn-secondary">Sair <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </header>
    <main>
        <div class="container">
            <div>
                <h1>Bem-vindo, Gean!</h1>
                <span>Sua jornada fitness começa aqui</span>
            </div>
            <div class="grid">
                <div class="card">
                    <div class="icon"><img src="/images/icons/lucide--search.png"></div>
                    <h3>Buscar Academias</h3>
                    <small>Encontre a academia perfeita para você</small>
                    <button class="btn btn-outline">Explorar</button>
                </div>
                <div class="card">
                    <div class="icon"><img src="/images/icons/lucide--calendar.png"></div>
                    <h3>Meus Treinos</h3>
                    <small>Acompanhe sua rotina de exercícios</small>
                    <button class="btn btn-outline">Ver Treinos</button>
                </div>
                <div class="card">
                    <div class="icon"><img src="/images/icons/ph--trend-up-bold.png"></div>
                    <h3>Meu Progresso</h3>
                    <small>Veja sua evolução ao longo do tempo</small>
                    <button class="btn btn-outline">Ver Estatísticas</button>
                </div>
            </div>
            <div class="card">
                <h3>Comece sua jornada</h3>
                <small>Você ainda não possui treinos cadastrados</small>
                <div class="procurar">
                    <img src="/images/icons/temaki--gym--gray.png" alt="FitPlanner">
                    <span>Busque uma academia ou aguarde seu professor criar um treino para você</span>
                    <button class="btn btn-primary">Buscar Academias</button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>