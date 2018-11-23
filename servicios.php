<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		require_once 'templates/head.php';
	?>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>Servicios</title>
</head>
<body>
<script src="assets/js/jquery.js"></script>	
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<?php
require_once 'templates/nav.php';
?>
<script>
	$(document).ready(function () {
		$("#servicios").css("color", "#fa0573");
		$("#servicios").css("font-weight", "bolder");
		if(screen.width < 720){
			$("#branbd").css({"height": "50px", "width":"225px", "padding-top":"15px"});
			$(".cont").css("padding-left", "5%");
		}
	});
</script>
<div style="padding-top: 70px; width: auto; overflow: hidden; text-align: justify;">
	<div class="container">
		<div class="tittle">
			<div style="color: #666666;">
				Servicios
			</div>
			<img src="assets/img/banner.png" class="img-fluid" alt="Banner">
		</div>
		<div class="row" style="text-align: justify !important;">
			<div class="col-lg-4 col-md-12 col-sm-12">
				<img src="assets/img/punto.png" alt="" style="height: 20% !important;" class="img-fluid">
				<br><br>
				<h4>Servicio</h4>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, dolor, ipsa? Saepe blanditiis ipsa quia ullam tempore delectus iste repellat, culpa fugit natus quas nostrum nisi numquam provident velit voluptatibus.
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<img src="assets/img/punto.png" alt="" style="height: 20% !important;" class="img-fluid">
				<br><br>
				<h4>Servicio</h4>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab debitis optio nemo laborum iusto blanditiis excepturi, minima, voluptatibus recusandae minus, officia inventore! Molestiae qui corrupti harum a sint magnam enim.
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<img src="assets/img/punto.png" alt="" style="height: 20% !important;" class="img-fluid">
				<br><br>
				<h4>Servicio</h4>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum perspiciatis quas beatae rerum a saepe facilis officia repudiandae sed assumenda, recusandae itaque vel aliquid error rem voluptatem at vero, earum.
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-12 col-sm-12">
				<img src="assets/img/punto.png" alt="" style="height: 20% !important;" class="img-fluid">
				<br><br>
				<h4>Servicio</h4>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nesciunt iure cupiditate in molestiae facere quos quas odit ea aut, neque nihil dignissimos, accusamus ab! Et nihil iste, voluptate reprehenderit!
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<img src="assets/img/punto.png" alt="" style="height: 20% !important;" class="img-fluid">
				<br><br>
				<h4>Servicio</h4>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde illum facere, tenetur itaque, facilis iusto suscipit cum nemo recusandae nam ducimus incidunt amet earum, animi consequuntur culpa distinctio eveniet reprehenderit?
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<img src="assets/img/punto.png" alt="" style="height: 20% !important;" class="img-fluid">
				<br><br>
				<h4>Servicio</h4>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi quibusdam voluptatum repudiandae iste facere, fugiat consequatur quod deleniti, accusamus autem commodi quisquam deserunt a numquam! Ullam reiciendis, delectus quas voluptatem.
			</div>
		</div>
	</div>
	<div style="height: 200px; background: #CDCDCD;">
		<div class="row">
			<div class="col-lg-12 col md-12 col-sm-12 text-center" style="">
				<a href="contac.php">
					<button style="margin-top: 81px;margin-bottom: 81px;" class="btn btna">
						SOLICITAR COTIZACI&Oacute;N <i class="fas fa-angle-right"></i>
					</button>
				</a>
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