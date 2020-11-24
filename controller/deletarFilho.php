<?php 

include_once '../model/conexao.php';

if(isset($_POST['deletar_filho'])) {
    $idaluno = $_POST['id_aluno'];

    $delaluno = "DELETE FROM prt_aluno WHERE id_aluno = '$idaluno'";

    if (mysqli_query($connect, $delaluno)) {
        echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . mysqli_error($connect);
    }

 

    echo $delaluno;


}


?>
