<?php 
require_once("..\..\ControlClass.php");
if(!(SessionesPet::session_active())){
    header('Location: index.php');
    exit;
}
$user =new Usuario();
if(!$user->authorizacion('admi')){
    echo "<h2> No tienes Nivel para acceder a esta seccion </h2>";
    exit;
}

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <meta content="" name="description">
                    <meta content="" name="author">
                        <title>
                            I WANT A PET
                        </title>
                        <!-- Bootstrap core CSS -->
                        <link href="../../css/estilos.css" rel="stylesheet">
                            <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                                <!-- Custom fonts for this template -->
                                <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                                    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
                                        <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" rel="stylesheet">
                                            <!-- Plugin CSS -->
                                            <link href="../../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
                                                <link href="../../css/custom.css" rel="stylesheet">
                                                    <link href="../../css/custom-themes.css" rel="stylesheet">
                                                        <!-- Custom styles for this template -->
                                                        <link href="../../css/creative.min.css" rel="stylesheet">
                                                        </link>
                                                    </link>
                                                </link>
                                            </link>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
</html>
<body>
    <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
        <a class="btn btn-sm btn-dark" href="#" id="show-sidebar">
            <i class="fas fa-bars">
            </i>
        </a>
        <nav class="sidebar-wrapper" id="sidebar">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">
                        I WANT A PET
                    </a>
                    <div id="close-sidebar">
                        <i class="fas fa-times">
                        </i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img alt="User picture" class="img-responsive img-rounded" src="img/user.jpg">
                        </img>
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            Alexander
                            <strong>
                                Villaneda
                            </strong>
                        </span>
                        <span class="user-role">
                            Administrador
                        </span>
                        <span class="user-status">
                            <i class="fa fa-circle">
                            </i>
                            <span>
                                Online
                            </span>
                        </span>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>
                                General
                            </span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#" id="mascotas">
                                <i class="fas fa-paw">
                                </i>
                                <span>
                                    Mascotas
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">
                                            Todos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Perros
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Gatos
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#" id="mascotas">
                                <i class="fas fa-home">
                                </i>
                                <span>
                                    Fundaciones
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">
                                            Aprobar Fundaciones
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Gestion Fundaciones
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#" id="mascotas">
                                <i class="fas fa-user">
                                </i>
                                <span>
                                    Usuarios
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">
                                            Gestion usuarios
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <div class="dropdown">
                    <a aria-expanded="false" aria-haspopup="true" class="" data-toggle="dropdown" href="#" id="dropdownMenuMessage">
                        <i class="fa fa-cog">
                        </i>
                        <span class="badge-sonar">
                        </span>
                    </a>
                    <div aria-labelledby="dropdownMenuMessage" class="dropdown-menu">
                        <a class="dropdown-item" href="#">
                            Mi perfil
                        </a>
                    </div>
                </div>
                <div>
                    <a href="index.php">
                        <i class="fa fa-power-off">
                        </i>
                    </a>
                </div>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <section class="bg-faded page-content">
            <?php include '..\tablas\tablamascotasadmin.php'?>

        </section>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js">
    </script>
    <script src="../../vendor/scrollreveal/scrollreveal.min.js">
    </script>
    <script src="../../vendor/magnific-popup/jquery.magnific-popup.min.js">
    </script>
    <script src="../../vendor/jquery/jquery.min.js">
    </script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js">
    </script>
    <script src="../../js/custom.js">
    </script>
    <script src="../../js/pinterest_grid.js">
    </script>
    <script src="../../js/creative.min.js">
    </script>
    <script src="../../js/main.js">
    </script>
</body>
