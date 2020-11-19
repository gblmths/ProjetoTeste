<?php 

require '../model/conexao.php';
require '../controller/insertVinculo.php';



session_start();

if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;  

$id = $_SESSION['id_usuario'];


$idanuncio = filter_input(INPUT_GET, 'id_anuncio', FILTER_SANITIZE_NUMBER_INT);


$mod = "SELECT * FROM tb_announcements WHERE id_anuncio = '$idanuncio'";
$resultmodal = mysqli_query($connect, $mod);
$modal = mysqli_fetch_assoc($resultmodal);

$idanun = $modal['id_anuncio'];

$sql = "SELECT * FROM prt_usuario WHERE  id_usuario = '$id'";

$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

$sq = "SELECT * FROM prt_aluno WHERE  id_usuario = '$id'";

$result = mysqli_query($connect, $sq);
$aluno = mysqli_fetch_array($result);

$name_aluno = mysqli_query($connect, $sq);
$nome_aluno = mysqli_fetch_array($name_aluno);

$serieano = mysqli_query($connect, $sq);
$serie_ano = mysqli_fetch_array($serieano);


$coment = "SELECT * FROM tb_comentario WHERE id_anuncio = '$idanuncio'";

$comentar = mysqli_query($connect, $coment);
$comen = mysqli_fetch_array($comentar);

?>



<!doctype html>
<html>

<head>
    <title>Vincular Contrato</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="../css/pre_vinculo.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../images/iconsw/icon-32x32.png" sizes="32x32" type="image/png">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>

