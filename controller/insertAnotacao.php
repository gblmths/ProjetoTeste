<?php
include_once '../model/conexao.php';

$idaluno = filter_input(INPUT_GET, 'id_aluno', FILTER_SANITIZE_NUMBER_INT);

if(isset($_POST['cadastro_anotacao'])) {
    $id_contrato = $_POST['id_contrato'];
    $id_aluno = $_POST['id_aluno'];
    $anotacao = $_POST['anotacao'];
 

    $sql = "INSERT INTO tb_anotacao (id_contrato, id_aluno, anotacao) values ('$id_contrato', '$id_aluno', '$anotacao')";
   
    mysqli_query($connect, $sql);
    

    echo $sql;
    header('Location: ../views/gerenciar.php');
}

?>