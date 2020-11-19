<?php
include_once '../model/conexao.php';

if(isset($_POST['alterar_Filho'])) {
    $id_aluno = $_POST['id_aluno'];
    $nome = $_POST['nome'];
    $serie_ano = $_POST['serie_ano'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
   

    $sql = "UPDATE prt_aluno SET nome ='$nome',senha ='$senha',estado ='$estado',cidade ='$cidade',serie_ano='$serie_ano', email='$email' WHERE id_aluno='$id_aluno'";
   
    mysqli_query($connect, $sql);
    

    echo $sql;
    header('Location: ../gerenciarResponsavel.php');
}

?>