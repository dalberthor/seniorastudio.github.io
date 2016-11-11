<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Servicios de Internet</title>
	<meta name="description" content="Diseño web de calidad">
	<meta name="keywords" content="web sites, diseño web de calidad, diseño web culiacan, diseño web uruapan">
	<meta name="author" content="Dalberto seniorastudio.com and Codrops">
	<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicons/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicons/manifest.json">
	<link rel="shortcut icon" href="favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#603cba">
	<meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
	<meta name="msapplication-config" content="favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/all.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>



	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/cardio.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 




	<script>
	 var x = 0;
	$(document).ready(function(){
	    $("#contactar").click(function(){
	        $("#Formulario").toggle("slow" );
	    		if(x==0){
	   		 	$("#contactar").val("Cerrar");
	   		 	x=1;
	   		 }
	   		 else{
	 			 $("#contactar").val("Envianos un mensaje");
	 			 x=0;
	   		 }
	    });
	    
	     $("#contactar1").click(function(){
	        $("#Formulario").toggle("slow" );
	    		if(x==0){
	   		 	$("#contactar").val("Cerrar");
	   		 	x=1;
	   		 }
	   		 else{
	 			 $("#contactar").val("Envianos un mensaje");
	 			 x=0;
	   		 }
	    });
	    
	});
	</script>

</head>
<body>
<div id="wrapper">



		<header id="header">
			<div class="container">
				<div class="logo"><a href="#"><img src="images/seniorastudio.svg"   width="90%" alt=""></a></div>
				<nav id="nav">
					<div class="opener-holder">
						<a href="#" class="nav-opener"><span></span></a>
					</div>
					<a href="index.html#contacto" class="btn btn-primary rounded">Contacto</a>
					<div class="nav-drop">
						<ul>
							<li><a href="#inicio">Inicio</a></li>
							<li><a href="#quienesSomos">Quienes Somos</a></li>
							<li><a href="#precios">Precios</a></li>
							<li><a href="#servicios">Servicios</a></li>
						</ul>
						<!--<div class="drop-holder visible-sm visible-xs">
							<span>Siguenos</span>
							<ul class="social-networks">
								<li><a class="fa fa-github" href="#"></a></li>
								<li><a class="fa fa-twitter" href="#"></a></li>
								<li><a class="fa fa-facebook" href="#"></a></li>
							</ul>
						</div>-->
					</div>
				</nav>
			</div>
		</header>
 

<a name="inicio"></a>
		<header id="intro">
			<div class="containerX">
				<div class="table">
					<div class="header-text">
						<div class="row">
							<div class="col-md-12 text-center">
								<h3 class="light white">La mejor tarjeta de presentación para tu negocio es tu propio espacio en internet.</h3><br>
								<h1 class="white typed">Hablanos de tu idea</h1>
								<span class="typed-cursor">|</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>






 

	<a name="quienesSomos"></a>
	<section class="main">
		<div class="container">
			<div id="cta">
				<input type="button" id="contactar" class="btn btn-primary rounded" value="Envianos un mensaje"></a>		
				</div>
	
				<div style="display:none" id="Formulario" >
					<h2>Escríbenos</h2>
					
	<form action="contacto/validar.php" method="post" >
		<div ><label for="nombre">Nombre: </label><input class="form-control" type="text" name="nombre" id="nombre" required placeholder="Tu nombre" /></div>
		<div ><label for="email">Email: </label><input class="form-control" type="email" name="email" id="email" required placeholder="tucorreo@gmail.com" /></div>
		<div ><label for="telefono">Telefono:</label><input class="form-control" type="text" name="telefono" id="telefono" required placeholder="telefono: 7777777" /></div>
		<div ><label for="mensaje">Mensaje: </label><textarea class="form-control" required name="mensaje" id="mensaje" placeholder="Tu mensaje aqui" ></textarea></div>
		<?php
			require_once('contacto/recaptchalib.php'); 
			$pubkey = "6Lfn3AcTAAAAAOMRrxjHZZB68w0jEy6F2I1IparA"; 
			echo "<center>" . recaptcha_get_html($pubkey)."</center>"; 
		?>
		<input type="submit" value="enviar" class="btn btn-primary rounded" style="margin: 0 auto;"> 
	</form>
		
		
		
	
					
				</div>
	
	
			<div class="row">
				<div class="text-box col-md-offset-1 col-md-10">
					<h2>Quienes Somos</h2>
					<p>Somos una empresa dedicada al desarrollo de páginas web económicas simplemente porque un pyme o un autónomo no necesitan paginas web extensas, y al ser más reducidas se reduce también su precio significativamente. </p>
					
