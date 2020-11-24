<?php


require '../model/conexao.php';



session_start();

if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;  

$id = $_SESSION['id_usuario'];

$idaluno = filter_input(INPUT_GET, 'id_aluno', FILTER_SANITIZE_NUMBER_INT);

$alu = "SELECT * FROM prt_aluno WHERE  id_aluno = '$idaluno'";

$al = mysqli_query($connect, $alu);
$alunos = mysqli_fetch_array($al);

$sql = "SELECT * FROM prt_usuario WHERE  id_usuario = '$id'";

$resultado = mysqli_query($connect, $sql);

$dados = mysqli_fetch_array($resultado);

$sq = "SELECT * FROM tb_announcements WHERE id_usuario = '$id'";

$result =  mysqli_query($connect, $sq);
$anun = mysqli_fetch_array($result);


$vin = $anun['id_anuncio'];

$cont = "SELECT * FROM tb_contratos WHERE id_anuncio = '$vin'";

$resul =  mysqli_query($connect, $cont);
$vinculo = mysqli_fetch_array($resul);
 
$con = "SELECT * FROM tb_contratos WHERE id_anuncio = '$vin'";

$re =  mysqli_query($connect, $con);
$v = mysqli_fetch_array($re);

$desem = "SELECT * FROM tb_contratos WHERE id_aluno = '$idaluno' and id_anuncio = '$vin'";

$dese = mysqli_query($connect, $desem);
$desempenho = mysqli_fetch_array($dese);

$an = $v['id_contrato'];

$anot = "SELECT * FROM tb_anotacao WHERE id_aluno = '$idaluno' and id_contrato = '$an'";

$anota = mysqli_query($connect, $anot);
$anotacao = mysqli_fetch_array($anota);

?>
<!doctype html>
<html>

<head>
    <title>Alunos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/iconsw/icon-32x32.png" sizes="32x32" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>

<body>

