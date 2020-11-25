<?php
require '../model/conexao.php';
session_start();

if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;  

$id = $_SESSION['id_usuario'];

$idcontrato = filter_input(INPUT_GET, 'id_contrato', FILTER_SANITIZE_NUMBER_INT);


$sql = "SELECT * FROM prt_usuario WHERE  id_usuario = '$id'";

$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

$s = "SELECT * FROM prt_aluno WHERE id_usuario = '$id'";

$resul =  mysqli_query($connect, $s);
$conaluno = mysqli_fetch_array($resul);

$ab = "SELECT * FROM tb_contratos WHERE id_usuario = '$id'";  

$resu = mysqli_query($connect, $ab);
$conalunos = mysqli_fetch_array($resu);


$sq = "SELECT * FROM tb_contratos WHERE  id_contrato = '$idcontrato'";

$result = mysqli_query($connect, $sq);
$contrato = mysqli_fetch_array($result);

$ano = "SELECT * FROM tb_anotacao WHERE  id_contrato = '$idcontrato'";

$anota = mysqli_query($connect, $ano);
$anot = mysqli_fetch_array($anota);

$desem = "SELECT * FROM tb_desempenho WHERE  id_contrato = '$idcontrato'";

$dese = mysqli_query($connect, $desem);
$des = mysqli_fetch_array($dese);

$publi = "SELECT * FROM tb_publicacao WHERE  id_contrato = '$idcontrato'";

$publ = mysqli_query($connect, $publi);
$pub = mysqli_fetch_array($publ);


?>

<!doctype html>
<html>

<head>
    <title>Professor</title>
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
                <a class="a2" href="../views/gerenciarResponsavel.php" style="text-decoration:none;">
                        <h3>Portal do Aluno:</h3>
                    </a>
                </div>

                <ul class="list-unstyled components ">
                    <p>Buscar</p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Acompanhar Filho</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                        <?php if($conalunos > 0 ){
                    
                    
                    do {

                        ?>    
                        <li>
                        <?php  echo "<a type='submit' href='../Other/acompanharFilho.php?id_contrato=". $conalunos['id_contrato']. "'>".$conalunos['nome_aluno']. '-' .$conalunos['disciplina']."  </a>" ?>
                                
                            </li>
                            <?php } while($conalunos = $resu->fetch_array()); ?>
             
             <?php } ?>     
                        </ul>
                    </li>
                    <li>
                        <a class="text-light" href="./anuncio.php">Encontre seu Professor</a>
                    </li>
                    <li class="active">
                        <a href="#homemenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Filho</a>
                        <ul class="collapse list-unstyled" id="homemenu">
                        <?php if($conaluno > 0 ){
                    
                    
                    do {

                        ?>  
                            <li>
                            <?php  echo "<a type='submit' href='../Other/filho.php?id_aluno=". $conaluno['id_aluno']. "'>".$conaluno['nome']."  </a>" ?>
                            </li>
                            <?php } while($conaluno = $resul->fetch_array()); ?>
             
             <?php } ?>     
                        </ul>
                    </li>
                    <li>
                        <a class="text-light" href="../views/cadastrarFilho.php">Cadastrar Filho</a>
                    </li>
                    <li>
                        <a class="text-light" href="../Other/vinculoReponsavel.php">Vinculos</a>
                    </li>
                    <li>
                        <a class="text-light" href="#">Voltar ao inicio da Pagina</a>
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
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-user fa-w-14 fa-fw text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg><!-- <i class="fas fa-user fa-fw"></i> --></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="alterarReponsavel.html">Alterar Cadastro</a>
                            <a class="dropdown-item" href="alterarFilho.html">Alterar Cadastro do Filho</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../index.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>
        <div class="row col-lg-3">

        </div>


        <div class="col-lg-9 mt-5">
            <div class="d-flex align-items-center p-3 my-3 text-primary-50 bg-purple rounded box-shadow">
                <div class="lh-100 col-lg-8">

                    <h2 class="text-dark"><strong class="text-primary">Professor:</strong> <?php echo" ". $contrato['nome_aluno']. " - ".$contrato['disciplina']." "?></h2>

                </div>
            </div>
        </div>
        <div class="row col-lg-3">

        </div>
