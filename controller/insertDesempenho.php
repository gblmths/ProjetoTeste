<?php 

include_once '../model/conexao.php';

$idaluno = filter_input(INPUT_GET, 'id_aluno', FILTER_SANITIZE_NUMBER_INT);

if(isset($_POST['desempenho_baixo'])) {
    $id_contrato = $_POST['id_contrato'];
    $id_aluno = $_POST['id_aluno'];
    $nome_desempenho = $_POST['desempenho_baixo'];
 

    $sqlbaixo = "INSERT INTO tb_desempenho (id_contrato, id_aluno, nome_desempenho) values ('$id_contrato', '$id_aluno', '$nome_desempenho')";
   
    mysqli_query($connect, $sqlbaixo);
    

    echo $sqlbaixo;
    header('Location: ../views/gerenciar.php');
}

if(isset($_POST['desempenho_medio'])) {
    $id_contrato = $_POST['id_contrato'];
    $id_aluno = $_POST['id_aluno'];
    $nome_desempenho = $_POST['desempenho_medio'];
 

    $sqlmedio = "INSERT INTO tb_desempenho (id_contrato, id_aluno, nome_desempenho) values ('$id_contrato', '$id_aluno', '$nome_desempenho')";
   
    mysqli_query($connect, $sqlmedio);
    

    echo $sqlmedio;
    header('Location: ../views/gerenciar.php');
}

if(isset($_POST['desempenho_alto'])) {
    $id_contrato = $_POST['id_contrato'];
    $id_aluno = $_POST['id_aluno'];
    $nome_desempenho = $_POST['desempenho_alto'];
 

    $sqlalto = "INSERT INTO tb_desempenho (id_contrato, id_aluno, nome_desempenho) values ('$id_contrato', '$id_aluno', '$nome_desempenho')";
   
    mysqli_query($connect, $sqlalto);
    

    echo $sqlalto;
    header('Location: ../views/gerenciar.php');
}


if(isset($_POST['desempenho_otimo'])) {
    $id_contrato = $_POST['id_contrato'];
    $id_aluno = $_POST['id_aluno'];
    $nome_desempenho = $_POST['desempenho_otimo'];
 

    $sqlotimo = "INSERT INTO tb_desempenho (id_contrato, id_aluno, nome_desempenho) values ('$id_contrato', '$id_aluno', '$nome_desempenho')";
   
    mysqli_query($connect, $sqlotimo);
    

    echo $sqlotimo;
    header('Location: ../views/gerenciar.php');
}


?>