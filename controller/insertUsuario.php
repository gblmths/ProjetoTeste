<?php
include_once '../model/conexao.php';

if(isset($_POST['cadastrar_usuario'])) {
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $id_perfil = $_POST ['id_perfil'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
   

    $sql = "INSERT INTO prt_usuario (id_usuario, id_perfil, nome, estado, cidade,  email, senha, cpf ) values ('$id_usuario', '$id_perfil', '$nome',  '$estado', '$cidade',  '$email', '$senha', '$cpf' )";
   
    mysqli_query($connect, $sql);
    

    echo $sql;
    header('Location: ../index.php');
}
?>