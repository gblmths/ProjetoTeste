<?php
require '../model/conexao.php';



session_start();

if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;  

$id = $_SESSION['id_usuario'];

$idaluno = filter_input(INPUT_GET, 'id_aluno', FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT * FROM prt_usuario WHERE  id_usuario = '$id'";

$resultado = mysqli_query($connect, $sql);

$dados = mysqli_fetch_array($resultado);

$sq = "SELECT * FROM prt_aluno WHERE  id_aluno = '$idaluno'";

$result =  mysqli_query($connect, $sq);
$aluno = mysqli_fetch_array($result);

$s = "SELECT * FROM prt_aluno WHERE id_usuario = '$id'";

$resul =  mysqli_query($connect, $s);
$conaluno = mysqli_fetch_array($resul);

$ab = "SELECT * FROM tb_contratos WHERE id_usuario = '$id'";  

$resu = mysqli_query($connect, $ab);
$conalunos = mysqli_fetch_array($resu);



?>

<!doctype html>
<html>

<head>
    <title>Cadastro Filho</title>
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
                        <a class="text-light" href="../views/anuncio.php">Encontre seu Professor</a>
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
                            <a class="dropdown-item" href="/Other/alterarReponsavel.html">Alterar Cadastro</a>
                            <a class="dropdown-item" href="/Other/alterarFilho.html">Alterar Cadastro do Filho</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="./controller/logout.php">Logout</a>
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

                        <h2 class="text-dark">Acompanhamento</h2>

                    </div>
                </div>
            </div>
            <div class="row col-lg-3">

            </div>
            <?php if($aluno > 0 ){
                    
                    
                    do {

                        ?>  
            <div class="col-lg-9">
                <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow mt-5">
                    <div class="lh-100 col-lg-12">
                        <form method="POST" action="../controller/deletarFilho.php">
                        <div class="media text-muted pt-3">
                            <div class="media-body pb-3 mb-0 small lh-125" id="">
                                <strong class="d-block text-gray-dark border-bottom border-gray ">Nome do Filho</strong>
                                <p class="">
                                    <h5 class="text-dark invisible">Endereço:
                                        <strong class="strong" name ="id_usuario" value="<?php echo $_SESSION['id_usuario']; ?>" ><?php echo $_SESSION['id_usuario']; ?></strong>
                                    </h5>
                                </p>
                                <p>
                                    <h5 class="text-dark">Serie/Ano:
                                        <strong class="strong"><?php echo $aluno['serie_ano']; ?></strong>
                                    </h5>
                                </p>
                                <p>
                                    <h5 class="text-dark">E-mail:
                                        <strong class="strong"><?php echo $aluno['email']; ?></strong>
                                    </h5>
                                </p>
                                <p>
                                    <h5 class="text-dark">Estado:
                                        <strong class="strong"><?php echo $aluno['estado']; ?></strong>
                                    </h5>
                                </p>
                                <p>
                                    <h5 class="text-dark">Cidade:
                                        <strong class="strong"><?php echo $aluno['cidade']; ?></strong>
                                    </h5>
                                </p>
                                <p>
                                    <h5 class="text-dark">Endereço:
                                        <strong class="strong"><?php echo $aluno['endereco']; ?></strong>
                                    </h5>
                                </p>
                                <div class="form-group row invisible">
                            <label class="col-md-3 col-form-label ">Filho:</label>
                                <div class="col-md-4 ">
                                    <select class="form-control form-control-md "  id="id_aluno" name="id_aluno" >
                                    <?php if($aluno > 0 ){
                    
                    
                                     do { ?>
                                        
                                            <option value="<?php echo $aluno['id_aluno'];?>"><?php echo $aluno['nome'];?></option>
                                        <?php } while($aluno = $result->fetch_array()); ?> 
                                     <?php } ?>
                                     </select>
                                </div>
                        </div>
                                <hr>
                                <div class="" style="float: right;">
                                <div class="form-group col-sm-6 col-md-6 mt-4 ">
                                <?php  echo "<a type='submit' class='btn btn-outline-primary mt-1' id='alterarFilho' href='alterarFilho.php?id_aluno=". $aluno['id_aluno']. "' >Alterar Cadastro</a>";  ?>
                                </div>
                                <div class="form-group col-sm-6 col-md-6 mt-4 ">
                                    <input type="submit" class="btn btn-danger mb-3" id="deletar_filho" name="deletar_filho">Deletar Cadastro</input>
                                </div>
                                </div>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
             <?php } while($aluno = $result->fetch_array()); ?>
             
             <?php } ?>     
        </div>


    </div>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.min.js "></script>
    <script src="../js/popper.min.js "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js " crossorigin="anonymous "></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });

        });


        $(document).ready(function() {
            $("#tableSearch").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

</body>

</html>