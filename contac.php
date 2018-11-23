<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cont&aacute;ctanos</title>
	<?php
		require_once 'templates/head.php';
	?>
</head>
<body>
<script src="assets/js/jquery.js"></script>	
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<?php
require_once 'templates/nav.php';
?>

<div id="cont" class="container" style="padding-top: 76px;">
	<div class="col-lg-12 col-md-12">
		<div class="tittle">
			<div style="color: #666666;">
				<h1>Contacto</h1>
			</div>
			<img src="assets/img/banner.png" class="img-fluid" alt="Banner">
		</div>
	</div>
	<div class="form-group">
		<form action="#">
		<div class="row">
			<div class="col-lg-3 col-md-12">
				<h5 style="font-weight: bolder; padding-top: 20px;">Escribenos</h5>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<input type="text" class="tinput" placeholder="Nombre *" required>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<input type="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" class="tinput" placeholder="Email *" required>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<input type="tel" pattern="[0-9]{8}" class="tinput" placeholder="Telefono">
					</div>
				</div>
				<br>
			</div>
			<div class="col-lg-6 col-md-12">
				<textarea name="" placeholder="Mensaje *" class="textA" rows="7" required></textarea><br>
				<br>
				<button class="btn btna enviar" id="">ENVIAR</button>
				<script type="text/javascript">
					$(document).ready(function () {
						if(screen.width > 720){
							$(".enviar").css("margin-left", "-52%");
							$("#cont").addClass("contenido");
						}else{
							$(".textA").css("margin-top", 0);
  							$("#branbd").css({"height": "50px", "width":"225px", "padding-top":"15px"});
  							$("#banft").removeClass("banft");
  							$("#banft").addClass("banft3");
						}
						$("#contacto").css("color", "#fa0573");
						$("#contacto").css("font-weight", "bolder");
					});
				</script>
			</div>
			<div class="col-lg-3 col-md-12">
				<h5 style="font-weight: bolder; padding-top: 20px;">Informaci&oacute;n de contacto</h5>
					<span><span style="color: #fa0573;
					font-weight: bold;" class="cont">Tel&eacute;fono:</span> <a href="tel:+50324347776" class="hr">+503 2434 - 7776</a></span>
					<hr style="padding: 0 !important;">
					<span><span style="color: #fa0573;
					font-weight: bold;" class="cont">Email:</span> <a href="mailto:hablemos@punto-comercial.com" 
					class="hr">hablemos@punto-comercial.com</a></span>
					<hr style="padding: 0 !important;">
			</div>
		</div>
	</form>		
	</div>
	
</div>
<div style="clear: both;"></div>

<div id="banft" class="banft">


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



</body>
</html>