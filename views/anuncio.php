<?php 
require '../controller/visualizarAnuncio.php';

require '../model/conexao.php';



session_start();

if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;  

$id = $_SESSION['id_usuario'];



$sql = "SELECT * FROM prt_usuario WHERE  id_usuario = '$id'";

$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

$sq = "SELECT * FROM prt_aluno WHERE  id_usuario = '$id'";

$result = mysqli_query($connect, $sq);
$aluno = mysqli_fetch_array($result);


$name_aluno = mysqli_query($connect, $sq);
$nome_aluno = mysqli_fetch_array($name_aluno);







?>

<!doctype html>
<html>

<head>
    <title>Encontre seu Professor</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="../css/anuncio.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="shortcut icon" href="../images/iconsw/icon-32x32.png" sizes="32x32" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                <ul class="navbar-nav col-lg-10 ">
                
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

    <div id="container">
        <div class="row">
            <div class="col s12 col-md-12 col-lg-3 mt-3">
                <ul class="collapsible a2" data-collapsible="expandable" style="list-style-type: none;">

                    <li class="">
                        <div class="collapsible-header active" style="padding-top: 10px;"><i class="material-icons" style="color:white;">event_note</i>
                            <p style="float: right; padding-right:110px;">Turno</p>
                        </div>
                        <div class="collapsible-body filter-container" style="display: none; padding-top: 0px;  margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                            <form action="#">
                                <ul>
                                    <li>
                                        <input class="with-gap" name="group1" type="radio" id="Today" />
                                        <label for="Today">Manhã</label>
                                    </li>
                                    <li>
                                        <input class="with-gap" name="group1" type="radio" id="week" />
                                        <label for="week">Tarde</label>
                                    </li>
                                    <li>
                                        <input class="with-gap" name="group1" type="radio" id="month" selected />
                                        <label for="month">Noite</label>
                                    </li>
                                    <li>
                                        <input class="with-gap" name="group1" type="radio" id="year" />
                                        <label for="year">Todos</label>
                                    </li>

                                </ul>


                            </form>
                        </div>
                    </li>
                    <li class="mt-3">
                        <div class="collapsible-header active" style="padding-top: 10px;"><i class="material-icons">book</i>
                            <p style="float: right; padding-right:100px;">Matérias</p>
                        </div>
                        <div class="collapsible-body filter-container" style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                            <form action="#">
                                <ul>
                                    <li>
                                        <input class="with-gap" name="group1" type="radio" id="Today" />
                                        <label for="Today">Português</label>
                                    </li>
                                    <li>
                                        <input class="with-gap" name="group1" type="radio" id="week" />
                                        <label for="week">Matematica</label>
                                    </li>
                                    <li>
                                        <input class="with-gap" name="group1" type="radio" id="month" selected />
                                        <label for="month">Biologia</label>
                                    </li>
                                    <li>
                                        <input class="with-gap" name="group1" type="radio" id="year" />
                                        <label for="year">Historia</label>
                                    </li>
                                    <li>
                                        <input class="with-gap" name="group1" type="radio" id="Custom" />
                                        <label for="Custom">Todas</label>
                                    </li>
                                </ul>


                            </form>
                        </div>
                    </li>
                    <li class="mt-3">
                        <div class="collapsible-header active" style="padding-top: 10px;"><i class="material-icons">event_note</i>
                            <p style="float: right; padding-right:110px;">Preços</p>
                        </div>
                        <div class="collapsible-body filter-container" style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                            <form action="#">
                                <ul>
                                    <li>
                                        <input class="with-gap" name="group1" type="radio" id="Today" />
                                        <label for="Today">Menor Preço</label>
                                    </li>
                                    <li>
                                        <input class="with-gap" name="group1" type="radio" id="week" />
                                        <label for="week">Maior Preço</label>
                                    </li>
                                    <li>
                                        <input class="with-gap" name="group1" type="radio" id="month" selected />
                                        <label for="month">Todos os Preços</label>
                                    </li>

                                </ul>


                            </form>
                        </div>
                    </li>
                </ul>


            </div>

            <div class="col s12 col-md-12 col-lg-9">

                <div class="d-flex align-items-center p-3 my-3 text-primary-50 bg-purple rounded box-shadow">
                    <div class="lh-100 col-lg-12">

                        <h2 class="text-dark">Encontre seu Professor</h2>


                        <div class="input-group md-form form-sm form-1 pl-0 col-lg-12 mt-3 input-field">
                            <input id="tableSearch" class="form-control active" type="search" name="search" placeholder="Busque o Professor aqui">
                            <div class="input-group-prepend">
                                <span class="input-group-text cyan lighten-2" id="basic-text">
                                <i class="material-icons" aria-hidden="true" style="color:white ;">search</i>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
                <?php while($dado = $con->fetch_array()) { ?>
                   
                <div id="myTable">
                    <main>
                    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-azul rounded box-shadow mt-5">
                        <div class="lh-100 col-lg-12 ">
                            <div class="media text-muted pt-3">
                                <?php $imagem = $dado['prof_img']; echo '<img src='.$imagem.'  height="75" width="75" data-holder-rendered="true">'; ?>
                                    
                                <div class="media-body pb-3 mb-0 small lh-125" >
                                    <strong class="d-block text-gray-dark border-bottom border-gray "><?php echo $dado['nome']; ?></strong>
                                    <div class="col-lg-6 mt-3" style="float: left;">
                                  
                                        
                                        <p>
                                            <h5 class="text-dark">E-mail:
                                                <strong class="strong"><?php echo $dado['email']; ?></strong>
                                            </h5>
                                        </p>
                                        <p>
                                            <h5 class="text-dark">Matéria(s):
                                                <strong class="strong"><?php echo $dado['disciplina']; ?></strong>
                                            </h5>
                                        </p>
                                        <p>
                                            <h5 class="text-dark">Turno:
                                                <strong class="strong"><?php echo $dado['turno']; ?></strong>
                                            </h5>
                                        </p>
                                        <p>
                                            <h5 class="text-dark">Horarios:
                                                <strong class="strong"><?php echo $dado['horario']; ?></strong>
                                            </h5>
                                        </p>
                                        <p>
                                            <h5 class="text-dark">Formação:
                                                <strong class="strong"><?php echo $dado['formacao']; ?></strong>
                                            </h5>
                                        </p>
                                    </div>
                                    <div class="col-lg-6 mt-3" style="float: right;">
                                    <br>
                                        <p>
                                            <h5 class="text-dark">Estado:
                                                <strong class="strong"><?php echo $dado['estado']; ?></strong>
                                            </h5>
                                        </p>

                                        <p>
                                            <h5 class="text-dark">Cidade:
                                                <strong class="strong"><?php echo $dado['cidade']; ?></strong>
                                            </h5>
                                        </p>
                                        <p>
                                            <h5 class="text-dark">Bairro:
                                                <strong class="strong"><?php echo $dado['bairro']; ?></strong>
                                            </h5>
                                        </p>
                                        <p>
                                            <h5 class="text-dark">Endereço:
                                                <strong class="strong"><?php echo $dado['endereco']; ?></strong>
                                            </h5>
                                        </p>
                                        <p>
                                            <h5 class="text-dark">Valor da aula:
                                                <strong class="strong"><?php echo 'R$ '; echo $dado['custo_aula']; echo ' hora/aula';  ?></strong>
                                            </h5>
                                        </p>
                                    </div>
                                    <div class="col-lg-12" style="float: right;">
                                        <hr>
                                    </div>
                                    <div class="col-lg-12">
                                    <form method="POST">
                                    <div class="invisible form-group">
                                            <label class="col-form-label ">Tipo de Acesso:</label>
                                                <div class="">
                                                    <select class="form-control form-control-md " name='anuncio' id="anuncio">
                                                        <option value="<?php echo $dado['id_anuncio'];?>"><?php echo $dado['id_anuncio'];?></option> <!-- data-toggle="modal"  data-target="#ExemploModalCentralizado" -->
                                                    </select>
                                                </div>
                                        </div> 
                                        <?php  echo "<a type='submit' class='btn btn-outline-success mt-1' name='vinculos' id='vinculos' href='pre_vinculo.php?id_anuncio=". $dado['id_anuncio']. "' >Vincular ao professor</a>";  ?>
                                        <button type="button" class="btn btn-outline-primary mt-1">Entrar em Contato</button>
                                        </form>
                                        
                                        <hr>
                                    </div>

                                   
                                </div>

                            </div>
                        </div>
                    </div>
                    </main>
                </div>
                
                   
                <?php } ?> 
                 <!-- Modal -->
                 <?php
                     
                      
                       ?>
   
                       <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                               <div class="modal-dialog modal-dialog-centered" role="document">
                                                   <div class="modal-content">
                                                       <div class="modal-header bg-primary">
                                                           <h5 class="modal-title text-white" id="TituloModalCentralizado">Contrato</h5>
                                                           <button type="button" class="close text-white" data-dismiss="modal" aria-label="Fechar">
                                                           <span aria-hidden="true">&times;</span>
                                                       </button>
                                                       </div>
                                                       <div class="modal-body">
                                                           <form>
                                                           <div class="form-group row invisible ">
                                                                   <label class="col-md-3 col-form-label ">id_anuncio:</label>
                                                                   <div class="col-md-4 ">
                                                                   <select class="form-control form-control-md ">
                                                                       
                                                                           <option value="<?php echo $modal['id_anuncio']; ?>"><?php echo $modal['id_anuncio']; ?></option>
                                                                         
                               
                                                                       </select>
                                                                   </div>
                                                               </div>
                                                               <div class="form-group row ">
                                                                   <label class="col-md-3 col-form-label ">Nome professor:</label>
                                                                   <div class="col-md-9 ">
                                                                       <input class="form-control" type="text" placeholder="<?php echo $modal['nome'];?>" readonly>
                                                                   </div>
                                                               </div>
                                                               <div class="form-group row ">
                                                                   <label class="col-md-3 col-form-label ">Nome Responsável:</label>
                                                                   <div class="col-md-9 ">
                                                                       <input class="form-control" type="text" placeholder="<?php echo $dados['nome'];?>" readonly>
                                                                   </div>
                                                               </div>
                                                               <div class="form-group row ">
                                                                   <label class="col-md-3 col-form-label ">Turno:</label>
                                                                   <div class="col-md-9 ">
                                                                       <input class="form-control" type="text" placeholder="<?php echo $modal['turno'];?>" readonly>
                                                                   </div>
                                                               </div>
                                                               <div class="form-group row ">
                                                                   <label class="col-md-3 col-form-label ">Valor da aula:</label>
                                                                   <div class="col-md-9 ">
                                                                       <input class="form-control" type="text" placeholder="<?php echo $modal['custo_aula'];?>" readonly>
                                                                   </div>
                                                               </div>
                                                               <div class="form-group row ">
                                                                   <label class="col-md-3 col-form-label ">Filho:</label>
                                                                   <div class="col-md-4 ">
                                                                       <select class="form-control form-control-md ">
                                                                       <?php while($aluno = $result->fetch_array()) { ?>
                                                                           <option value="<?php echo $aluno['id_aluno'];?>"><?php echo $aluno['nome'];?></option>
                                                                           <?php } ?> 
                               
                                                                       </select>
                                                                               
                                                                   </div>
                                                               </div>
   
                                                               <div class="form-group row ">
                                                                   <label class="col-md-3 col-form-label ">Confirmar Filho:</label>
                                                                   <div class="col-md-4 ">
                                                                   <select class="form-control form-control-md ">
                                                                       <?php while($nome_aluno = $name_aluno->fetch_array()) { ?>
                                                                           <option value="<?php echo $nome_aluno['nome'];?>"><?php echo $nome_aluno['nome'];?></option>
                                                                           <?php } ?> 
                               
                                                                       </select>
                                                                   </div>
                                                               </div>
   
                                                               <div class="form-group row invisible">
                                                                   <label class="col-md-3 col-form-label ">id_usuario:</label>
                                                                   <div class="col-md-4 ">
                                                                   <select class="form-control form-control-md ">
                                                                       
                                                                           <option value="<?php echo $_SESSION['id_usuario']; ?>"><?php echo $_SESSION['id_usuario']; ?></option>
                                                                         
                               
                                                                       </select>
                                                                   </div>
                                                               </div>
                                                           </form>
                                                       </div>
                                                       <div class="modal-footer">
                                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                           <button type="button" class="btn btn-primary">Confirmar Vinculo</button>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                    
            </div>

        </div>
    </div>

    <footer class="g-bg-blue-radialgradient-circle g-color-white-opacity-0_8 g-bg-img-hero g-pt-60 ">
        <div id="middle " class=" mt-5 ">
            <div class="container ">
                <div class="row ">
                    <div class="col-xs-6 col-md-4 mt-5 text-white ">
                        <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-10 ">
                            <h2 class="u-heading-v2_title h6 text-uppercase mb-0 ">
                                Contatos:
                            </h2>
                        </div>
                        <div class="g-mb-30 ">
                            <p class="mb-10 mt-3 ">
                                Email:
                            </p>
                            <p class="mb-10 ">

                                greem@educacao.com.br

                            </p>

                            <p class="mb-10 mt-5 ">

                                Telefone:

                            </p>

                            <p class="mb-10 ">

                                (081) 99999-9999

                            </p>
                        </div>

                    </div>
                    <div class="col-xs-6 col-md-3 mt-5 text-white ">
                        <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-10 ">
                            <h2 class="u-heading-v2_title h6 text-uppercase mb-0 ">
                                Redes Sociais:
                            </h2>
                        </div>
                        <div class="g-mb-30 ">
                            <p class="mb-10 mt-5 ">
                                <ul class="list-unstyled ">
                                    <li><a class="btn btn-outline-primary btn-sm btn-block mb-2 " href="# " style="max-width: 140px ">Facebook</a></li>
                                    <li><a class="btn btn-outline-info btn-sm btn-block mb-2 " href="# " style="max-width: 140px ">Twitter</a></li>
                                    <li><a class="btn btn-outline-danger btn-sm btn-block mb-2 " href="https://www.instagram.com/ " style="max-width: 140px ">Instagram</a></li>
                                </ul>
                            </p>
                        </div>

                    </div>

                    <div class=" col-xs-12 col-md-5 ">
                        <div id="carouselExampleIndicators " class="carousel slide " data-ride="carousel ">
                            <ol class="carousel-indicators ">
                                <li data-target="#carouselExampleIndicators " data-slide-to="0 " class="active "></li>
                                <li data-target="#carouselExampleIndicators " data-slide-to="1 "></li>
                                <li data-target="#carouselExampleIndicators " data-slide-to="2 "></li>
                            </ol>
                            <div class="carousel-inner ">
                                <div class="carousel-item active ">
                                    <img class="d-block w-100 " src="images/img1.jpg " alt="Primeiro Slide ">
                                </div>
                                <div class="carousel-item ">
                                    <img class="d-block w-100 " src="images/img2.jpg " alt="Segundo Slide ">
                                </div>
                                <div class="carousel-item ">
                                    <img class="d-block w-100 " src="images/img3.jpg " alt="Terceiro Slide ">
                                </div>
                            </div>
                            <a class="carousel-control-prev " href="#carouselExampleIndicators " role="button " data-slide="prev ">
                                <span class="carousel-control-prev-icon " aria-hidden="true "></span>
                                <span class="sr-only ">Anterior</span>
                            </a>
                            <a class="carousel-control-next " href="#carouselExampleIndicators " role="button " data-slide="next ">
                                <span class="carousel-control-next-icon " aria-hidden="true "></span>
                                <span class="sr-only ">Próximo</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Script-->

    <script src="js/holder.min.js "></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-slim.min.js "><\/script>')
    </script>
    <script src="../js/bootstrap.min.js "></script>
    <script src="../js/popper.min.js "></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js " crossorigin="anonymous "></script>                                                                    
    <!--<script src="js/anuncio.js"></script>-->
    <script type="text/javascript">
        $(document).ready(function() {

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });

        });


        $(document).ready(function() {
            $("#tableSearch").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable main").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
                                                      

</body>

</html>