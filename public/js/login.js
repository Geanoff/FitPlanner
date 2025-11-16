const buttons = document.querySelectorAll('.escolha button');
const formLogin = document.getElementById('form-login');
const formCadastro = document.getElementById('form-cadastro');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove .active de todos os botões
        buttons.forEach(btn => btn.classList.remove('active'));
        // Adiciona .active ao botão clicado
        button.classList.add('active');

        // Alterna os formulários com base no texto do botão
        if (button.textContent === 'Login') {
            formLogin.style.display = 'block';
            formCadastro.style.display = 'none';
        } else {
            formLogin.style.display = 'none';
            formCadastro.style.display = 'block';
        }
    });
});
