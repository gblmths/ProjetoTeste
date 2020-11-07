<?php
include_once '../model/conexao.php';

if(isset($_POST['confirmar_vinculo'])) {
    $id_usuario = $_POST['id_usuario'];
    $id_perfil = $_POST['id_perfil'];
    $nome = $_POST['nome'];
    $serie_ano = $_POST['serie_ano'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
   

    $sql = "INSERT INTO prt_aluno (id_usuario, id_perfil, nome, serie_ano, estado, cidade, endereco,  email, senha ) values ('$id_usuario', '$id_perfil', '$nome', '$serie_ano', '$estado', '$cidade', '$endereco',  '$email', '$senha' )";
   
    mysqli_query($connect, $sql);
    

    echo $sql;
    header('Location: ../gerenciarResponsavel.php');
}




?>