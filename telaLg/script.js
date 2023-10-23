document.addEventListener('DOMContentLoaded', function() {
    var usernameField = document.getElementById('username');
    var passwordField = document.getElementById('password');
    var usernameIcon = document.querySelector('.fa-user');
    var passwordIcon = document.querySelector('.fa-lock');
    var showPasswordToggle = document.getElementById('showPasswordToggle');
    var loginButton = document.getElementById('loginButton');

    usernameField.addEventListener('focus', function() {
        usernameIcon.parentElement.classList.add('active');
    });

    usernameField.addEventListener('blur', function() {
        if (usernameField.value === '') {
            usernameIcon.parentElement.classList.remove('active');
        }
    });

    passwordField.addEventListener('focus', function() {
        passwordIcon.parentElement.classList.add('active');
    });

    passwordField.addEventListener('blur', function() {
        if (passwordField.value === '') {
            passwordIcon.parentElement.classList.remove('active');
        }
    });

    showPasswordToggle.addEventListener('click', function() {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            showPasswordToggle.classList.remove('fa-eye');
            showPasswordToggle.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            showPasswordToggle.classList.remove('fa-eye-slash');
            showPasswordToggle.classList.add('fa-eye');
        }
    });

    loginButton.addEventListener('click', function() {
        var usernameValue = usernameField.value;
        var passwordValue = passwordField.value;

        // Verificar se os campos estão corretos
        if (usernameValue === 'usuario' && passwordValue === 'senha') {
            // Redirecionar para a página "index.html"
            window.location.href = 'index.html';
        } else {
            // Campos incorretos, exibir mensagem de erro ou realizar outras ações
            alert('Usuário ou senha incorretos. Por favor, tente novamente.');
        }
    });
});