

<!doctype html>
<html>
<!--
     require 'config.php';

     if (isset($_POST['nome'])&& empty($_POST['nome']) == false){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $cpf = addslashes($_POST['cpf']);
        $estado = addslashes($_POST['estado']);
        $cidade = addslashes($_POST['cidade']);
        $senha = md5(addslashes($_POST['senha']));
        $id_perfil = addslashes($_POST['id_perfil']);
    
        $sql = "INSERT INTO prt_usuario SET nome = '$nome' , email = '$email' , cpf = '$cpf', estado = '$estado', cidade= '$cidade', senha = '$senha', id_perfil = '$id_perfil' " ;
        $pdo->query($sql);
    
        
    
    
     }
    

-->


<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/cadastro.css"> 
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <script src="../js/Cadastro_Professor.js"></script>
    <link rel="shortcut icon" href="images/iconsw/icon-32x32.png" sizes="32x32" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


</head>

<body class="">
    <header>
        <nav class="navbar navbar-expand-md fixed-top ">
            <a class="a1 nav navbar-nav navbar-brand "><img class="logo" src="../images/LogoTip.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
                <span style="background-color:white" class="icon-bar" style="font-size: 5px;"></span>
                <span style="background-color:white" class="icon-bar"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                </div>
                <ul class="navbar-nav mt-2 mt-md-0">
                    <li class="nav-item active ">
                        <a class="nav-link text-center text-white" href="princi.php">Home <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-center  text-white" href="Cadastro.php">Cadastro</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-center  text-white" href="anuncio.html">Anuncios</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-center  text-white" href="ajuda.html">Ajuda</a>
                    </li>
            </div>
        </nav>
    </header>
    <div id="main">


        <div class="container">
            <div class="row mt-4">
                <div class="card col-sm-6 col-md-12 mt-4 shadow-lg p-3 mb-5 bg-white ">
                    <div class="card-body bg-ligth text-dark ">
                        <form method="POST" action="../controller/insertUsuario.php" onsubmit="return validaForm(this);" >
                            <fieldset>
                                <legends>
                                    <h3>Informações Gerais:</h3>
                                </legends>
                               <!-- <div class=" mt-5 form-group row ">
                                    <label class="col-md-3 col-form-label mt-2 rounded-circle">Adicionar Foto:</label>
                                    <label className="btn btn-dark btn-lg" class="col-md-9">
                                        <i class="far fa-file-image"  style="width: 100px; height: 50px;"></i>
                                        <input type="file" style="display: none" />
                                      </label>
                                </div> -->
                                <div class="form-group row ">
                                    <label class="col-md-3 col-form-label ">Nome:</label>
                                    <div class="col-md-9 ">
                                        <input type="text " class="form-control " name = "nome" id="nome" placeholder="Nome ">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 col-form-label ">CPF:</label>
                                    <div class="col-md-9 ">
                                        <input type="text " class="form-control " name = "cpf" id="cpf" placeholder="CPF">
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
                                        <input type="text " class="form-control " name = "estado" id="estado" placeholder="Estado ">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 col-form-label ">Cidade:</label>
                                    <div class="col-md-9 ">
                                        <input type="text " class="form-control " name = "cidade" id="cidade" placeholder="Cidade ">
                                    </div>
                                </div>
                            </fieldset>
                            <hr>
                            <fieldset>
                                <legends>
                                    <h3>Acesso a Conta:</h3>
                                </legends>
                                <div class="mt-5 form-group row ">
                                    <label class="col-md-3 col-form-label ">Email:</label>
                                    <div class="col-md-9 ">
                                        <input type="email " class="form-control " name = "email"  id="email" placeholder="Email ">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 col-form-label ">Senha:</label>
                                    <div class="col-md-9 ">
                                        <input type="password" class="form-control " name = "senha" id="senha" placeholder="Senha">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 col-form-label ">Tipo de Acesso:</label>
                                    <div class="col-md-4 ">
                                        <select class="form-control form-control-md " name='id_perfil' id="id_perfil">
                                            <option value="1">Professor</option>
                                            <option value="2">Responsável</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <hr>
                            <div class="row col-sm-12 col-md-12 text-center">
                                <div class="form-group col-sm-6 col-md-6 mt-4 ">
                                    <button type="submit" class="btn btn-primary btn-lg mb-3" style="max-width: 190px" name ="cadastrar_usuario">Confirmar Cadastro</button>
                                </div>
                                <div class="form-group col-sm-6 col-md-6 mt-4 ">
                                    <button type="button" class="btn btn-danger btn-lg mb-3" style="max-width: 300px">Cancelar Cadastro  </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer class="g-bg-blue-radialgradient-circle g-color-white-opacity-0_8 g-bg-img-hero g-pt-60">
        <div id="middle" class=" mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-md-4 mt-5 text-white">
                        <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-10">
                            <h2 class="u-heading-v2_title h6 text-uppercase mb-0">
                                Contatos:
                            </h2>
                        </div>
                        <div class="g-mb-30">
                            <p class="mb-10 mt-3">
                                Email:
                            </p>
                            <p class="mb-10">

                                greem@educacao.com.br

                            </p>

                            <p class="mb-10 mt-5">

                                Telefone:

                            </p>

                            <p class="mb-10">

                                (081) 99999-9999

                            </p>
                        </div>

                    </div>
                    <div class="col-xs-6 col-md-3 mt-5 text-white">
                        <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-10">
                            <h2 class="u-heading-v2_title h6 text-uppercase mb-0">
                                Redes Sociais:
                            </h2>
                        </div>
                        <div class="g-mb-30">
                            <p class="mb-10 mt-5">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-outline-primary btn-sm btn-block mb-2" href="#" style="max-width: 140px">Facebook</a></li>
                                    <li><a class="btn btn-outline-info btn-sm btn-block mb-2" href="#" style="max-width: 140px">Twitter</a></li>
                                    <li><a class="btn btn-outline-danger btn-sm btn-block mb-2" href="https://www.instagram.com/" style="max-width: 140px">Instagran</a></li>
                                </ul>
                            </p>
                        </div>

                    </div>

                    <div class=" col-xs-12 col-md-5">
                        <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="../images/img1.jpg" alt="Primeiro Slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../images/img2.jpg" alt="Segundo Slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../images/img3.jpg" alt="Terceiro Slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Próximo</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Script-->
    <script src="../;js/holder.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js " crossorigin="anonymous "></script>
</body>

</html>