
<?php
require_once('requires.php');
session_start();
$_SESSION['numero_empresa'] = 99;
$conexion = new Conexion();
$conexion->selecciona_base_datos();
$link = $conexion->link;

$ruta_base = './sistema/';

$fondo_index = new Fondo_Index($link);
$resultado_fondo_index= $fondo_index->obten_registros_activos('fondo_index');
$reguistros_fondo_index = $resultado_fondo_index['registros'];
$titulo_fondo_index =$reguistros_fondo_index[0]['fondo_index_descripcion'];
?>

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
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
	<link id="scrollUpTheme" rel="stylesheet" href="css/themes/tab.css">
	<!-- Scroll master -->
    <link rel="stylesheet" href="css/labs.css">

        
</head>
<body id="top">
	<header id="menu">
		<section id="logo">
			<a href="#top"><img src="img/logo-shifra.svg"></a>
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
							<li class="desactive"><a href="#servicios">SERVICIOS</a></li>
							<!-- <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >SERVICIOS <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Masajes</a></li>
									<li><a href="#">Servicio de spa</a></li>
									<li><a href="#">tratamientos faciales</a></li>
									<li><a href="#">Etc...</a></li>
								</ul>
							</li> -->
							<li><a class="desactive" href="#promociones">PROMOCIONES</a></li>
							<li><a class="desactive" href="#citas">CITAS</a></li> 
							<li><a class="desactive" href="#ubicacion">UBICACION</a></li>
		
						</ul>
					</div>
				</div>
			</div>
		</nav> 
	</header>
	<!-- AQUI VA EL JUMBOTRON -->
	<section id="inicio">

			  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel1" data-slide-to="1"></li>
			      <li data-target="#myCarousel1" data-slide-to="2"></li>
			      <li data-target="#myCarousel1" data-slide-to="3"></li>
			    </ol>
			    <div class="carousel-inner">
                    <div class="item active imagen_inicio" style="background-image: url('img/home/spa.jpg');">
                    </div>
                    <div class="item imagen_inicio" style="background-image: url('img/home/spa2.jpg');">
                    </div>
                    <div class="item imagen_inicio" style="background-image: url('img/home/spa_inicio.jpg');">
                    </div>
                    <div class="item video_inicio">
				      <video class="img-responsive center-block fondocss"  loop="loop" autoplay="autoplay">
				        <source src="video/home.mp4" type="video/mp4">
				      </video>
				    </div>
        		</div>
			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			    <div class="contenido_inicio">
					<h1>BIENVENIDOS</h1><br>
					<img src="img/logo_negro.svg">
				</div>
				<div class="icono_ajenda"><img src="img/agenda-de-contactos.svg"><h4>¡Ajenda tu cita!</h4></div>
			  </div>
	
		<!-- <video class="fondocss" loop="loop" autoplay="autoplay" >
			<source src="video/1.mp4" type="video/mp4">
		</video> -->
				
		<!-- <div class="container-fluid descripcion_inicio">
			<div class="row">
			    <div class="col-sm-3 seccion">nosotros</div>
			    <div class="col-sm-3 seccion">nosotros</div>
			    <div class="col-sm-3 seccion">nosotros</div>
			    <div class="col-sm-3 seccion">nosotros</div>
		  	</div>
		</div> -->
		<script type="text/javascript">
			$('#myCarousel1').on('slid.bs.carousel', function (e) {
			   let elemento = $('#myCarousel1 .item.active video').first();
			   if (elemento.prop("tagName") == "VIDEO") {
			     elemento.get(0).play();
			   }
			});

			$('#myCarousel1').bind('slide.bs.carousel', function (e) {  
			   let elemento = $('#myCarousel1 .item.active video').first();
			   if (elemento.prop("tagName") == "VIDEO") {
			     elemento.get(0).pause();
			   }
			});
		</script>
	</section>
	<section id="nosotros">
		<section class="nosotros_seccion1">
			<div class="contenido_nosotros">
				<h1>PLACER</h1>
				<p>sensacion de gozo o satisfacción que experimentamos al hacer o percibir cosas que nos agradan
				</p>
				<h2>PLACER es <strong>Shifra SPA</strong></h2>
			</div>
		</section>
		<section class="descripcion_nosotros">
			<img src="img/logo_blanco.png">
			<p>Es un espacio de relajación de alto nivel, vanguardista y con personal altamente capacitado. Dicho conjunto crea una experiencia única de emociones y sentimientos, desde el momento de la deliciosa llegada a SHIFRA, hasta la deliciosa despedida y un seguimiento de su terapia sumamente agradable, generando así, un lugar muy confortable y especial para Ti.</p>
		</section> 
	</section>
	<section id="servicios">
		<div class="seccion_1_servicios">
			<div class="txt_servicios">SERVICIOS</div>
				<ul id="flexiselDemo2">
				    <li>
				    	<div class="contenedor_ser" style="background-image: url(img/servicios/masaje.jpg);">
					    	<h2>MASAJE</h2>
					    	<img src="img/logo_blanco.png">
						</div>
				    </li>
				    <li>
				    	<div class="contenedor_ser" style="background-image: url(img/servicios/barberia.jpg);">
				    		<h2>BARBERIA</h2>
				    		<img src="img/logo_blanco.png">
						</div>
					</li>
				    <li>
				    	<div class="contenedor_ser" style="background-image: url(img/servicios/facial.jpg);">
				    		<h2>FACIAL</h2>
				    		<img src="img/logo_blanco.png">
				    	</div>
				    </li>
				    <li>
				    	<div class="contenedor_ser" style="background-image: url(img/servicios/pedicure.jpg);">
				    		<h2>PEDICURE</h2>
				    		<img src="img/logo_blanco.png">
				    	</div>
				    </li>
				    <li>
				    	<div class="contenedor_ser" style="background-image: url(img/servicios/reductivo.jpg);">
				    		<h2>REDUCTIVO</h2>
				    		<img src="img/logo_blanco.png">		
				    	</div>
				    </li>
				    <li>
				    	<div class="contenedor_ser" style="background-image: url(img/servicios/otros.jpg);">
				    		<h2>OTROS</h2>
				    		<img src="img/logo_blanco.png">
				    	</div>
				    </li>
				</ul>
		</div>
		<div class="seccion_2_servicios">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			    <h1>SERVICIO 1</h1>
			      <img style="background-image: url(img/shutterstock_673959856.jpg);" alt="Los Angeles">
			      
			    </div>

			    <div class="item">
			   	<h1>SERVICIO 2</h1>
			      <img style="background-image: url(img/shutterstock_421394743.jpg);"  alt="Chicago">
			      
			    </div>

			    <div class="item">
			   	 <h1>SERVICIO 3</h1>
			      <img style="background-image: url(img/shutterstock_74524267.jpg);" alt="New York">
			     
			    </div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>	
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</section>
	<section id="citas">
		<div class="container-fluid descripcion_inicio">
			<div class="row">
			    <div class="col-sm-12 col-md-6 citas_logo">
			    	
			    </div>
			    <div class="col-sm-12 col-md-6 citas_formulario">
			    	<h1><strong>PROGRAMA</strong> TU CITA</h1>
			    	<img src="img/logo_negro.svg">
			    	<form>
			    	  <div class="form-group">
					    <label for="exampleInputEmail1">Nombre</label>
					    <input type="txt" class="form-control" id="exampleInputName1" placeholder="Enter name">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  </div>				
					  <div class="form-group">
					    <label for="exampleTextarea">Escribe tu preguta.</label>
					    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary">Enviar</button>
					  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal_formulario">completar cita</button>
					</form>
			
	
					<!-- Modal -->
					<div class="modal fade" id="Modal_formulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h6 class="modal-title" id="exampleModalLabel"><strong> Vive la experiencia en <img src="img/logo_blanco.png"></strong> <br>¡Agenda tu cita! </h6>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<div class="row">
					      		<div class="col-sm-12">
					      			<div class="form-group">
							    		<label for="exampleInputEmail1">Nombre</label>
							    		<input type="txt" class="form-control" id="exampleInputName1" placeholder="Enter name">
							  		</div>
							  	</div>
							  	<div class="col-sm-12">
							  		<div class="form-group">
						    			<label for="exampleInputEmail1">Email</label>
						   				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						    			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							  		</div>
							  	</div>
							  	<div class="col-sm-12">				
							  		<div class="form-group">
							    		<label for="exampleTextarea">Escribe tu preguta.</label>
							    		<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
							  		</div>
							  	</div>
      							<div class="col-sm-12">
							        <div class="form-group">
							          <label><strong>Servicios:</strong></label>
							          <select name="booking_treatment" class="form-control" required="" aria-required="true">
							            <option value="">-- seleccionar --</option>
							            <option>Masajes</option>
							            <option>Servicios de spa</option>
							            <option>Tratamientos faciales</option>
							            <option>Faciales orgánicos</option>
							            <option>Aparatología de vanguardia</option>
							            <option>Tratamientos corporales</option>
							            <option>Corporales con aparatología</option>
							            <option>Estética</option>
							            <option>Barbería</option>
							            <option>Depilación con cera</option>
							            <option>Paquete 1</option>
							            <option>Paquete 2</option>
							            <option>Paquete 3</option>
							          </select>
							        </div>
							    </div>
						        <div class="col-sm-12">
						          <div class="form-group"  id='dia'>
						            <label><strong>Día:</strong></label>
						            <input type="text" placeholder="Dia" class="form-control date-picker hasDatepicker" name="booking_arrival_date" required="" aria-required="true" id="dp1525801322846">
						          </div>
						        </div>
						        <div class="col-sm-12">
							        <div class="form-group" id='hora'>
							          <label><strong>Hora:</strong></label>
							          <input type="text" placeholder="Hora" class="form-control time-picker ui-timepicker-input error" name="booking_time" required="" aria-required="true" autocomplete="off" aria-invalid="true"><label id="booking_time-error" class="error" for="booking_time">This field is required.</label>
							        </div>
								</div>
							    <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <button type="button" class="btn btn-primary">Save changes</button>
							    </div>
					        </div>
					  	</div>
					</div>	
			    </div>
		  	</div>
		</div>
	</section>
	<section id="instalaciones">
		<div class="txt_instalaciones">INSTALACIONES</div>
		<ul id="flexiselDemo3">
			contenedor_inst
			<li><div data-toggle="modal" data-target="#exampleModal" class="contenedor_inst" style="background-image: url(img/instalaciones/barberia.JPG);"><div class="sombreado_galeria_instalaciones"><img src="img/lupa-con-un-ojo-blanco.svg"></div></div></li>
		    <li><div class="contenedor_inst" style="background-image: url(img/instalaciones/recepcion.JPG);"><div class="sombreado_galeria_instalaciones"><img src="img/lupa-con-un-ojo-blanco.svg"></div></div></li>

		    <li><div class="contenedor_inst" style="background-image: url(img/instalaciones/spa.JPG);"><div class="sombreado_galeria_instalaciones"><img src="img/lupa-con-un-ojo-blanco.svg"></div></div></li>
		    <li><div class="contenedor_inst" style="background-image: url(img/instalaciones/vestidores.JPG);"><div class="sombreado_galeria_instalaciones"><img src="img/lupa-con-un-ojo-blanco.svg"></div></div></li>
		    <li><div class="contenedor_inst" style="background-image: url(img/instalaciones/belleza.JPG);"><div class="sombreado_galeria_instalaciones"><img src="img/lupa-con-un-ojo-blanco.svg"></div></div></li>
		    <li><div class="contenedor_inst" style="background-image: url(img/instalaciones/otros.JPG);"><div class="sombreado_galeria_instalaciones"><img src="img/lupa-con-un-ojo-blanco.svg"></div></div></li>
		</ul>
		<!-- Modal -->
		<div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg"  role="document">
		    <div class="modal-content">
		      <div class="modal-body">
		      	<div id="myCarousel2" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <div class="carousel-inner">
                    <div class="item active imagen_inicio" style="background-image: url('img/instalaciones/barberia.JPG');">
                    </div>
                    <div class="item imagen_inicio" style="background-image: url('img/instalaciones/belleza.JPG');">
                    </div>
                    <div class="item imagen_inicio" style="background-image: url('img/instalaciones/recepcion.JPG');">
                    </div>
        		</div>
			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>
		      </div>
		    </div>
		  </div>
		</div>	                 
	</section>
	<section id="promociones">
		<div class="txt_promociones">PROMOCIONES</div>
		<ul id="flexiselDemo4">
		    <li><div class="contenedor_promo" style="background-image: url(img/promociones/1.jpg);"></div></li>
		    <li><div class="contenedor_promo" style="background-image: url(img/promociones/2.jpg);"></div></li>
		    <li><div class="contenedor_promo" style="background-image: url(img/promociones/3.jpg);"></div></li>
		    <li><div class="contenedor_promo" style="background-image: url(img/promociones/4.jpg);"></div></li>
		    <li><div class="contenedor_promo" style="background-image: url(img/promociones/5.jpg);"></div></li>
		    <li><div class="contenedor_promo" style="background-image: url(img/promociones/6.jpg);"></div></li>
		 </ul>
	</section>
	<section id="ubicacion">
		<div class="txt_ubicacion">UBICACION</div>
		<div class="ubicacion_mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d466.4959561678693!2d-103.41198747623476!3d20.711538246202448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af03b8d9c2b5%3A0xba20d3c808e05657!2sShifra+Spa!5e0!3m2!1ses!2smx!4v1525540080187" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>
	
	<footer id="footer">
		<div class="container-fluid descripcion_inicio">
			<div class="row">
			    <div class="col-md-3 col-sm-6 col-xs-12 ft_logo">
			    	<img src="img/logo_blanco.png">
			    </div>
			    <div class="col-md-3 col-sm-6 col-xs-6 ft_menu">
			    	MENÚ
			    	<hr>
			    	<ul>
			    		<li>Nosotros</li>
			    		<li>Servicios</li>
			    		<li>Promociones</li>
			    		<li>Citas</li>
			    		<li>Ubicación</li>
			    	</ul>
			    </div>
			    <div class="col-md-3 col-sm-6 col-xs-6 ft_mapa">
			    	MAPA
			    	<hr>
			    	<ul>
			    		<li>Aviso de privacidad</li>
			    		<li>Politicas de Uso</li>
			    		<li>Terminos & condiciones</li>
			    	</ul>
			    </div>
			    <div class="col-md-3 col-sm-6 col-xs-12 ft_contacto">
			    	<p>centro comercial Andares 1er Nivel a un costado de Liverpool
			    	<strong>Tel. 01(33)3611-3310 y 3611-3313</strong> hola@shifraspa.com</p>
			    	<div class="ft_iconos_redes_sociales">
						<img src="img/svg/icono_facebook.svg">
						<img src="img/svg/icono_twitter.svg">
						<img src="img/svg/icono_instagram.svg">
						<img src="img/svg/icono_gmail.svg">			
					</div>
			    </div>
		  	</div>
		</div>
		<div class="ft_pie_pagina">Todos los Derechos Reservados ©2018 <strong>Shifa Spa</strong></div>
	</footer>
	<a href="#top" class="to-top"><i class="glyphicon glyphicon-chevron-up"></i></a>
	<style type="text/css">
		.to-top{
			position: fixed;
			bottom: 20px;
			right: 20px;
			background: #4c0500;
			color:#fff;
			padding: 9px 12px;
			border-radius: 50%;

		}
		.to-top:hover{
			background: #a28356;
			color:#4c0500;
		}
	</style>
	
<script src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<!-- datetimepicker -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap-datetimepicker.es.js"></script>
<!-- fin datetimepicker -->
<script type="text/javascript">
    $('#dia').datetimepicker({
          format: 'YYYY-MM-DD '       
    });
    $('#dia').click("DatePicker").show();
</script>
<script type="text/javascript">
	$(document).ready(function(){
		var offset = 250;
		var duration = 500;

		$(window).scroll(function(){
			if($(this).scrollTop()> offset){
				$('.to-top').fadeIn(duration);
			}else{
				$('.to-top').fadeOut(duration);
			}
		});
		$('.to-top').click(function(){
			$('body').animate({scrollTop:0},duration);
		})
	});
</script>
<script type="text/javascript" src="js/funciones.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script type="text/javascript" src="js/flexisel.js"></script>
</body>
</html>