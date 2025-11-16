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
    <link rel="stylesheet" href="/css/pages/index.css">

</head>

<body>
    <header>
        <div class="container">
            <div class="logo-fit-planner">
                <img src="/images/icons/logo.png" alt="FitPlanner">
                <h1>Fit<span>Planner</span></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#hero">Início</a></li>
                    <li><a href="#perfis">Para Quem</a></li>
                    <li><a href="#funcionalidades">Funcionalidades</a></li>
                    <li><a href="#footer">Contato</a></li>
                </ul>
            </nav>
            <a href="/login" class="btn btn-primary">Entrar</a>
        </div>
    </header>
    <section id="hero">
        <div class="container">
            <h1>Sua jornada fitness <span>começa aqui</span></h1>
            <p>Conectamos academias, professores e alunos em uma plataforma integrada. Encontre a academia ideal, receba treinos personalizados e alcance seus objetivos.</p>
            <a href="/login" class="btn btn-primary">Começar Agora <i class="fa-solid fa-arrow-right"></i></a>
            <div class="stats">
                <div class="item">
                    <h2>500+</h2>
                    <small>Academias</small>
                </div>
                <div class="item">
                    <h2>2000+</h2>
                    <small>Professores</small>
                </div>
                <div class="item">
                    <h2>50+</h2>
                    <small>Alunos Ativos</small>
                </div>
            </div>
        </div>
    </section>
    <section id="perfis" class="card-sections">
        <div class="container">
            <h1>Para todos os <span>perfis</span></h1>
            <p>Uma plataforma completa que atende academias, professores e alunos com funcionalidades específicas</p>
            <div class="container-cards">
                <div class="card">
                    <img src="/images/icons/academia.png">
                    <p>Academias</p>
                    <span>Divulgue seus planos, vantagens e estrutura. Gerencie professores, aulas e alunos em uma plataforma completa.</span>
                    <ul>
                        <li>Criar perfil institucional</li>
                        <li>Cadastrar professores</li>
                        <li>Gerenciar planos e aulas</li>
                        <li>Acompanhar métricas</li>
                    </ul>
                </div>
                <div class="card">
                    <img src="/images/icons/capelo.png">
                    <p>Professores</p>
                    <span>Vincule-se a academias, crie treinos personalizados e acompanhe a evolução dos seus alunos de forma profissional.</span>
                    <ul>
                        <li>Perfil profissional</li>
                        <li>Treinos personalizados</li>
                        <li>Gestão de alunos</li>
                        <li>Acompanhamento de resultados</li>
                    </ul>
                </div>
                <div class="card">
                    <img src="/images/icons/user.png">
                    <p>Alunos</p>
                    <span>Encontre a academia ideal, receba treinos personalizados e agende aulas. Acompanhe seu progresso e alcance suas metas.</span>
                    <ul>
                        <li>Buscar academias</li>
                        <li>Treinos personalizados</li>
                        <li>Agendar aulas</li>
                        <li>Histórico e evolução</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="funcionalidades" class="card-sections">
        <div class="container">
            <h1>Funcionalidades <span>principais</span></h1>
            <p>Tudo que você precisa para gerenciar e evoluir sua jornada fitness</p>
            <div class="container-cards">
                <div class="card">
                    <img src="/images/icons/database.png">
                    <p>Gestão Completa</p>
                    <span>Gerencie academias, professores, alunos, planos e treinos em um único lugar</span>
                </div>
                <div class="card">
                    <img src="/images/icons/meta.png">
                    <p>Treinos Personalizados</p>
                    <span>Professores criam treinos sob medida com acompanhamento de evolução</span>
                </div>
                <div class="card">
                    <img src="/images/icons/calendario.png">
                    <p>Agendamento Inteligente</p>
                    <span>Sistema de agendamento com calendário interativo e notificações automáticas</span>
                </div>
                <div class="card">
                    <img src="/images/icons/estrela.png">
                    <p>Avaliações</p>
                    <span>Sistema de avaliação para academias e professores com feedback real</span>
                </div>
                <div class="card">
                    <img src="/images/icons/sino.png">
                    <p>Notificações</p>
                    <span>Lembretes de treinos, aulas e vencimento de planos em tempo real</span>
                </div>
                <div class="card">
                    <img src="/images/icons/escudo.png">
                    <p>Segurança</p>
                    <span>Dados protegidos e gerenciamento de acesso por tipo de usuário</span>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="container">
            <div class="item">
                <div class="logo-fit-planner">
                    <img src="/images/icons/logo.png" alt="FitPlanner">
                    <h1>Fit<span>Planner</span></h1>
                </div>
                <small>Conectando academias, professores e alunos para uma jornada fitness de sucesso.</small>
                <div class="social-medias">
                    <a href="https://www.instagram.com/is.gean/" target="_blank"><img src="/images/icons/instagram.png"></a>
                    <a href="https://github.com/Geanoff" target="_blank"><img src="/images/icons/github.png"></a>
                    <a href="#" target="_blank"><img src="/images/icons/linkedin.png"></a>
                </div>
            </div>
            <div class="item">
                <h4>Produto</h4>
                <ul>
                    <li>Funcionalidades</li>
                    <li>Planos</li>
                    <li>Integrações</li>
                    <li>Atualizações</li>
                </ul>
            </div>
            <div class="item">
                <h4>Empresa</h4>
                <ul>
                    <li>Sobre</li>
                    <li>Blog</li>
                    <li>Carreiras</li>
                    <li>Contato</li>
                </ul>
            </div>
            <div class="item">
                <h4>Suporte</h4>
                <ul>
                    <li>Central de Ajuda</li>
                    <li>Documentação</li>
                    <li>Status</li>
                    <li>API</li>
                </ul>
            </div>
        </div>
        <div class="container footer-direitos">
            <span>&copy;2025 FitPlanner. Todos os direitos reservados.</span>
            <div class="termos">
                <span>Privacidade</span>
                <span>Termos</span>
                <span>Cookies</span>
            </div>
        </div>
    </footer>
</body>

</html>