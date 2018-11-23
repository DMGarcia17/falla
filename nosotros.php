<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quienes Somos</title>
	<?php
		require_once 'templates/head.php';
	?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<script src="assets/js/jquery.js"></script>	
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
	$(document).ready(function () {
		$("#quienes").css("color", "#fa0573");
		$("#quienes").css("font-weight", "bolder");
		if(screen.width < 720){
			$("#branbd").css({"height": "50px", "width":"225px", "padding-top":"15px"});
			$("#q").removeClass("qui");
			$(".cont").css("padding-left", "5%");
		}
	});
</script>

<?php
require_once 'templates/nav.php';
?>


<div style="padding-top: 76px; width: auto; overflow: hidden; text-align: justify;">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="tittle">
				<div style="color: #666666;">
					<h1>QUIÉNES SOMOS</h1>
				</div>
				<img src="assets/img/banner.png" class="img-fluid" alt="Banner">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-5">
			<img src="assets/img/quienes2.jpg" class="img-fluid" alt="">
		</div>
		<div class="col-lg-7">
			<div class="container qui" id="q">
				<br>
				<h4>Quienes somos</h4>
				<span>
					Somos un socio de servicios  de diseño y producción de experiencias en el punto de venta. Ofrecemos proyectos en cualquier entorno de punto de venta. Trabajamos desde la idea creativa a la implementación, pasando por la solución técnica y la producción. Nuestra experiencia como asesores de multiples emprendedores y marcas regionales, ha basado, configurado y esta constantemente reinventando nuestra metodologia de trabajo. Somos eficaces trabajando bajo presión, cumplimos con tiempos de entregas breves, 
					somos flexibles en el desarrollo y proactivos  frente a las sugerencias     
				</span>
				<span>
					<br><br>
					<h4>Valores:</h4>
					<p style="margin: 0 !important;">
						<p class="font-weight-bold" style="margin: 0 !important;">* Creatividad: </p>
						Equipo de diseñadores con ideas innovadoras, jóvenes, con estilo y buen gusto.
					</p>
					<p style="margin: 0 !important;">
						<p class="font-weight-bold" style="margin: 0 !important;">* Criterio: </p>
						Una manera de hacer consulting. Una filosofía. Una forma 
		   				de trabajar ligada a la experiencia de más de 10 años.
					</p>
					<p style="margin: 0 !important;">
						<p class="font-weight-bold" style="margin: 0 !important;">* Independencia: </p>
						Producción interna, Equipos propios y colaboradores puntuales. Más opciones. Más flexibles. Mejores precios.
					</p>
					<p style="margin: 0 !important;">
						<p class="font-weight-bold" style="margin: 0 !important;">* Compromiso:</p>Fidelidad. Rigor. Transparencia.
					</p>
				</span>
				<span>
					<h4>Que hacemos:</h4>
					Asesoria - Diseño - Producción - Coordinación  -  Montaje
				</span>
				<span>
					<br><br>
					<h4>Aplicado a:</h4>
					*Conceptos de marca <br>
					*Consultoria en el punto de venta <br>
					*Marterial POP <br>
					*Mobiliario corporativo <br>
					*Espacios promocionales <br>
					*Stands  y kioscos <br>
					*Imagen corporativa
				</span>
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
			height: 70px;
			width: 100%;" id="banft">
			<div class="container" style="width: 100% !important;">
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
</div>

</body>
</html>