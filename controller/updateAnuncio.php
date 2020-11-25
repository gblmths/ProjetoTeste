<?php

if(isset($_POST['update_anuncio'])) {
    $idanuncio = $_POST['id_anuncio'];
    $nome = $_POST['nome'];
    $formacao = $_POST['formacao'];
    $disciplina = $_POST['disciplina'];
    $turno = $_POST['turno'];
    $email = $_POST['email'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $custo_aula = $_POST['custo_aula'];
    $id_usuario = $_POST['id_usuario'];
    $bairro = $_POST['bairro'];
    $horario = $_POST['horario'];

    $imagem = ($_FILES['prof_img']['name']); 
    $tamanho = $_FILES['prof_img']['size']; 
    $tamanho_permitido = 2048000; //2MB
    $pasta = '../uploads/images';


    $sql = "UPDATE tb_announcements SET nome ='$nome',prof_img = '$novoDestino',formacao ='$formacao',disciplina = '$disciplina',turno = '$turno',email = '$email',custo_aula = '$custo_aula',horario = '$horario', estado ='$estado',cidade ='$cidade',bairro='$bairro',endereco='$endereco' WHERE id_anuncio='$idanuncio'";
    mysqli_query($connect, $sql);

  if (!empty($imagem)){
   $file = getimagesize($_FILES['prof_img'] ['tmp_name']);

    //TESTA O TAMANHO DO ARQUIVO
    if($_FILES['prof_img']['size'] > $tamanho_permitido){
      echo "erro - arquivo muito grande";
       exit();
   }
    //TESTA A EXTENSÃO DO ARQUIVO
    $allowed = array('gif', 'png', 'jpg', 'jpeg');
    $ext = pathinfo($imagem = strtolower($imagem), PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
      echo 'erro - extensão não permitida';
        exit();
    }

   
   

    //CAPTURA A EXTENSÃO DO ARQUIVO
    
    
    //MONTA O CAMINHO DO NOVO DESTINO
  
    $fileInfo = pathinfo($_FILES["prof_img"]["name"]);
    $novoDestino = "{$pasta}/prof_img".uniqid('', true) . '.' . $fileInfo['extension'];
    move_uploaded_file($_FILES["prof_img"]["tmp_name"], $novoDestino);
  
  }

  
   

    

    echo $sql;
    header('Location: ../views/gerenciar.php');
}




?>