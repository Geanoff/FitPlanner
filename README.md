# FitPlanner

<p align="center">
  <img src="/public/images/icons/logo.png" alt="FitPlanner Logo" width="200">
</p>

O FitPlanner é uma aplicação web desenvolvida para gerenciar e acompanhar sua jornada fitness. Com ele, você pode encontrar academias, gerenciar seus treinos e acompanhar seu progresso de forma simples e intuitiva.

## 🚀 Funcionalidades

- 🔍 **Busca de Academias**: Encontre a academia perfeita para você
- 📅 **Gerenciamento de Treinos**: Acompanhe sua rotina de exercícios
- 📈 **Acompanhamento de Progresso**: Visualize sua evolução ao longo do tempo
- 👤 **Sistema de Usuários**: Login e gerenciamento de perfil

## 🛠️ Tecnologias Utilizadas

- [Laravel](https://laravel.com/) - Framework PHP
- [Blade](https://laravel.com/docs/blade) - Template Engine
- HTML5 & CSS3
- JavaScript
- [Font Awesome](https://fontawesome.com/) - Ícones

## 📋 Pré-requisitos

- PHP >= 8.1
- Composer
- MySQL ou outro banco de dados compatível

## 🔧 Instalação

1. Clone o repositório:
```bash
git clone https://github.com/Geanoff/FitPlanner.git
```

2. Entre no diretório do projeto:
```bash
cd FitPlanner
```

3. Instale as dependências do PHP:
```bash
composer install
```

4. Copie o arquivo de ambiente:
```bash
cp .env.example .env
```

5. Gere a chave da aplicação:
```bash
php artisan key:generate
```

6. Configure o banco de dados no arquivo `.env`

7. Execute as migrations:
```bash
php artisan migrate
```

## 🚀 Executando o projeto

1. Inicie o servidor Laravel:
```bash
php artisan serve
```

A aplicação estará disponível em `http://localhost:8000`

## 📝 Estrutura do Projeto

- `app/` - Contém os controllers, models e providers
- `database/` - Migrations e seeders
- `public/` - Assets públicos (CSS, JS, imagens)
- `resources/` - Views Blade, arquivos CSS e JS
- `routes/` - Definições de rotas

## ✨ Autor

Desenvolvido por Gean Augusto

## 📄 Licença

Projeto acadêmico, uso livre para fins de estudo