<header>
        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a class="a2" href="gerenciar.html" style="text-decoration:none;">
                        <h3>Portal do Aluno:  </h3>
                    </a>
                </div>

                <ul class="list-unstyled components ">
                    <p>Buscar </p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Alunos</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                        <?php if($v > 0 ){
                    
                    
                    do {

                        ?>
                            <li>
                            <?php  echo "<a type='submit' href='../pages/alunos.php?id_aluno=". $v['id_aluno']. "'>".$v['nome_aluno']."  </a>" ?>
                            </li>
                            <?php } while($v = $re->fetch_array()); ?>
             
                <?php } ?>     
                 
                        </ul>
                    </li>
                    <li>
                        <a class="text-light" href="cadastroAnuncio.php">Cadastrar Marketing</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-light">Responsavel</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="./pages/responsavel.html">Responsavel 1</a>
                            </li>
                            <li>
                                <a href="./pages/responsavel.html">Responsavel 2</a>
                            </li>
                            <li>
                                <a href="./pages/responsavel.html">Responsavel 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="text-light" href="./pages/vinculoProfessor.html">Vinculos</a>
                    </li>
                    <li>
                        <a class="text-light" href="#">Voltar ao inicio</a>
                    </li>

                </ul>

            </nav>

        </div>


    </header>


    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">


            <div class="container row col-lg">
                <div class="navbar-nav col-lg-3">
                    <button type="button" id="sidebarCollapse" class="btn btn-info ml-auto">
                        <i class="fas fa-indent text-white" ></i>
                    <span></span>
                </button>
                </div>

                <!-- Navbar-->
                <ul class="navbar-nav col-lg-9 ml-md-6">
                    <li class="nav-item dropdown ml-auto">
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-user fa-w-14 fa-fw text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>  <?php echo $dados['nome'];?>  <!-- <i class="fas fa-user fa-fw"></i> --></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="alterar.html">Alterar Cadastro</a>
                            <a class="dropdown-item" href="alterarAnuncio.html">Alterar Anuncio</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../index.html">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>
        <div class="row mt-5">

            <div class="row col-lg-3">

            </div>


            <div class="col-lg-9 mt-5">
                <div class="d-flex align-items-center p-3 my-3 text-primary-50 bg-purple rounded box-shadow">
                    <div class="lh-100 col-lg-8">

                        <h2 class="text-dark">Aluno</h2>

                    </div>
                </div>
            </div>
            <div class="row col-lg-3">

            </div>

            <div class="col-lg-9 mt-5">
                <div class="card mb-3">
                    <div class="card-header"><?php echo $alunos['nome']; ?></div>
                    <div class="card-body">
                        <h3 class="card-title">Informe o Desempenho do seu aluno:</h3>
                        <div class="col-lg-12 mt-5">
                            <form method= "POST" action="../controller/insertDesempenho.php">
                            <div class="col-lg-12 invisible">
                                <input type="input" name="id_contrato" id= "id_contrato" value="<?php echo $desempenho['id_contrato']; ?>" >
                            </div>    
                            <div class="col-lg-12 invisible"> 
                                <input type="input" name="id_aluno" id= "id_aluno" value="<?php echo $desempenho['id_aluno']; ?>" >
                            </div>  
                            <div class="col-lg-3">
                                <button type="submit" class="btn btn-danger" value="Baixo" id="desempenho_baixo" name="desempenho_baixo" style="width: 150px; height: 90px;">
                                <i class="far fa-grin-beam-sweat text-dark" style="width: 30px; height: 50px;"></i>
                                <p class="text-white">Baixo</p>
                            </button>
                            </div>
                            <div class="col-lg-3">
                                <button type="submit" class="btn btn-warning" value="Medio" id="desempenho_medio"  name="desempenho_medio"style="width: 150px; height: 90px;">
                                <i class="far fa-grimace text-dark" style="width: 30px; height: 50px;"></i>
                                <p class="text-white">Medio</p>
                                </button>
                            </div>
                            <div class="col-lg-3">
                                <button type="submit" class="btn btn-primary" value="Alto" id="desempenho_alto"  name="desempenho_alto" style="width: 150px; height: 90px;">
                                <i class="far fa-grin-beam text-dark" style="width: 30px; height: 50px;"></i>
                                <p class="text-white" >Alto</p>
                            </button>
                            </div>
                            <div class="col-lg-3">
                                <button type="submit" class="btn btn-success" value="Otimo" id="desempenho_otimo"  name="desempenho_otimo" style="width: 150px; height: 90px;">
                                <i class="far fa-grin-hearts text-dark" style="width: 30px; height: 50px;"></i>
                                <p class="text-white">Otimo</p>
                                </button>
                            </div>
                        </div>
                        </form>
                        <div class="col-lg-12 mt-5">
                            <h4 class="mt-5">Publicação:</h4>

                        <form method="POST" action="../controller/insertPublicacao.php" enctype="multipart/form-data">
                        <div class="col-lg-12 invisible">
                                <input type="input" name="id_contrato" id= "id_contrato" value="<?php echo $desempenho['id_contrato']; ?>" >
                            </div>
                            <div class="col-lg-12 ">
                            <div class="form-group row">
                                    <label class="col-md-12 col-form-label row">Titulo:</label>
                                    <div class="col-md-3 row">
                                        <input type="text " class="form-control " id="titulo" name="titulo" placeholder="Titulo do Arquivo">
                                    </div>
                                </div>
                                
                            </div>        
                           
                            <div class="form-group row mt-5">
                                <label className="btn btn-dark btn-lg" class="row col-lg-3 mt-5">
                                    <i class="fas fa-file-medical" style="width: 150px; height: 90px;"></i>
                                    <input type="file" required name="arquivo_publicacao" style="display: none"/>
                                    <strong style="margin-left: 15px;">Adicionar Arquivo</strong>
                                    
                                </label>
                                
                            </div>
                            <div class="col-lg-12 invisible"> 
                                <input type="input" name="id_aluno" id= "id_aluno" value="<?php echo $desempenho['id_aluno']; ?>" >
                            </div> 
                            <button type="submit" class="btn btn-primary" name="inserir_publicacao">Inserir Arquivo</button>  

                            </form>
                        </div>


                        <div class="col-lg-12 mt-3">
                             <h4 class="mt-5">Anotações:</h4>
                             <?php if($anotacao > 0 ){
                    
                    
                    do {
                        ?>
                      
                        <div class="car">
                            <br>
                                <p class="mt-5"> <?php  echo $anotacao['anotacao']; ?></p>
                             <br>   
                            </div>
                            <br>
                        
                            <?php }  while($anotacao = $anota->fetch_array()); ?>
                    <?php } ?>
                           <form method="POST" action="../controller/insertAnotacao.php">
                           <div class="col-lg-12 invisible">
                                <input type="input" name="id_contrato" id= "id_contrato" value="<?php echo $desempenho['id_contrato']; ?>" >
                            </div>    
                            <div class="col-lg-12 invisible"> 
                                <input type="input" name="id_aluno" id= "id_aluno" value="<?php echo $desempenho['id_aluno']; ?>" >
                            </div> 
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Inserir anotações:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="anotacao" id="anotacao" rows="3"></textarea>
                                <button type="submit" class="btn btn-primary mt-2" name="cadastro_anotacao">Inserir</button>
                            </div>

                            </form>
                        </div>
                        <div class="col-lg-12">
                            <div id="calendar">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js "></script>
    <script src="js/popper.min.js "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js " crossorigin="anonymous "></script>
    <script type="text/javascript">
    </script>
</body>

</html>