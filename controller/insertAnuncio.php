<?php
include_once '../model/conexao.php';

//$data = $_POST;


//if(isset($data) && !empty($data)) {
    
  //  $msg = false;

    
  //  if(isset($_FILES['prof_img'])){

       // $extensao = strtolower(substr($_FILES['prof_img']['name'], -4)); //pega a extensao do arquivo
       // $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
       // $diretorio = "uploads/"; //define o diretorio para onde enviaremos o arquivo
    
      //  move_uploaded_file($_FILES['prof_img']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
    
      //  $sql = "INSERT INTO tb_announcements (formacao, prof_img, disciplina, turno, email, custo_aula, estado, cidade, endereco, nome) VALUES ('".$_POST["formacao"]."', '$novo_nome', '".$_POST["disciplina"]."','".$_POST["turno"]."','".$_POST["email"]."', '".$_POST["custo_aula"]."', '".$_POST["estado"]."', '".$_POST["cidade"]."', '".$_POST["endereco"]."', '".$_POST["nome"]."')";
    
        //if($mysqli->query($sql))
         // $msg = "Arquivo enviado com sucesso!";
       /// else
         /// $msg = "Falha ao enviar arquivo.";

        // header("Location:  ../gerenciar.php");

      
//}


if(isset($_POST['confirmar_cadastro'])) {
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


$imagem = ($_FILES['prof_img']['name']); 
//$imagem_tmp = $_FILES['prof_img']['tmp_name']; 
$tamanho = $_FILES['prof_img']['size']; 
//$tipo = $_FILES['image']['type']; 
//$nomeImagem = $_FILES['image']['name'];
//$imagem_new_name = uniqid(true).$imagem;
$tamanho_permitido = 2048000; //2MB
$pasta = '../uploads/images';

  if (!empty($imagem)){
   $file = getimagesize($_FILES['prof_img'] ['tmp_name']);

    //TESTA O TAMANHO DO ARQUIVO
    if($_FILES['prof_img']['size'] > $tamanho_permitido){
      echo "erro - arquivo muito grande";
       exit();
   }
    $allowed = array('gif', 'png', 'jpg', 'jpeg');
    $ext = pathinfo($imagem = strtolower($imagem), PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
      echo 'erro - extensão não permitida';
        exit();
    }

    //TESTA A EXTENSÃO DO ARQUIVO
    // if(!preg_match('/^image\/(?:gif|jpg|jpeg|png)$/i', $file['mime'])){
    //  echo "erro - extensão não permitida";
    // exit();
    //}

    //CAPTURA A EXTENSÃO DO ARQUIVO
    //$ext = str_ireplace("/", "", strchr($file['mime'], "/"));
    
    //MONTA O CAMINHO DO NOVO DESTINO
  
    $fileInfo = pathinfo($_FILES["prof_img"]["name"]);
    $novoDestino = "{$pasta}/prof_img".uniqid('', true) . '.' . $fileInfo['extension'];
    //$pasta = "../images/uploads/" . uniqid("") . '.' . ;
    move_uploaded_file($_FILES["prof_img"]["tmp_name"], $novoDestino);
    //move_uploaded_file ( $_FILES['prof_img'] ['tmp_name'], "$pasta/$imagem_new_name");
  }

  $sql = "INSERT INTO tb_announcements (nome, formacao, prof_img, disciplina, turno, email, estado, cidade, endereco, custo_aula, id_usuario ) values ('$nome', '$formacao', '$novoDestino','$disciplina', '$turno' ,'$email' , '$estado', '$cidade', '$endereco', '$custo_aula' , '$id_usuario' )";
   
  mysqli_query($connect, $sql);
    

  echo $sql;

  header('Location: ../views/gerenciar.php');
}

?>