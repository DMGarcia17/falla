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
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/popper.js"></script>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Punto Comercial
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-pallet"></i> Slider</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-tasks"></i> Categor&iacute;as de productos</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-images"></i> Galer&iacute;a de proyectos</a>
                    </li>
                </ul>
            </div>
            <div id="page-content-wrapper">
                <div class="navinfo">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i class="fas fa-bars"></i></a>
                            <img src="../assets/img/avatar.png" style="position: absolute; width: 40px; right: 0; left: 88vw;" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
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
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

        </script>
    </body>

</html>