<? 
$archivo = "visitas.txt"; 
$abre = fopen($archivo, "r"); 
$total = fread($abre, filesize($archivo)); 
fclose($abre); 
$abre = fopen($archivo, "w"); 
$total = $total + 1; 
$grabar = fwrite($abre, $total); 
fclose($abre); 
?>



					<div class="social-placeholder">Visitas:   
					<? echo $total; ?> 
					</div>
				</div>
			</div>
		</div>

		<div class="block-frame">
			<ul class="cta-list">
		 
				<li>
					<a href="https://www.facebook.com/Seniorastudio/" class="btn btn-blue"><i class="fa fa-facebook"></i> Facebook</a>
					<p> Siguenos en facebook</p>
				</li>
			</ul>
		</div>
	</section>

	<a name="servicios"></a>
	<section class="area">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2 class="visible-xs visible-sm text-primary">&lt;Programación de calidad&gt;</h2>
					<ul class="visual-list">
						<li>
							<div class="img-holder">
								<img src="images/sitio.svg" width="110" alt="">
							</div>
							<div class="text-holder">
								<h3>Creamos tu sitio</h3>
								<p>No busque más, comunicate con nosotros de Lunes a Domingo y te haremos una cotización después de saber sus necesidades y hacer un análisis completo de mercado en internet. </p>
							</div>
						</li>
						<li>
							<div class="img-holder">
								<img class="pull-left" src="images/graph-03.svg" width="90" alt="">
							</div>
							<div class="text-holder">
								<h3>Adaptable</h3>
								<p>Nuestras paginas web están preparadas para funcionar de forma óptima en dispositivos móviles, Iphone y Ipad.  No usamos lenguajes de programación obsoletos. </p>
							</div>
						</li>
						<li>
							<div class="img-holder">
								<img src="images/graph-04.svg" height="84" alt="">
							</div>
							<div class="text-holder">
								<h3>Integración de SEO</h3>
								<p>Realizamos ajustes técnicos que una página web necesita para que los buscadores como Google, Yahoo, Bing, entre otros posicione efectivamente tu sitio.</p>
							</div>
						</li>
						<li>
							<div class="img-holder">
								<img src="images/graph-01.svg" height="71" alt="">
							</div>
							<div class="text-holder">
								<h3>Porque con nosotros</h3>
								<p>Trabajo garantizado y tu no tendrás que perder ni tu tiempo ni tu dinero en experimentos. </p>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-7">
					<div class="slide-holder">
						<h2 class="hidden-xs hidden-sm text-primary">&lt;Ponte en linea desde hoy&gt;</h2>
						<div class="img-slide scroll-trigger"><img src="images/img-01.png" height="624" width="1184" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="main">
		<div class="container">
		 
		</div>
	</section>

	<a name="precios"></a>
	<section class="visual-container">
	 
		<div class="visual-area">
			<div class="container">
				<h2>Precios</h2>
				<div class="pricing-tables">
					

					<div class="plan">
		                <div class="head">
		                    <h3>Económico</h3>
		                </div>
		                <div class="price">
		                    <span class="price-main"><span class="symbol">$</span>1,800</span>
		                    <!-- <span class="price-additional">per month</span>-->
		                </div>
		                <ul class="item-list">
		                    <li>Diseño de Pagina (1 pestaña)</li>
		                    <li>Una cuenta de e-mail.</li>
		                    <li>Un formulario de contácto.</li>
		                    <li>Enlace a Redes Sociales.</li>
		                    <li>Posicionamiento SEO básico.</li>
		                     
		                </ul>
		                <!--<button type="button" class="btn btn-default rounded">Manos a la obra</button>
		                 <span class="price-additional">per month</span>-->
		            </div>

		            <div class="plan">
		                <div class="head">
		                    <h3>Básico</h3> </div>
		                <div class="price">
		                    <span class="price-main"><span class="symbol">$</span>2,150</span>
		                    <!-- <span class="price-additional">per month</span>-->
		                </div>
		                    <ul class="item-list">
		                       <li>Diseño de Pagina (2-3 pestañas)</li>
		                       <li>5 cuentas de e-mail.</li>
		                       <li>Un formulario de contácto.</li>
		                       <li>Enlace a Redes Sociales.</li>
		                       <li>Posicionamiento SEO básico.</li>
		                      
		                    </ul>
		                <!-- <button type="button" class="btn btn-default rounded">Saber más</button>
		                <span class="price-additional">per month</span>-->
		            </div>

		            <div class="plan recommended">
		                <div class="head">
		                    <h3>Profesional</h3> </div>
		                <div class="price">
		                     <span class="price-main"><span class="symbol">$</span>2500</span>
		                    <!-- <span class="price-additional">per month</span>-->
		                </div>
		                    <ul class="item-list">
		                        <li>Diseño de Pagina (4-6 pestañas)</li>
		                       <li>10 cuentas de e-mail.</li>
		                       <li>Un formulario de contácto.</li>
		                       <li>Enlace a Redes Sociales.</li>
		                       <li>Posicionamiento SEO básico.</li>
		                       <li>Galeria de imagenes o slider.</li>
		                     
		                    </ul>
  						<!-- <button type="button" class="btn btn-default rounded">Saber más</button>
		                <span class="price-additional">per month</span>-->		                
		            </div>

		            <div class="plan">
		                <div class="head">
		                    <h3>Servicios Adicionales</h3> 
		                    </div>
		                
		                	 <ul class="item-list"> 
		                	   <li>Rediseño de páginas web.</li>
		                	   <li>Posicionamiento SEO avanzado. </li>          
							   <li>Sitio web responsive.</li>
		                       <li>Gestores de contenidos.</li>
		                       <li>Perfiles sociales.</li>
		                       <li>Diseño gráfico.</li>
		                       <li>Cuentas de e-mail adicionales.</li>
		                        <li>Soporte técnico </li>
		                    </ul>   
		                <!-- <button type="button" class="btn btn-default rounded">Saber más</button>
		                <span class="price-additional">per month</span>-->
		            </div>
				</div>
				<p class="tagline" >Cada paquete incluye Dominio y Hosting después del primer año un pago mínimo anual. </p>
			</div>
			<img src="images/img-decor-03.jpg" height="1175" width="1380" alt="" class="bg-stretch">
		</div>
	</section>
	
 

