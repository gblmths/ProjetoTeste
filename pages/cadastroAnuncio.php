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



?>
<!doctype html>
<html>

<head>
    <title>Cadastrar Anuncio</title>
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
                    <a class="a2" href="../gerenciar.html" style="text-decoration:none;">
                        <h3>Portal do Aluno:<?php echo $dados['nome']; ?></h3>
                    </a>
                </div>

                <ul class="list-unstyled components ">
                    <p>Buscar</p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Alunos</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="alunos.html">Aluno 1</a>
                            </li>
                            <li>
                                <a href="alunos.html">Aluno 2</a>
                            </li>
                            <li>
                                <a href="alunos.html">Aluno 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="text-light" href="/pages/cadastroAnuncio.html">Cadastrar Marketing</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-light">Responsável</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="responsavel.html">Responsável 1</a>
                            </li>
                            <li>
                                <a href="responsavel.html">Responsável 2</a>
                            </li>
                            <li>
                                <a href="responsavel.html">Responsável 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="text-light" href="/pages/vinculoProfessor.html">Vinculos</a>
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
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-user fa-w-14 fa-fw text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg><!-- <i class="fas fa-user fa-fw"></i> --></a>
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

                        <h2 class="text-dark">Cadastre seu anuncio</h2>

                    </div>
                </div>
            </div>

            <div class="row col-lg-3">

            </div>


            <div class="col-lg-9">
                <div class="card col-sm-6 col-md-12 mt-4 shadow-lg p-3 mb-5 bg-white ">
                    <div class="card-body bg-ligth text-dark ">
                        <form method="POST" action="../controller/insertAnuncio.php" enctype="multipart/form-data">
                            <fieldset>
                                <legends>
                                    <h3>Informações Gerais:</h3>
                                </legends>
                                <div class="mt-5 form-group row ">
                                    <label class="col-md-3 col-form-label ">Nome:</label>
                                    <div class="col-md-9 ">
                                        <input type="text " class="form-control " id="nome " placeholder="Nome ">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    
                                    <label class="col-md-3 col-form-label mt-2 rounded-circle">Adicionar Foto:</label>
                                    <label className="btn btn-dark btn-lg" class="col-md-9">
                                        <i class="far fa-file-image"  style="width: 100px; height: 50px;"></i>
                                        <input type="file"  required name="prof_img"> 

                                      </label>
                                      
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 col-form-label ">Formação:</label>
                                    <div class="col-md-9 ">
                                        <input type="text " class="form-control " id="formacao" placeholder="Formação">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 col-form-label ">Matéria:</label>
                                    <div class="col-md-9 ">
                                        <input type="text " class="form-control " id="disciplina" placeholder="materia">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 col-form-label ">Turno:</label>
                                    <div class="col-md-9 ">
                                        <input type="text " class="form-control " id="turno" placeholder="turno">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 col-form-label ">E-mail:</label>
                                    <div class="col-md-9 ">
                                        <input type="text " class="form-control " id="email" placeholder="E-mail">
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label class="col-md-3 col-form-label ">Valor da Aula:</label>
                                    <div class="col-md-9 ">
                                        <input type="text " class="form-control " id="custo_aula" placeholder="Valor da Aula">
                                    </div>
                                </div>
                            </fieldset>
                            <hr>
                            <fieldset>
                                <legends>
                                    <h3>Endereço:</h3>
                                </legends>
                                <div class="mt-5 form-group row ">
                                    <label class="col-md-3 col-form-label ">Estado:</label>
                                    <div class="col-md-9 ">
                                        <input type="text " class="form-control " id="estado " placeholder="Estado ">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 col-form-label ">Cidade:</label>
                                    <div class="col-md-9 ">
                                        <input type="text " class="form-control " id="cidade " placeholder="Cidade ">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 col-form-label ">Endereço:</label>
                                    <div class="col-md-9 ">
                                        <input type="text " class="form-control " id="endereco " placeholder="Endereço ">
                                    </div>
                                </div>
                            </fieldset>
                            <hr>

                            <div class="row col-sm-12 col-md-12 text-center">
                                <div class="form-group col-sm-6 col-md-6 mt-4 ">
                                <input type="submit" class="btn btn-primary btn-lg mb-3" style="max-width: 190px">Confirmar Cadastro</input>
                                </div>
                                <div class="form-group col-sm-6 col-md-6 mt-4 ">
                                    <button type="button" class="btn btn-danger btn-lg mb-3" style="max-width: 300px">Cancelar Anuncio</button>
                                </div>
                            </div>
                        </form>
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