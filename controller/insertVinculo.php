<?php
include_once '../model/conexao.php';

if(isset($_POST['confirmar_vinculo'])) {


    $id_usuario = filter_input(INPUT_POST, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
    $id_anuncio = filter_input(INPUT_POST, 'id_anuncio', FILTER_SANITIZE_NUMBER_INT);
    
    $id_aluno =filter_input(INPUT_POST, 'id_aluno', FILTER_SANITIZE_NUMBER_INT); 
    $nome_professor = filter_input(INPUT_POST, 'nome_professor', FILTER_SANITIZE_STRING);
    $nome_responsavel =filter_input(INPUT_POST, 'nome_responsavel', FILTER_SANITIZE_STRING); 
    $nome_aluno =filter_input(INPUT_POST, 'nome_aluno', FILTER_SANITIZE_STRING); 
    $serie_ano =filter_input(INPUT_POST, 'serie_ano', FILTER_SANITIZE_STRING);
    $turno = filter_input(INPUT_POST, 'turno', FILTER_SANITIZE_STRING);
    $custo_aula =filter_input(INPUT_POST, 'custo_aula', FILTER_SANITIZE_NUMBER_FLOAT); 
    $disciplina = filter_input(INPUT_POST, 'disciplina', FILTER_SANITIZE_STRING); 

 
   

    $sql = "INSERT INTO tb_contratos (id_anuncio , id_usuario, id_aluno , nome_professor, nome_responsavel, turno, nome_aluno, disciplina,  custo_aula, serie_ano ) values 
    ('$id_anuncio', '$id_usuario',  '$id_aluno',  '$nome_professor','$nome_responsavel',   '$turno' ,'$nome_aluno','$disciplina',  '$custo_aula' ,  '$serie_ano' )";
   
    mysqli_query($connect, $sql);

    echo $sql;
    header('Location: ../views/gerenciarResponsavel.php');
   

}



?>