
<?php

require '../model/conexao.php';



session_start();

if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;  

$id = $_SESSION['id_usuario'];



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

$co = "SELECT * FROM tb_contratos WHERE id_anuncio = '$vin'";

$res =  mysqli_query($connect, $co);
$vi = mysqli_fetch_array($res);

//$mostrarAluno = "SELECT * FROM tb_contratos WHERE id_aluno = '$maluno'";
        
//$mosAluno = mysqli_query($connect, $mostrarAluno);
//$mostaluno = mysqli_fetch_array($mosAluno);


?>

<!doctype html>
<html>

<head>
    <title>Gerenciar</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/iconsw/icon-32x32.png" sizes="32x32" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
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
                        <li>
                        <a class="text-light" href="../pages/vinculoProfessor.php">Vinculos</a>
                    </li>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-light">Responsavel</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                        <?php if($vi > 0 ){
                    
                    
                    do {

                        ?>
                            <li>
                            <?php  echo "<a type='submit' href='../pages/responsavel.php?id_usuario=". $vi['id_usuario']. "'>".$vi['nome_responsavel']."  </a>" ?>
                            </li>
                            <?php } while($vi = $res->fetch_array()); ?>
             
                <?php } ?>     
                 
                    </li>
            
                </ul>

            </nav>

        </div>


    </header>

    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">


            <div class="container row col-lg">
                <div class="navbar-nav col-lg-1">
                  <!--  <button type="button" id="sidebarCollapse" class="btn btn-info ml-auto">
                        <i class="fas fa-indent text-white" ></i>
                    <span></span>
                </button> -->
                </div>

                <!-- Navbar-->
                <ul class="navbar-nav col-lg-11 ml-md-6">
                    <li class="nav-item dropdown ml-auto">
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-user fa-w-14 fa-fw text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg> <?php echo $dados['nome'] ?> </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="../pages/alterar.php">Alterar Cadastro</a>
                          <?php  echo '<a class="dropdown-item" href="../pages/alterarAnuncio.php?id_anuncio='.$anun['id_anuncio'].'">Alterar Anuncio</a>'; ?>
                            <a class="dropdown-item" id="sidebarCollapse">Mostrar Mais</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../controller/logout.php">Logout</a>
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

                        <h2 class="text-dark">Gerenciamento</h2>

                    </div>
                </div>
            </div>

            <div class="row col-lg-3">

            </div>
            <div class="col-lg-4 mt-5">
                <div class="d-flex align-items-center p-3 my-3 text-primary-50 bg-purple rounded box-shadow">
                    <div class="lh-100 col-lg-8">
                        <div class="no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Alunos Matriculados</div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">3 Alunos</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-1">

            </div>

            <div class="col-lg-4 mt-5">
                <div class="d-flex align-items-center p-3 my-3 text-primary-50 bg-purple border-left-info rounded box-shadow">
                    <div class="lh-100 col-lg-8">
                        <div class="no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Responsáveis Vinculados</div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">3 Vinculados</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row col-lg-3">

            </div>

            <div class="col-lg-9 mt-5">
                <div class="d-flex align-items-center p-3 my-3 text-primary-50 bg-lista rounded box-shadow">
                    <div class="lh-100 col-lg-8">

                        <h4 class="" style="color: #6c757d;">Lista de Alunos</h4>

                    </div>
                </div>
            </div>

            <div class="row col-lg-3">

            </div>
            <div class="col-lg-9 mt-5 table-responsive-sm">
                <input class="form-control mb-4" id="tableSearch" type="text" placeholder="Type something to search list items">

                <table class="table table-bordered table-striped">
                    <thead class="the">
                                         
                        <tr>
                            <th>Nome</th>
                            <th>Matéria</th>
                            <th>turno</th>
                            <th>Responsavel</th>
                        </tr>
                    </thead>
                    <?php if($vinculo > 0 ){
                    
                    
                    do { ?>
                    
                    <tbody id="myTable">
                        <tr>
                            <td><?php echo $vinculo['nome_aluno']; ?></td>
                            <td><?php echo $vinculo['disciplina']; ?></td>
                            <td><?php echo $vinculo['turno']; ?></td>
                            <td><?php echo $vinculo['nome_responsavel']; ?></td>
                        </tr>

                    </tbody>
                    <?php } while($vinculo = $resul->fetch_array()); ?>
                    <?php } ?>
                </table>
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

<!--<div id="middle mt-5">
        <div class="container mt-5">

            <div class="row mt-5">
                <div class="col-sm-6 col-md-6 ">
                    <h2 class="display-3 text-center text-ligth">Portal do Reforço:</h2>
                    <div>
                        <a href="cadastro.html" class="text-primary">
                            <div class="align-items-center mt-2 card col-md-12 bg-ligth shadow-lg p-3 mb-5 bg-white">
                                <div class="card-body text-center">
                                    <span class="col-md-2 ">

                                        <img class="ico" src="icons/person-plus.svg" alt="" width="34" height="34">
                                        
                                     </span>
                                    <span class="col-md-10">
                                        <h3 class="display-5">Cadastre-se aqui</h3>
                                     </span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="text-primary">
                            <div class="align-items-center mt-5 card col-md-12  bg-ligth shadow-lg p-3 mb-5 bg-white">
                                <div class="card-body text-center">
                                    <span class="col-md-2">

                                        <img class="ico" src="icons/people.svg" alt="" width="34" height="34">
                                        
                                     </span>
                                    <span class="col-md-10">
                                        <h3 class="display-5">Encontre um Professor</h3>
                                     </span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="text-primary">
                            <div class="align-items-center mt-5 card col-md-12  bg-ligth shadow-lg p-3 mb-5 bg-white">
                                <div class="card-body text-center">
                                    <span class="col-md-2">

                                        <img class="ico" src="icons/life-preserver.svg" alt="" width="34" height="34">
                                        
                                     </span>
                                    <span class="col-md-10">
                                        <h3 class="display-5">Qualquer Duvida</h3>
                                     </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="mt-5 col-sm-6 col-md-5 col-sm-offset-1">
                    <div class="thumbnail bg-ligth mt-5">
                        <div class="caption text-primary">
                            <h1 class="text-center">Login</h1>
                            <form>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="text" class="form-control" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <label>Senha:</label>
                                    <input type="password" class="form-control" placeholder="Your Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="mt-4 col-md-offset-2  btn btn-primary" value="Login" />
                                    <input type="submit" class="mt-4 col-md-offset-5  btn btn-secundary" value="Cadastro" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    Script
    
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    -->