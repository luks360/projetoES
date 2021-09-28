<?php 

include('../../../backend/sessions.php'); 
include('../../../backend/control.php'); 

if(!$login_button == ''){
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ES - Solicitações</title>
    <!-- Favicon icon -->
    <link rel="icon" type="imagem/png" href="../../../../public/img/logoSN.png" />
    <!-- Custom Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <!-- Custom CSS -->

    <script src="../../../backend/bootstrap.bundle.min.js"></script>
    <link href="../../../../public/css/style.min.css" rel="stylesheet">
    <link href="../../../../public/css/themify-icons/themify-icons.css" rel="stylesheet">
    <link href="../../../../public/css/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="../../../backend/custom.js"></script>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php">
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
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <?php
                        if($login_button == ''){
                            echo '<div class="dropleft">';
                            echo '<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><img src=' . $_SESSION['user_image'] . ' class="rounded-circle" width="40" height="40"/><h5 style="display: inline-block; padding-left: 5px; padding-right: 10px; color: #2ab152;">' . $_SESSION['user_first_name'] .'</h5></a>';

                            echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                                echo '<li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>';
                                echo '<li><a class="dropdown-item" href="profile.php">Perfil</a></li>';
                                echo '<li><a class="dropdown-item" href="solicitations.php">Solicitações</a></li>';
                                echo '<li><a class="dropdown-item" href="../../../backend/logout.php">Logout</a></li>';
                            echo '</ul>';
                            echo '</div>';
                        }else{ 
                            header('location: index.php');
                        }
                    ?>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Inicio</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Perfil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="solicitations.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Solicitações</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Solicitações</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Todas as solicitações</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Titulo</th>
                                            <th class="border-top-0">Tipo</th>
                                            <th class="border-top-0">Hora</th>
                                            <th class="border-top-0">Situação</th>
                                            <th class="border-top-0">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        $servicosR = array_reverse($servicos, false);
                                        foreach ( $servicosR as $e ){
                                        echo '<tr>';
                                        echo '<td>'. $e['id_servico'] .'</td>';
                                        echo '<td>'. $e['titulo_anuncio'] .'</td>';
                                        echo '<td>'. $e['area_atuacao'] .'</td>';
                                        echo '<td>'. $e['horario_atendimento'] .'</td>';
                                        echo '<td></td>';
                                        echo '<td>
                                            <button class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Finalizar" data-toggle="modal"
                                            data-target="#finalizarSolicitacaoModal"><span class="ti-check"></span></button>
                                            <button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar" style="margin-left: 5px" data-toggle="modal"
                                            data-target="#editarSolicitacaoModal"><span class="ti-pencil-alt"></span></button>
                                            <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir" style="margin-left: 5px" data-toggle="modal"
                                            data-target="#excluirSolicitacaoModal"><span class="ti-trash"></span></button></td>';
                                        echo '</tr>';
                                        }
                                    ?>

<?php
                                        $servicosR = array_reverse($servicos, false);
                                        foreach ( $servicosR as $e ){
                                            echo '<div class="modal fade" id="editarSolicitacaoModal" tabindex="-1" aria-labelledby="editarSolicitacaoLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editarSolicitacaoLabel">Editar solicitação</h5>
                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                            <form method="post" id="insert_form">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Titulo</label>
                                                    <div class="col-sm-10">
                                                        <input name="titulo" type="text" class="form-control"
                                                            id="titulo" value="">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Descrição</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="descrição" type="text" class="form-control" id="descricao"></textarea>
                                                    </div>
                                                </div>
            
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Horario de atendimento</label>
                                                    <div class="col-sm-10">
                                                        <input name="horaA" type="text" class="form-control" id="horaA" value="">
                                                    </div>
                                                </div>
            
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Preço medio</label>
                                                    <div class="col-sm-10">
                                                        <input name="PrecoM" type="text" class="form-control" id="PrecoM" value=""> 
                                                    </div>
                                                </div>
            
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Categoria</label>
                                                    <div class="col-sm-10">
                                                        <input name="categoria" type="text" class="form-control" id="categoria" value="">
                                                    </div>
                                                </div>
                                                
                                                </div>
                                                <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                        <button type="button" class="btn btn-primary">Salvar alterações</button>
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                        </div>';
                                        }
                                        ?>
                                        <div class="modal fade" id="excluirSolicitacaoModal" tabindex="-1" aria-labelledby="excluirSolicitacaoLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="excluirSolicitacaoLabel">Excluir solicitação</h5>
                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Você tem certeza que quer excluir essa solicitação?</h6>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                        <button type="button" class="btn btn-primary">Sim, eu quero</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="finalizarSolicitacaoModal" tabindex="-1" aria-labelledby="finalizarSolicitacaoLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="finalizarSolicitacaoLabel">Finalizar solicitação</h5>
                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Você tem certeza que quer finalizar essa solicitação?</h6>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                        <button type="button" class="btn btn-primary">Sim, eu quero</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 
                <p> 2021 © Easy Services, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
</body>

</html>