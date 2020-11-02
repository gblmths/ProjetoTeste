<?php
include_once '../model/conexaophp.php';
include_once '../model/manage.php';

$manager = new Manager();

$data = $_POST;


if(isset($data) && !empty($data)) {
    $manager->insertAluno("prt_aluno",$data);
    header("Location:  ../gerenciar.php");
}


?>