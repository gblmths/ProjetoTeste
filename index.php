



<!doctype html>
<html>

<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="shortcut icon" href="img/favicon.png" sizes="32x32" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body class="">
    <main>
        <header>
            <nav class="navbar navbar-expand-md fixed-top ">
                <a class="a1 nav navbar-nav navbar-brand "><img class="logo" src="images/LogoTip.png"></a>
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
        <section>
            <div id="main">

                <div class="container mt-5">
                    <div class="row mt-5">
                        <div class="col-sm-6 col-md-8 mt-5">

                            <h1 class="featurette-heading">Greem: Organização Educacional</h1>

                        </div>
                        <div class="mt-5 col-sm-6 col-md-4 col-mt-offset-3">
                            <div class="card bg-ligth mt-5">
                                <div class="card-body text-dark">
                                    <h2 class="h3 g-font-weigth-600 g-mb-35 text-center">Acesso aos Serviços</h2>
                                    <form method ="POST" class="mt-4" action="./controller/validacao.php">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" class="form-control" placeholder="Email" name = "email" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Senha:</label>
                                            <input type="password" class="form-control" placeholder="Senha" name = "senha" value="" />
                                        </div>
                                        <div class="form-group">
                                            <a href="gerenciar.html"><button type="submit" class="btn btn-outline-primary col-md-12">Entrar</button></a>
                                            <a href="cadastro.html"><button type="button" class="mt-2 btn btn-outline-secondary col-md-12">Não tenho cadastro</button></a>
                                            <div class="m-2"><a href="#" class="offset-3">Esqueci minha senha</a></div>
                                        </div>
                                    </form>    
                                </div>

                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container marketing mt-5">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4  mt-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <svg class="bi bi-person-plus text-primary" width="140" height="140" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM6 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm4.5 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                          </svg>
                            <h2 class="mt-3">Cadastro</h2>
                            <p>Cadastre-se em nosso site para ter acesso aos serviços. Para Professores: Anunciar seu Trabalho e Gerenciar suas aulas. Pais: Encontrar professores e acompanhar o desempenho do seu filho.</p>
                            <p><a class="btn btn-primary" href="cadastro.html" role="button">Ir para Pagina &raquo;</a></p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4  mt-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <svg class="bi bi-people text-primary" width="140" height="140" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zm7.973.056v-.002.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                          </svg>
                            <h2>Encontre seu Professor</h2>
                            <p>Encontre um professor para seu filho, em nosso site existem varios professores cadastrados e pronto para dar o melhor suporte para seu filho.</p>
                            <p><a class="btn btn-primary" href="anuncio.html" role="button">Ir para Pagina &raquo;</a></p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4  mt-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <svg class="bi bi-life-preserver text-primary" width="140" height="140" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                            <path d="M11.642 6.343L15 5v6l-3.358-1.343A3.99 3.99 0 0 0 12 8a3.99 3.99 0 0 0-.358-1.657zM9.657 4.358L11 1H5l1.343 3.358A3.985 3.985 0 0 1 8 4c.59 0 1.152.128 1.657.358zM4.358 6.343L1 5v6l3.358-1.343A3.985 3.985 0 0 1 4 8c0-.59.128-1.152.358-1.657zm1.985 5.299L5 15h6l-1.343-3.358A3.984 3.984 0 0 1 8 12a3.99 3.99 0 0 1-1.657-.358z"/>
                          </svg>
                            <h2 class="mt-3">Ajuda</h2>
                            <p>Aqui você encontrar algumas perguntas com respostas prontas sobre nosso site. Qualquer duvida você pode ir para essa Pagina e encontrar a resposta, se não obter entre contato conosco.</p>
                            <p><a class="btn btn-primary" href="ajuda.html" role="button">Ir para Pagina &raquo;</a></p>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
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
                                        <li><a class="btn btn-outline-danger btn-sm btn-block mb-2" href="https://www.instagram.com/" style="max-width: 140px">Instagram</a></li>
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
                                        <img class="d-block w-100" src="images/img1.jpg" alt="Primeiro Slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/img2.jpg" alt="Segundo Slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/img3.jpg" alt="Terceiro Slide">
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
    </main>
    <!--Script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>
</body>

</html>



<!--
                    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/img1.jpg" alt="Primeiro Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img2.jpg" alt="Segundo Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img3.jpg" alt="Terceiro Slide">
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
                </div>-->

<!-- <div class="mt-5 col-md-10 col-xs-12 col-sm-offset-2">
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

                </div> -->