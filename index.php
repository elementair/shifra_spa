<!DOCTYPE html>
<html lang="es-Mx">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
	<title>Shifra Spa</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>
	<header id="menu">
		<section id="logo">
			<img src="img/logo-shifra.svg">
			<div class="iconos_redes_sociales">
				<img src="img/svg/icono_facebook.svg">
				<img src="img/svg/icono_twitter.svg">
				<img src="img/svg/icono_instagram.svg">
				<img src="img/svg/icono_gmail.svg">							
			</div>
		</section>
		<nav id="menu_opciones" class="navbar navbar-default role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_navegacion">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>	
						<span class="icon-bar"></span>						
						<span class="icon-bar"></span>
					</button>
					
					<!-- Menu -->
					<div class="collapse navbar-collapse" id="menu_navegacion">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#nosotros">NOSOTROS</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >SERVICIOS <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Masajes</a></li>
									<li><a href="#">Servicio de spa</a></li>
									<li><a href="#">tratamientos faciales</a></li>
									<li><a href="#">Etc...</a></li>
								</ul>
							</li>
							<li><a href="#promociones">PROMOCIONES</a></li>
							<li><a href="#citas">CITAS</a></li> 
							<li><a href="#ubicacion">UBICACION</a></li>
		
						</ul>
					</div>
				</div>
			</div>
		</nav> 
	</header>
	<!-- AQUI VA EL JUMBOTRON -->
	<section id="inicio">
		<!-- <video class="fondocss" loop="loop" autoplay="autoplay" >
			<source src="video/1.mp4" type="video/mp4">
		</video> -->
		<div class="contenido_inicio">
			<h1>BIENVENIDOS</h1><br>
			<img src="img/logo_negro.svg">
		</div>
		<div class="container-fluid descripcion_inicio">
			<div class="row">
			    <div class="col-sm-3 seccion">nosotros</div>
			    <div class="col-sm-3 seccion">nosotros</div>
			    <div class="col-sm-3 seccion">nosotros</div>
			    <div class="col-sm-3 seccion">nosotros</div>
		  	</div>
		</div>
	</section>
	<section id="nosotros">
		<div class="contenido_nosotros">
			<h1>PLACER</h1>
			<p>sensacion de gozo o satisfacción que experimentamos al hacer o percibir cosas que nos agradan
			</p>
			<h2>PLACER es <strong>Shifra SPA</strong></h2>
		</div>
		<div class="descripcion_nosotros">
			<img src="img/logo_blanco.png">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</section>
	<section id="servicios"></section>
	<section id="promociones"></section>
	<section id="citas"></section>
	<section id="ubicacion"></section>
	<footer id="footer">
		<p>Todos los Derechos Reservados ©2018 Shifa Spa</p>
	</footer>

	<script src="js/jquery.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>