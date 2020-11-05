<?php 


$servername = "localhost";
$user = "root";
$pass = "";
$db_name = "projetoteste_bd";



$connect = mysqli_connect($servername, $user, $pass, $db_name);

if(mysqli_connect_error()): 
    echo "Falha na conexão: ".mysqli_connect_error();
endif;

?>