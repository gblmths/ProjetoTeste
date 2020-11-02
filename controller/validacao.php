<?php
 session_start();

    if(isset($_POST['email']) && empty($_POST['email']) == false){
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));



        $sdn = "mysql:dbname=projetoteste_bd;host=localhost";
        $dbuser = "root";
        $dbpass = "";
        
    
    
        try {
            $db = new PDO($sdn, $dbuser, $dbpass);
            $sql = $db->query("SELECT * FROM prt_usuario WHERE email = '$email' AND senha = '$senha'") ;
            $sq = $db->query("SELECT * FROM prt_usuario WHERE id_perfil = '1'");
            $s = $db->query("SELECT * FROM prt_usuario WHERE id_perfil = '2'");

            if($sql->rowCount() > 0 ) {
                $dado = $sql->fetch();
                $_SESSION['logado'];
                $_SESSION['id_usuario'] = $dado['id_usuario'];
                if($sq == 1){
                    header("Location: ../gerenciar.php");
                }

                if($s == 2) {
                    header("Location: ../gerenciarResponsavel.html");
                }
                exit;
            } else {
                header("Location: ../index.php");
            }
        
            
        } catch(PDOException $e) {
            echo "Falhou: ", $e ->getMessage();
        }    
   
    }

?>
