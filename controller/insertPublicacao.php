<?php



include_once '../model/conexao.php';

$idaluno = filter_input(INPUT_GET, 'id_aluno', FILTER_SANITIZE_NUMBER_INT);

if(isset($_POST['inserir_publicacao']))
 {
    $id_contrato = $_POST['id_contrato'];
    $id_aluno = $_POST['id_aluno'];
    $titulo = $_POST['titulo'];
 
    $arquivo = ($_FILES['arquivo_publicacao']['name']); 
    //$imagem_tmp = $_FILES['prof_img']['tmp_name']; 
    $tamanho = $_FILES['arquivo_publicacao']['size']; 
    //$tipo = $_FILES['arquivo_publicacao']['type']; 
    //$nomeImagem = $_FILES['image']['name'];
    //$file_new_name = uniqid(true).$arquivo;
    $tamanho_permitido = 2048000; //2MB
    $pasta = '../uploads/files';
    
    if (!empty($arquivo)){
        //TESTA O TAMANHO DO ARQUIVO
        if($_FILES['arquivo_publicacao']['size'] > $tamanho_permitido)
        {
            echo "erro - arquivo muito grande";
            exit();
        }
        //TESTA A EXTENSÃO DO ARQUIVO
        $allowed = array('pdf', 'doc', 'docx');
        $ext = pathinfo($arquivo = strtolower($arquivo), PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) 
        {
            echo 'erro - extensão não permitida';
            exit();
        }

    
  
    
        //MONTA O CAMINHO DO NOVO DESTINO
  
        $fileInfo = pathinfo($_FILES['arquivo_publicacao']['name']);
        $novoDestino = "{$pasta}/arquivo_publicacao".uniqid('', true) . '.' . $fileInfo['extension'];
        //$pasta = "../images/uploads/" . uniqid("") . '.' . ;
        move_uploaded_file($_FILES['arquivo_publicacao']['tmp_name'], $novoDestino);
        //move_uploaded_file ( $_FILES['prof_img'] ['tmp_name'], "$pasta/$imagem_new_name");
    }




    $sqlbaixo = "INSERT INTO tb_publicacao (id_contrato, id_aluno, arquivo_publicacao,titulo) values ('$id_contrato', '$id_aluno', '$novoDestino', '$titulo')";
   
    mysqli_query($connect, $sqlbaixo);
    

    echo $sqlbaixo;
    header('Location: ../views/gerenciar.php');
}


?>