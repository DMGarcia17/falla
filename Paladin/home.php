<?php
session_start();
if($_SESSION['username'] == '' || !isset($_SESSION['username'])){
    header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require_once 'templates/head.php';
    ?>
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Inicio</title>
</head>

<body>

    <body>
        <script src="../assets/js/jquery.js"></script>
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/cust.js"></script>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Punto Comercial
                        </a>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#user"><i class="fas fa-user"></i> Usuario</a>
                    </li>
                    <li>
                        <a href="home.php?p=aW5pY2lvLnBocA=="><i class="fas fa-pallet"></i> Slider</a>
                    </li>
                    <li>
                        <a href="home.php?p=Y2F0ZWdvcmllcy5waHA="><i class="fas fa-tasks"></i> Categor&iacute;as de productos</a>
                    </li>
                    <li>
                        <a href="home.php?p=Z2FsZXJpYS5waHA="><i class="fas fa-images"></i> Galer&iacute;a de proyectos</a>
                    </li>
                </ul>
            </div>
            <div id="page-content-wrapper">
                <div class="navinfo">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i class="fas fa-bars"></i></a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <?php
                        if(isset($_GET['p'])){
                            $res = base64_decode($_GET['p']);
                            require_once($res);
                        }else{
                            require_once('inicio.php');
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Opciones de sesi&oacute;n</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Cambiar contrase&ntilde;a</a>
                            <a href="#" class="list-group-item list-group-item-action">Cerrar Sesi&oacute;n</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            if (screen.width > 720) {
                $("#menu-toggle").click();
            }

        </script>
    </body>

</html>
