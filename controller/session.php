<?php


    include_once '../model/conexao.php';
    session_start();

    if(!isset($_SESSION['logado'])):
        header('Location: index.php');
    endif;  
    
    
    $id = $_SESSION['id_usuario'];
    
    
    
    $sql = "SELECT * FROM prt_usuario WHERE  id_usuario = '$id'";
    
    $resultado = mysqli_query($connect, $sql);
    
    $dados = mysqli_fetch_array($resultado);
    

    $sq = "SELECT * FROM tb_contratos WHERE id_usuario = '$id'";

    $result =  mysqli_query($connect, $sq);
    $cont = mysqli_fetch_array($result);


    $s = "SELECT * FROM prt_aluno WHERE id_usuario = '$id'";

    $resul =  mysqli_query($connect, $s);
    $conaluno = mysqli_fetch_array($resul);

    $ab = "SELECT * FROM tb_contratos WHERE id_usuario = '$id'";  

    $resu = mysqli_query($connect, $ab);
    $conalunos = mysqli_fetch_array($resu);


?>