<body class="">
    <header>
        <nav class="navbar navbar-expand-md ">
            <a class="a1 nav navbar-nav navbar-brand "><img class="logo" src="../images/LogoTip.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
                <span style="background-color:white" class="icon-bar" style="font-size: 5px;"></span>
                <span style="background-color:white" class="icon-bar"></span>
        </button>
        <div class="container col-lg">
        <div class="navbar-nav col-lg-1 ml-auto">
                
                
         
            </div>
                <!-- Navbar-->
                <ul class="navbar-nav col-lg-11 ">
                
                    <li class="nav-item dropdown ml-auto">
                    
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-user fa-w-14 fa-fw text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg> <?php echo $dados['nome'];?> </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="../Other/alterarReponsavel.html">Alterar Cadastro</a>
                            <a class="dropdown-item" href="../Other/alterarFilho.html">Alterar Cadastro do Filho</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../controller/logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

   
    <div class="container-fluid ng-scope" ng-controller="homeController" ng-init="">
    <div class="row col-md-12">
        <div class="col-md-6 col-md-offset-3">
        
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vinculo:</h3>
                    </div>
                    
                    <div class="panel-body">
                    <form method="POST" action="../controller/insertVinculo.php">
                        <div class="form-group row invisible ">
                        
                            <label class="col-md-3 col-form-label ">id_anuncio:</label>
                                <div class="col-md-4 ">
                                    <select class="form-control form-control-md" id="id_anuncio" name="id_anuncio" >
                                        <option value="<?php echo $modal['id_anuncio']; ?>"><?php echo $modal['id_anuncio']; ?></option>
                                    </select>
                                </div>
                        </div>
                    
                        <div class="form-group row">
                           <label class="col-md-3 col-form-label ">Nome do Professor:</label>
                                <div class="col-md-9 ">
                                    <select class="form-control form-control-md "  id="nome_professor " name="nome_professor" >
                                        <option value="<?php echo $modal['nome']; ?>"><?php echo $modal['nome']; ?></option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-3 col-form-label ">Nome do Responsável:</label>
                                <div class="col-md-9 ">
                                    <select class="form-control form-control-md "  id="nome_responsavel" name="nome_responsavel" >
                                        <option value="<?php echo $dados['nome']; ?>"><?php echo $dados['nome']; ?></option>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row">
                           <label class="col-md-3 col-form-label ">Valor Aula:</label>
                                <div class="col-md-9 ">
                                    <select class="form-control form-control-md "  id="custo_aula" name="custo_aula" >
                                        <option value="<?php echo $modal['custo_aula']; ?>"><?php echo $modal['custo_aula']; ?></option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-3 col-form-label ">Disciplina:</label>
                                <div class="col-md-9 ">
                                    <select class="form-control form-control-md "  id="disciplina" name="disciplina" >
                                        <option value="<?php echo $modal['disciplina']; ?>"><?php echo $modal['disciplina']; ?></option>
                                    </select>
                                </div>
                        </div>
                       <div class="form-group row ">
                            <label class="col-md-3 col-form-label ">Turno:</label>
                                <div class="col-md-4 ">
                                    <select class="form-control form-control-md "  id="turno" name="turno">
                                        
                                            <option value="Manhã">Manhã</option>
                                            <option value="Tarde">Tarde</option>
                                            <option value="Noite">Noite</option>
                                     </select>
                                </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-md-3 col-form-label ">Filho:</label>
                                <div class="col-md-4 ">
                                    <select class="form-control form-control-md "  id="id_aluno" name="id_aluno" >
                                        <?php while($aluno = $result->fetch_array()) { ?>
                                            <option value="<?php echo $aluno['id_aluno'];?>"><?php echo $aluno['nome'];?></option>
                                        <?php } ?> 
                                
                                     </select>
                                </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-md-3 col-form-label ">Confirmar Filho:</label>
                                <div class="col-md-4 ">
                                    <select class="form-control form-control-md "  id="nome_aluno" name="nome_aluno">
                                            <?php while($nome_aluno = $name_aluno->fetch_array()) { ?>
                                                <option value="<?php echo $nome_aluno['nome'];?>"><?php echo $nome_aluno['nome'];?></option>
                                             <?php } ?> 
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-md-3 col-form-label ">série do Filho:</label>
                                <div class="col-md-4 ">
                                    <select class="form-control form-control-md "  id="serie_ano" name="serie_ano">
                                            <?php while($serie_ano = $serieano->fetch_array()) { ?>
                                                <option value="<?php echo $serie_ano['serie_ano'];?>"><?php echo $serie_ano['serie_ano'];?></option>
                                             <?php } ?> 
                                    </select>
                                </div>
                        </div>
    
                        <div class="form-group row invisible">
                           <label class="col-md-3 col-form-label ">id_usuario:</label>
                                <div class="col-md-4 ">
                                    <select class="form-control form-control-md "  id="id_usuario" name="id_usuario" >
                                        <option value="<?php echo $_SESSION['id_usuario']; ?>"><?php echo $_SESSION['id_usuario']; ?></option>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">               
                        <button type="submit" class="btn btn-primary btn-lg mb-3" name="confirmar_vinculo"  style="max-width: 190px">Confirmar</button>
                        <a href="anuncio.php"><button type="button" class="mt-2 btn btn-outline-secondary btn-lg mb-3">Voltar</button></a>
                                            </div>
                    </form>
                            

                </div>
                 
    
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Comentarios: </h3>
                </div>
                <div class="panel-body">
                           
                <div class="col-lg-12 mt-3">

                <?php if($comen > 0 ){
                    
                    
                    do {

                        ?>
                        <div class="col-lg-12 mt-3">
                     
                        <p style="color: black;"><?php echo $comen['nome_usuario'].' :';?></p>
                        <?php echo $comen['comentario'];?>
                                                        
                        </div>
                      
                    <?php } while($comen = $comentar->fetch_array()); ?>
             
                <?php } ?>     
                                        <br>
                                        <form method="POST" action="../controller/insertComentario.php">
                                        <div class="form-group row invisible">
                           <label class="col-md-3 col-form-label ">id_usuario:</label>
                                <div class="col-md-4 ">
                                    <select class="form-control form-control-md "  id="id_usuario" name="id_usuario" >
                                        <option value="<?php echo $_SESSION['id_usuario']; ?>"><?php echo $_SESSION['id_usuario']; ?></option>
                                    </select>
                                </div>
                        </div>               
                        <div class="form-group row invisible ">
                        
                        <label class="col-md-3 col-form-label ">id_anuncio:</label>
                            <div class="col-md-4 ">
                                <select class="form-control form-control-md" id="id_anuncio" name="id_anuncio" >
                                    <option value="<?php echo $modal['id_anuncio']; ?>"><?php echo $modal['id_anuncio']; ?></option>
                                </select>
                            </div>
                    </div>        
                    <div class="form-group row invisible ">
                        
                        <label class="col-md-3 col-form-label ">nome_usuario:</label>
                            <div class="col-md-4 ">
                                <select class="form-control form-control-md" id="nome_usuario" name="nome_usuario" >
                                    <option value="<?php echo $dados['nome']; ?>"><?php echo $dados['nome']; ?></option>
                                </select>
                            </div>
                    </div>                          
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Publicar Comentario:</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario" id="comentario"></textarea>
                                                
                                            </div>
                     
                                            <button type="submit" name ="cadastrar_comentario"  class="mt-2 btn btn-outline-primary">Comentar</button>           
                                        </form>
                                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>




     <!-- Popper.JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.min.js "></script>
    <script src="../js/popper.min.js "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js " crossorigin="anonymous "></script>
</body>

</html>