<?php

include_once '../model/conexaophp.php';

  $msg = false;

  if(isset($_FILES['prof_img'])){

    $extensao = strtolower(substr($_FILES['prof_img']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "uploads/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['prof_img']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

    $sql = "INSERT INTO tb_announcements (codigo, prof_img, data) VALUES(null, '$novo_nome', NOW())";

    if($mysqli->query($sql))
      $msg = "Arquivo enviado com sucesso!";
    else
      $msg = "Falha ao enviar arquivo.";
}

?>