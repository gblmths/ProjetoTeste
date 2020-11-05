<?php

function sessao(){
    include_once '../model/conexao.php';
    session_start();

    if(!isset($_SESSION['logado'])):
        header('Location: index.php');
    endif;  
    
    
    $id = $_SESSION['id_usuario'];
    
    
    
    $sql = "SELECT * FROM prt_usuario WHERE  id_usuario = '$id'";
    
    $resultado = mysqli_query($connect, $sql);
    
    $dados = mysqli_fetch_array($resultado);
    

}






?>