<?php include('../../../backend/sessions.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="google-signin-client_id" content="469673828599-qsk5o17sgmtifbgglfdl85bto9e0s776.apps.googleusercontent.com">-->
    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!-- Custom styles for this template -->
    <link href="../../../../public/css/index-style.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="../../../../public/img/logoSN.png"/>

    <script src="../../../backend/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!--<script src="../../../backend/signin.js"></script>-->

    <!--Google Platform Library-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!-- Dark Logo icon -->
                    <img src="../../../../public/img/logoSN.png" alt="homepage" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="../../../../public/img/logo-text.png" alt="homepage" />
                </span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                    <div class="data">
                    <?php
                    if ($login_button == '') {
                        echo '<div class="dropdown">';
                        echo '<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><img src=' . $_SESSION['user_image'] . ' class="rounded-circle" width="40" height="40"/><h5 style="display: inline-block; padding-left: 5px; color: #2ab152;">' . $_SESSION['user_first_name'] .'</h5></a>';

                        echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                            echo '<li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>';
                            echo '<li><a class="dropdown-item" href="profile.php">Perfil</a></li>';
                            echo '<li><a class="dropdown-item" href="solicitations.php">Solicitações</a></li>';
                            echo '<li><a class="dropdown-item" href="../../../backend/logout.php">Logout</a></li>';
                        echo '</ul>';
                        echo '</div>';
                    } else {
                        echo '<div>' . $login_button . '</div>';
                    }
                    
                    ?>
                    </div>
                    <!--<form>                        
                        <button class="cadastrar btn btn-outline-success" type="submit">Cadastrar-se</button>
                        <button class="login btn btn-outline-success" type="submit">Login</button>
                    </form>-->
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="../../../../public/img/index.jpg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" style="filter: brightness(33%);">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Quem somos</h1>
                            <p>A ES procura ajudar a resolver problemas rapidamente.</p>
                            <p><a class="btn btn-lg btn-primary" href="#quemsomos">Saiba mais</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="../../../../public/img/clientes-banner.jpeg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" style="filter: brightness(33%);">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Tem algum problema que precisa de profissionais?</h1>
                            <p>Se cadastrando no nosso sistema você resolverá tudo e muito mais.</p>
                            <p><a class="btn btn-lg btn-primary" href="#paraclientes">Saiba mais</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="../../../../public/img/empresas-banner.jpeg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" style="filter: brightness(33%);">

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Ei, você que é empresa</h1>
                            <p>Que tal aumentar sua rede de clientes e lucros? é simples e fácil, basta se cadastrar.</p>
                            <p><a class="btn btn-lg btn-primary" href="#paraempresas">Saiba mais</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="img">
                        <img src="../../../../public/img/camera-fill.svg" width="100" height="100" />
                    </div>

                    <h2>Fotografos</h2>
                    <p>Precisa de alguém para tirar aquela foto daquele momento especial? aqui te ajudamos a achar a pessoa ideal.</p>
                    
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="img">
                        <img src="../../../../public/img/hammer.svg" width="100" height="100" />
                    </div>

                    <h2>Construções</h2>
                    <p>Se você precisa de profissionais para te ajudar na construção de algo, você poderá achar aqui.</p>
                    
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="img">
                        <img src="../../../../public/img/laptop-fill.svg" width="100" height="100" />
                    </div>

                    <h2>Técnicos</h2>
                    <p>Aquele seu computador velho ou outro eletronico está com problema? ache a pessoa certa para consertar aqui.</p>
                    
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <div class="img">
                        <img src="../../../../public/img/box.svg" width="100" height="100" />
                    </div>

                    <h2>Transportadoras</h2>
                    <p>Precisa enviar algo há um parente distante ou está de mudanças? ache quem pode levar suas coisas de forma confiavel.</p>
                    
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="img">
                        <img src="../../../../public/img/pencil.svg" width="100" height="100" />
                    </div>

                    <h2>Reformas</h2>
                    <p>Se é de reforma que você precisa, aqui você terá profissionais para te ajudar!</p>
                    
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="img">
                        <img src="../../../../public/img/wrench.svg" width="100" height="100" />
                    </div>

                    <h2>Mecânicos</h2>
                    <p>Se seu veiculo parou de funcianar, aqui é o lugar onde você poderá recorrer por ajuda!</p>
                    
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette" id="quemsomos">
                <div class="col-md-7">
                    <h2 class="featurette-heading ">O que é o Easy Services? <span class="text-muted"> Um pouco sobre
                            nós.</span></h2>
                    <p class="lead">O ES é um projeto de sistema que visá melhorar no atendimento e demandas de diversos
                        tipos de serviços, e ajudar o cliente a ter seus problemas resolvidos de forma rapida e facil.
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" src="../../../../public/img/logo.png" role="img">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette" id="paraempresas">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Sou uma empresa, o que eu posso fazer? <span class="text-muted">Confira abaixo.</span></h2>
                    <p class="lead">Primeiramente você terá que ter uma conta em nosso sistema para obter suas vantagens. Vantagens que são: </p><br/>
                    <li class="lead">Poder receber solicitações de serviços na sua area de clientes cadastrados no sistema;</li>
                    <li class="lead">Ter acesso a API do sistema para poder tratar as solicitações desejadas na sua propria aplicação.</li>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="../../../../public/img/empresas.png" width="350"
                        height="350" role="img" />

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette" id="paraclientes">
                <div class="col-md-7">
                    <h2 class="featurette-heading">O que eu como cliente posso fazer? <span class="text-muted">Simples, seja ajudado!</span></h2>
                    <p class="lead">Obviamente você primeiro terá que ter um cadastro no sistema, e depois disso você poderá: </p><br/>
                    <li class="lead">Solicitar serviços diversos;</li>
                    <li class="lead">Escolher qual das empresas que mostrou interesse que irá atender a solicitação.</li>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="../../../../public/img/clientes.png" width="350"
                        height="350" role="img" />
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->

        

        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#"><button class="topo btn btn-outline-success">Voltar ao topo</button></a></p>
            <p>2021 © Easy Services, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>
</body>

</html>