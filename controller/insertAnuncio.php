<?php
include_once '../model/conexao.php';

$data = $_POST;


if(isset($data) && !empty($data)) {
    
    $msg = false;

    
    if(isset($_FILES['prof_img'])){

        $extensao = strtolower(substr($_FILES['prof_img']['name'], -4)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "uploads/"; //define o diretorio para onde enviaremos o arquivo
    
        move_uploaded_file($_FILES['prof_img']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
    
        $sql = "INSERT INTO tb_announcements (formacao, prof_img, disciplina, turno, email, custo_aula, estado, cidade, endereco, nome) VALUES ('".$_POST["formacao"]."', '$novo_nome', '".$_POST["disciplina"]."','".$_POST["turno"]."','".$_POST["email"]."', '".$_POST["custo_aula"]."', '".$_POST["estado"]."', '".$_POST["cidade"]."', '".$_POST["endereco"]."', '".$_POST["nome"]."')";
    
        if($mysqli->query($sql))
          $msg = "Arquivo enviado com sucesso!";
        else
          $msg = "Falha ao enviar arquivo.";

      
}

header("Location:  ../gerenciar.php");

}


?>