<a name="contacto"></a>
		<footer id="footer">
		<div class="container">
			<div class="footer-holder">
				<div class="row">
					<div class="col-md-4">
						<div class="logo"><a href="#"><img src="images/seniorastudio.svg" alt="seniorastudio" width=200 ></a></div>
						<p>Tenemos un espacio para tu página web<br /> ponte en contacto con nosotros.</p>
						
						<a href="index.html#quienesSomos">		
						<input type="button" id="contactar1" class="btn btn-primary rounded" value="Envianos un mensaje">		
						</a>
					</div>
					<div class="col-md-2">
						
						<ul>
							<li><a href="#inicio">Inicio</a></li>
							<li><a href="#quienesSomos">Quienes Somos</a></li>
							<li><a href="#precios">Precios</a></li>
							<li><a href="#servicios">Servicios</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<div class="text-holder">
							<h4>Aquí estamos</h4>
							<h5>contacto@seniorastudio.com</h5>
							<strong class="phone"><a href="tel:6671779484">6671779484</a></strong>
							<address>Drezzo #5252 Col. Stanza Toscana, Culiacán Sinaloa.</address>
							<strong class="phone"><a href="tel:4521082949">4521082949</a></strong>
							<address>Carlos Salinas de Gortari #7 Col. San Francisco Uruapan, Uruapn Michoacán.</address>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-frame">
							<h4>Diseño de Páginas Web Profesionales y Económicas</h4>
							<p>Conecta tu negocio o sitio personal a la gran nube de internet.</p> 
							<p> Animate con un Precios y Calidad sin competencia. Garantizado y verificado. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.main.js"></script>
</body>
</html>