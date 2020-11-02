$(document).ready(function() {

    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
    });

});

function validaLogin() {
    var login = loginform.username.value;
    var senha = loginform.password.value;


    if (login == "") {
        alert("Por favor,Indique o seu E-mail!");
        cadastroProfessor.login.focus();
        return false;

    } else if (login.indexOf('@') == -1 || login.indexOf(".") == -1) {
        alert("Por favor,Indique seu e-mail valido.");
        cadastroProfessor.username.focus();
        return false;

    } else if (senha == "" || senha.length < 6) {
        alert("Por favor, digitar sua senha correta.");
        cadastroProfessor.password.focus();
        return false;

    } else if (login != "" || senha != "") {
        alert('Você será redirecinado agora!');
        window.location.href = "./Gerenciar.html";
    }

}