<!--
        <div class="col-lg-4 portlets mt-5">
             Widget 
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="pull-left">Chat</div>
                    <div class="widget-icons pull-right">
                        <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="panel-body">
                    Widget content 
                    <div class="padd sscroll">

                        <ul class="chats" style="list-style: none; padding-right: 50px;">

                            Chat by us. Use the class "by-me". 
                            <li class="by-me">
                                Use the class "pull-left" in avatar 
                                <div class="avatar pull-left">
                                    <img src="../images/user.jpg" class="mr-2 rounded-circle text-dark" alt="">
                                </div>

                                <div class="chat-content">
                                     In meta area, first include "name" and then "time" 
                                    <div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
                                    Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                                    <div class="clearfix"></div>
                                </div>
                            </li>

                         Chat by other. Use the class "by-other". 
                            <li class="by-other">
                                 Use the class "pull-right" in avatar 
                                <div class="avatar pull-right">
                                    <img src="../images/user22.png" class="mr-2 rounded-circle text-dark" alt="">
                                </div>

                                <div class="chat-content">
                                     In the chat meta, first include "time" then "name" 
                                    <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                                    Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                                    <div class="clearfix"></div>
                                </div>
                            </li>

                            <li class="by-me">
                                <div class="avatar pull-left">
                                    <img src="../images/user.jpg" class="mr-2 rounded-circle text-dark" alt="">
                                </div>

                                <div class="chat-content">
                                    <div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
                                    Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                                    <div class="clearfix"></div>
                                </div>
                            </li>

                            <li class="by-other">
                                 Use the class "pull-right" in avatar 
                                <div class="avatar pull-right">
                                    <img src="../images/user22.png" class="mr-2 rounded-circle text-dark" alt="">
                                </div>

                                <div class="chat-content">
                                     In the chat meta, first include "time" then "name"
                                    <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                                    Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                                    <div class="clearfix"></div>
                                </div>
                            </li>

                        </ul>

                    </div>
                    Widget footer 
                    <div class="widget-foot">

                        <form class="form-inline">
                            <div class="form-group">
                                <input type="text" class="form-control offset-3" placeholder="Type your message here...">
                            </div>
                            <button type="submit" class="btn btn-info offset-3">Send</button>
                        </form>


                    </div>
                </div>


            </div>
        </div> -->
        <div class="col-lg-9 mt-5">
            <div class="card mb-3">
                <div class="card-header"><?php echo $contrato['nome_aluno'];?></div>
                <div class="card-body">

              
                    <h3 class="card-title">Acompanhe o Desempenho:</h3>
                    <div class="col-lg-12 mt-5">
                    <?php if($des > 0 ){
                    
                    
                    do { ?>
                        <?php if($des['nome_desempenho'] == "Baixo"){
                            
                            ?>
                        <div class="col-lg-3">
                            <i class="far fa-grin-beam-sweat text-danger" style="width: 30px; height: 50px;"></i>
                            <p><?php echo $des['nome_desempenho']; ?></p>
                        </div>
                        <?php  }elseif($des['nome_desempenho'] == "Medio"){ ?>
                            <div class="col-lg-3 ">
                            <i class="far fa-grimace text-warning" style="width: 30px; height: 50px;"></i>
                            <p class=""><?php echo $des['nome_desempenho']; ?></p>
                        </div>
                       
                        <?php  }elseif($des['nome_desempenho'] == "Alto"){ ?>
                            <div class="col-lg-3 ">
                            <i class="far fa-grin-beam text-primary" style="width: 30px; height: 50px;"></i>
                            <p class=""><?php echo $des['nome_desempenho']; ?></p>
                        </div>

                        <?php  }elseif($des['nome_desempenho'] == "Otimo"){ ?>
                            <div class="col-lg-3">
                            <i class="far fa-grin-hearts text-success" style="width: 30px; height: 50px;"></i>
                            <p class=""><?php echo $des['nome_desempenho']; ?></p>
                        </div> 
                        <?php  } ?>
                    </div>
                    <?php } while($des = $dese->fetch_array()); ?>
                    <?php } ?>

                    <div class="col-lg-12 mt-5 row">
                    <?php if($pub > 0 ){
                    
                    
                    do { ?>
                       
                       <div class="col-lg-3">
 
                        <div class="form-group row mt-5">
                                    
                                <label className="btn btn-dark btn-lg" class="row col-lg-3 mt-5">
                                    <i class="fas fa-file-medical" style="width: 150px; height: 90px;"></i>                                  
                                    <strong class="row" style="margin-left: 40px;"><?php echo $pub['titulo'];?></strong>
                                    <?php   $arquivo =  $pub["arquivo_publicacao"];?>
                                    
                                    <p>
                                        <a href="<?php echo $arquivo; ?>" download >Download</a>

                                    </p>
                                    
                                </label>
                        </div>
                    </div>
                    <?php } while($pub = $publ->fetch_array()); ?>
                    <?php } ?>
                    <div class="col-lg-12 mt-5">       
                    <h4 class="mt-5">Anotações:</h4>
                    <?php if($anot > 0 ){
                    
                    
                    do { ?>
                    <div class="car">
                        <p class="mt-5"><?php echo $anot['anotacao']; ?></p>
                    </div>
                    <?php } while($anot = $anota->fetch_array()); ?>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js "></script>
    <script src="js/popper.min.js "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js " crossorigin="anonymous "></script>
</body>

</html>