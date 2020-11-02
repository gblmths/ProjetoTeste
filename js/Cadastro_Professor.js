function validaForm(cadastroProfessor) {
    var email = cadastroProfessor.email.value;
    var nome = cadastroProfessor.nome.value;
    var senha = cadastroProfessor.senha.value;
    var cpf = cadastroProfessor.cpf.value;
    var estado = cadastroProfessor.estado.value;
    var cidade = cadastroProfessor.cidade.value;

    if (nome == "" || nome.length < 3) {
        alert('Por favor, indique seu nome!');
        cadastroProfessor.nome.focus();
        return false;

    } else if (cpf == "" || cpf.length < 11) {
        alert("Por favor digite seu CPF completo.");
        cadastroProfessor.CPF.focus();
        return false;

    } else if (estado == "") {
        alert("Por favor diga seu estado.");
        cadastroProfessor.estado.focus();
        return false;

    } else if (cidade == "") {
        alert("Por favor diga sua Cidade.");
        cadastroProfessor.cidade.focus();
        return false

    } else if (email.indexOf('@') == -1 || email.indexOf(".") == -1) {
        alert("Por favor,Indique um e-mail valido.");
        cadastroProfessor.email.focus();
        return false;

    } else if (email == "") {
        alert("Por favor,Indique um e-mail.");
        cadastroProfessor.email.focus();
        return false;

    } else if (senha == "" || senha.length < 6) {
        alert("Por favor digitar uma senha de 6 ou mais digitos.");
        cadastroProfessor.Password.focus();
        return false;



    } else if (nome != "" || cpf != "" || cidade != "" || senha != "" || email != "" || estado != "") {
        alert('Deseja realmente cadastrar?');

    }



}