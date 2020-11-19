<?php
include_once '../model/conexao.php';

if(isset($_POST['alterar_Responsavel'])) {
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $id_perfil = $_POST['id_perfil'];

    $sql = "UPDATE prt_usuario SET nome ='$nome',senha ='$senha',estado ='$estado',cidade ='$cidade', email='$email' WHERE id_usuario='$id_usuario'";
   
    mysqli_query($connect, $sql);
    

    echo $sql;
    if($id_perfil == 1){
        header('Location: ../views/gerenciar.php');
    } else {
        header('Location: ../views/gerenciarResponsavel.php');
    }
}

?>