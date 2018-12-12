<!DOCTYPE html>
<html lang="es">

<head>
    <?php
		require_once 'templates/head.php';
	?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="assets/css/compact-gallery.css">
    <title>Proyectos</title>
</head>

<body>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <?php
require_once 'templates/nav.php';
?>
    <script>
        $(document).ready(function() {
            $("#proyectos").css("color", "#fa0573");
            $("#proyectos").css("font-weight", "bolder");
            if (screen.width < 720) {
                $("#branbd").css({
                    "height": "50px",
                    "width": "225px",
                    "padding-top": "15px"
                });
                $(".cont").css("padding-left", "5%");
            }
            cargarGaleria('*', '1');
        });

    </script>
    <div style="padding-top: 70px; width: auto; overflow: hidden; text-align: justify;">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="tittle">
                    <div style="color: #666666;">
                        <h1>Proyectos</h1>
                    </div>
                    <img src="assets/img/banner.png" class="img-fluid" alt="Banner">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6 col-sm-6" style="height: 30px !important;"><span class="categoria actcat" id="todos" onclick="cargarGaleria('*', '1')">Todos</span></div>
                    <?php
                    require_once('core/proc.php');
                    $db = new procedimientos();
                    $res = $db->blankect_query("categorias", "*");
                    foreach($res as $r){
                        echo "<div class=\"col\" style=\"height: 30px !important;\"><span class=\"categoria\" id=\"{$r['id_cat']}\" onclick=\"cargarGaleria('{$r['id_cat']}', '1')\">{$r['categoria']}</span></div>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="gallery-block compact-gallery" style="padding-bottom: 0 !important;">
                    <div class="row no-gutters" id="gallery">

                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="mx-auto">
                <div id="pag">
                    
                </div>
            </div>
        </div>
        <div style="height: 200px; background: #CDCDCD;">
            <div class="row">
                <div class="col-lg-12 col md-12 col-sm-12 text-center" style="">
                    <a href="contac.php"><button style="margin-top: 81px;margin-bottom: 81px;" class="btn btna">CONT&Aacute;CTANOS <i class="fas fa-angle-right"></i></button></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container" style="
            padding-left: 0 !important;
            padding-right: 0 !important;
            padding-top: 30px !important;
            padding-bottom: 0 !important;">
                <span><span style="
            color: #fa0573;
            font-weight: bold;" class="cont">Tel&eacute;fono:</span> <a href="tel:+50324347776" class="hr">+503 2434 - 7776</a></span>
                <hr style="
            padding: 0 !important;
            margin: 0 !important;">
                <span><span style="color: #fa0573;
            font-weight: bold;" class="cont">Email:</span> <a href="mailto:hablemos@punto-comercial.com" class="hr">hablemos@punto-comercial.com</a></span>
                <hr style="
            padding-left: 0 !important;
            padding-right: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 30px !important;
            margin: 0 !important;">
            </div>
            <div style="
            background: #CDCDCD;
            height: 70px;
            width: 100%;" id="banft">
                <div class="container" style="width: 100% !important;">
                    <div class="row" style="padding: 10px;">
                        <duv class="col-lg-10 col-sm-12">Todos los derechos reservados 2018</duv>
                        <duv class="col-lg-2 col-sm-12" id="redes">
                            <a href="#"><img src="assets/img/f.png" class="img-fluid" style="height: 20px; padding-left: 25px;"></a>
                            <a href="#"><img src="assets/img/i.png" style="height: 20px; padding-left: 25px;" class="img-fluid"></a>
                        </duv>
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>

            <script>
                baguetteBox.run('.compact-gallery', {
                    animation: 'slideIn'
                });

            </script>
            <script src="assets/js/cust.js"></script>
        </div>
</body>

</html>
