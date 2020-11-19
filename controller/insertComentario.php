<?php 

include_once '../model/conexao.php';

if(isset($_POST['cadastrar_comentario'])) {
    $id_usuario = $_POST['id_usuario'];
    $id_anuncio = $_POST['id_anuncio'];
    $comentario = $_POST['comentario'];
    $nome_usuario = $_POST['nome_usuario'];
 

    $sql = "INSERT INTO tb_comentario (id_usuario, id_anuncio, comentario, nome_usuario) values ('$id_usuario', '$id_anuncio',  '$comentario' , '$nome_usuario')";
   
    mysqli_query($connect, $sql);
    

    echo $sql;
    header('Location: ../views/anuncio.php');
}


?>