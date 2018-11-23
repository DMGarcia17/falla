<?php
require_once('core/proc.php');
$db = new procedimientos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Punto Comercial</title>
	<?php
		require_once 'templates/head.php';
	?>
	<link rel="stylesheet" href="assets/css/slider.css">
</head>
<body style="">
<script src="assets/js/jquery.js"></script>	
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script type="text/javascript" charset="utf-8">
  $(window).on('load', function () {
  	$('.flexslider').flexslider({
    	touch: true,
    	pauseOnAction: false,
    	pauseOnHover: false
    });
  });
  $(document).ready(function () {
  	if(screen.width > 720){
  		$("#cards").addClass("cards");
  		$("#ft").removeClass("aut");
  	}else{
  		$("#ft").addClass("aut");
  		$("#banft").addClass("banft2");
  		$("#cards").removeClass("cards");
  		$("#branbd").css({"height": "50px", "width":"225px", "padding-top":"15px"});
  		$(".parr").css("height","auto");
  		$(".tparr").css("padding-top", "20px");
  		$(".pdimg").css("padding-top", "20px");
  		$("#redes").css("left", "55%");
  		$(".cont").css("padding-left", "5%");
  		$("#ft").css("background", "url('assets/img/f2.jpg')");
  	}
  });
</script>

<?php
require_once 'templates/nav.php';
?>

<div style="padding-top: 76px;">
	<div class="flexslider">
	    <ul class="slides">
	      <?php
            $res = $db->blankect_query("img_sli", "img");
            foreach($res as $r){
                echo "<li>
                                <img src=\"{$r['img']}\">
                              </li>";
            }
            ?>
	    </ul>
    </div>

<div class="tittle">
	<div style="color: #666666;">
		EN QUE NOS ESPECIALIZAMOS
	</div>
	<img src="assets/img/banner.png" class="img-fluid" alt="Banner">
</div>
<div class="container">
	<div style="text-align: justify;" id="cards">
	<div class="row" class="justify-content-center">
		<div class="col-lg-4 col-md-12">
			<h4 class="tparr" style="font-weight: bold;">Remodelaci&oacute;n</h4>
			<p class="parr" style="height: 167px; overflow: hidden;">
				Creemos que un espacio puede recobrar vida con una remodelaci&oacute;n sabiendo aprovechar los recursos con los que se cuenta.
			</p>
			<div style="background: black; width: auto;height: auto;">
			<img src="assets/img/info1.jpg" alt="" class="img-fluid" id="img1" style="opacity: 0.7;">
		</div>
		</div>
		<div class="col-lg-4 col-md-12">
			<h4 class="tparr" style="font-weight: bold;">Diseños</h4>
			<p class="parr" style="height: 167px; overflow: hidden;">
				Con la experiencia de nuestra &aacute;rea creativa, especializada en arquitectura de interiores somos capaces de desarrollar proyectos vanguardistas enfocados en el diseño.
			</p>
			<div style="background: black;">
			<img src="assets/img/info2.jpg" alt="" id="img2" class="img-fluid" style="opacity: 0.7;">
			</div>
		</div>
		<div class="col-lg-4 col-md-12">
			<h4 class="tparr" style="font-weight: bold;">Kioscos</h4>
			<p class="parr" style="height: 167px; overflow: hidden;">Con la experiencia de nuestra &aacute;rea creativa, especializada en arquitectura de interiores somos capaces de desarrollar proyectos vanguardistas enfocados en el diseño.</p>
			<div style="background: black;">
				<img src="assets/img/info3.jpg" id="img3" alt="" class="img-fluid" style="opacity: 0.7;">
			</div>
		</div>
	</div>
</div>
</div>

<div class="foot align-content-center" id="ft">
	<div class="tittle" style="padding-top: 90px !important;">
		<div style="color: #fff;">
			NUESTRO PROCESO
		</div>
		<img src="assets/img/banner.png" class="img-fluid" alt="Banner">
	</div>
	<div class="container">
		<div>
			<div class="row hexD">
				<div class="col-lg-4 col-md-12">
					<img src="assets/img/r1.png" onclick="chFrase(1)" class="img-fluid bot" height="250">
				</div>
				<div class="col-lg-4 col-md-12 pdimg">
					<img src="assets/img/r2.png" onclick="chFrase(2)" class="img-fluid bot" height="250">
				</div>
				<div class="col-lg-4 col-md-12 pdimg">
					<img src="assets/img/r3.png" onclick="chFrase(3)" class="img-fluid bot" height="250">
				</div>
			</div>
		</div>
	</div>
	
	<div class="tittle">
		<div style="color: #fff;
			margin-top: 0 !important;
			font-size: 20px !important;
			margin-left: 10%;	
			margin-right: 10%;
			text-align: center;
			padding-top: -20px !important;">
			<hr style="

			margin-left: 15%;
			margin-right: 15%;
			background: #CBCBCB;
			border: 0.25px #CBCBCB solid
			">
			<span id="frase">
			Reuni&oacute;n con el cliente para entender lo que necesita y poder ofrecerle lo que tiene en mente</span>
		</div>
	</div>
</div>

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
	font-weight: bold;" class="cont">Email:</span> <a href="mailto:hablemos@punto-comercial.com" 
	class="hr">hablemos@punto-comercial.com</a></span>
	<hr style="
	padding-left: 0 !important;
	padding-right: 0 !important;
	padding-top: 0 !important;
	padding-bottom: 30px !important;
	margin: 0 !important;">
</div>
<div style="
	background: #CDCDCD;
	height: 50px;
	margin: 0 !important;
	padding: 0 !important;" id="banft">


<div class="container">
	<div class="row" style="padding: 10px;">
		<duv class="col-lg-10 col-sm-12">Todos los derechos reservados 2018</duv>
		<duv class="col-lg-2 col-sm-12" id="redes">
			<a href="#"><img src="assets/img/f.png" alt="" class="img-fluid" style="height: 20px; padding-left: 25px;"></a>
			<a href="#"><img src="assets/img/i.png" style="height: 20px; padding-left: 25px;" class="img-fluid" alt=""></a>
		</duv>
	</div>
</div>
</div>

</div>


<script>


	function sleep(ms) {
	  return new Promise(resolve => setTimeout(resolve, ms));
	}

	async function demo(fr) {
	  $("#frase").fadeOut(100);
	  await sleep(100);
	  chFrase2(fr);
	  $("#frase").fadeIn(1000);
	}


	function chFrase(num) {
		switch(num){
			case 1:
		        demo("Frase 1");
		        break;
		    case 2:
		        demo("Frase 2");
		        break;
	        case 3:
		        demo("Frase 3");
		        break;
			}
	}

	function chFrase2(frase) {
		$("#frase").html(frase);
	}

	$(document).ready(function (argument) {
		

		$("#img1").mouseover(function () {
			$("#img1").css("opacity", 1);
		}).mouseout(function () {
			$("#img1").css("opacity", 0.7);
		});
		$("#img2").mouseover(function () {
			$("#img2").css("opacity", 1);
		}).mouseout(function () {
			$("#img2").css("opacity", 0.7);
		});
		$("#img3").mouseover(function () {
			$("#img3").css("opacity", 1);
		}).mouseout(function () {
			$("#img3").css("opacity", 0.7);
		});
		$("#inicio").addClass("act");

	});
	
</script>


    <script>
  		$(".flexslider").mouseover(function () {
  			if(screen.width < 720){
  				$(".flex-direction-nav").css("display", "none");
  			}
  		});
    </script>

</body>
</html>
</nav>
	