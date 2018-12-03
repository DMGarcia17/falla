<?php
session_start();
if($_SESSION['username'] == '' || !isset($_SESSION['username'])){
    header('location: ../');
}
ini_set('post_max_size','1000M');
ini_set('upload_max_filesize','1000M');
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
                            <a href="" id="cpass" class="list-group-item list-group-item-action">Cambiar contrase&ntilde;a</a>
                            <a href="procedimientos/seesion.php" class="list-group-item list-group-item-action">Cerrar Sesi&oacute;n</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="caps" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Cambiar contrase&ntilde;a</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <form action="procedimientos/cpass.php" method="post">
                    <div class="modal-body">
                       <label for="opass">Contrase&ntilde;a antigua</label>
                       <input type="password" name="opass" required class="form-control" id="opass">
                        <label for="npass">Nueva contrase&ntilde;a</label>
                        <input type="password" name="npass" required class="form-control" id="npass">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancelar</button>
                        <button class="btn btn-success" type="submit">Cambiar contrase&ntilde;a</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Alerta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <?php
                        switch($_GET['wra']){
                            case 1:
                                echo "Lamentamos decir que no se ha podido cambiar la contrase&ntilde;a intente de nuevo m&aacute;s tarde";
                                break;
                            case 2:
                                echo "Lamentablemente no se conseguido cambiar la clave de acceso debo a los siguiente:<br>".$_SESSION['wra'];
                                break;
                            case 0:
                                echo $_SESSION['wra'];
                        }
                        
                        ?>
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
            $("#cpass").click(function(event){
                event.preventDefault();
                cpass();
            }); 
            
            <?php
            if(isset($_GET['wra'])){
                echo "$(\"#error\").modal(\"show\");";
            }
            ?>

        </script>
    </body>

</html>
