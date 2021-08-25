<!DOCTYPE html>
<html lang="en">
<head>
	<title>ATM CONTAMINACION</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cryptocurrency Landing Page Template">
	<meta name="keywords" content="cryptocurrency, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="inicio/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="inicio/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="inicio/css/themify-icons.css"/>
	<link rel="stylesheet" href="inicio/css/animate.css"/>
	<link rel="stylesheet" href="inicio/css/owl.carousel.css"/>
	<link rel="stylesheet" href="inicio/css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>
.bg-orange{background-color:#ff9933!important}
    .bg-pink{background-color:#cc0033!important}
    .bg-purple{background-color:#660099!important}
    .bg-vinot{background-color:#7e0023!important}
	
	</style>
	
	<link href="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css" rel="stylesheet">
	<script src="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js"></script>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<div class="container-fluid">
			<a href="index.html" class="site-logo">
				<img src="inicio/img/logo.png" alt="">
			</a>
			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<a href="" class="user"><i class="fa fa-user"></i></a>
			<a href=" {{ route('ingreso') }}" class="site-btn">Ingresar</a>
			<nav class="main-menu">
				<ul class="menu-list">
					<li><a href="#informacion">Informacíon</a></li>
					<li><a href="#escalas">Escalas</a></li>
					<li><a href="#mapa">Mapa</a></li>
					<li><a href="#estadistica">Estadistica</a></li>
					<li><a href="#datos">Datos Historicos</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 hero-text">
					<h2>Niveles De Contaminación Y <br>Cancer De Pulmon En<span> San Juan De Pasto</span></h2>
					<h4>Datos historicos desde 2011 a 2017 y predicción del factor contaminante</h4>
					
				</div>
				<div class="col-md-6">
					<img src="inicio/img/laptop.png" class="laptop-image" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- About section -->
	<section class="about-section spad" id="informacion">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 about-text">
					<h2>Calidad del Aire</h2>
					
					<p>La ciudad de San Juan de Pasto tuvo un monitorio de la calidad del aire hasta el año 2018 donde se puede ver todas las emisiones registradas por el sistema de monitoreo y por medio de la página web SISAIRE del IDEAM estos datos quedaron almacenados para la visualización al público.</p>
					<h5>Sisaire Ideam</h5>
					<a href="http://sisaire.ideam.gov.co/ideam-sisaire-web/consultas.xhtml" class="site-btn sb-gradients sbg-line mt-5">Visitar Sisaire</a>
				</div>
			</div>
			<div class="about-img">
				<img src="inicio/img/about-img.png" alt="">
			</div>
		</div>
	</section>
	<!-- About section end -->


	<!-- Features section -->
	<section class="features-section spad gradient-bg" id="escalas">
		<div class="container text-white">
			<div class="section-title text-center">
				<h2>Escala De Calidad Del Aire</h2>
				<p>La escala para indexar la Contaminación se basa en la norma EPA de EE.UU usando la fórmula de informe Instant Cast .
				</p>
			</div>
			<div class="row ">
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-flag-alt bg-success"></i>
					<div class="feature-content">
						<h4>Bueno</h4>
						<p>La calidad del aire se considera satisfactoria y la contaminación del aire representa poco o ningún riesgo.</p>
						<p>IQA 0-50 </p>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-flag-alt bg-warning"></i>
					<div class="feature-content">
						<h4>Moderado</h4>
						<p>La calidad del aire es aceptable; sin embargo, para algunos contaminantes puede haber un problema de salud moderado para un número muy pequeño de personas que son inusualmente sensibles a la contaminación del aire.</p>
						<p>IQA 50 - 100 </p>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-flag-alt bg-orange"></i>
					<div class="feature-content">
						<h4>No es saludable para grupos que son sensibles.</h4>
						<p>Los miembros de grupos sensibles pueden experimentar efectos en la salud. El público en general no es probable que se vea afectado.</p>
						<p>IQA 100 - 150  </p>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-flag-alt bg-pink"></i>
					<div class="feature-content">
						<h4>Insalubre</h4>
						<p>Todos pueden comenzar a experimentar efectos en la salud; los miembros de grupos sensibles pueden experimentar efectos de salud más graves</p>
						<p>IQA 150 - 200  </p>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-flag-alt bg-purple"></i>
					<div class="feature-content">
						<h4>Muy poco saludable</h4>
						<p>Advertencias sanitarias de condiciones de emergencia. Existe la posibilidad que la población entera se vea afectada.</p>
						<p>IQA 200 - 300  </p>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-flag-alt bg-vinot"></i>
					<div class="feature-content">
						<h4>Peligroso</h4>
						<p>Alerta de salud: todos pueden experimentar efectos de salud más graves.</p>
						<p>IQA 300 - 500  </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- Process section -->
	<section class="process-section spad" id="mapa">
		<div class="container ">
			<div class="section-title text-center">
				<h2>Mapa de Pasto</h2>
				<p>Se presenta mapa de San Juan de Pasto divido en doce comunas  </p>
			</div>
			<div class="row  bg-success text-center">
				<div class="col-md-12 ">
					<div id='map' style='width: 100%; height: 600px;'></div>
				</div>
				<div class="col-md-12 ">
					<div id="div2" class="row text-light text-center ">
						<div class="col-md-1 bg-success">Bueno</div>
						<div class="col-md-2 bg-warning">Moderado</div>
						<div class="col-md-3 bg-orange">No es saludable para grupos sensibles</div>
						<div class="col-md-2 bg-pink">Insalubre</div>
						<div class="col-md-2 bg-purple">poco Saludable</div>
						<div class="col-md-2 bg-vinot">Peligroso</div>
					</div>

				</div>
				
			</div>
		</div>
	</section>
	<!-- Process section end -->


	<!-- Fact section -->
	<section class="fact-section gradient-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>60</h2>
						<p>PM <br> 10</p>
						<i class="ti-basketball"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>12</h2>
						<p>Comunas</p>
						<i class="ti-panel"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>2011</h2>
						<p>Inicio</p>
						<i class="ti-stats-up"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>2018</h2>
						<p>Final </p>
						<i class="ti-user"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end -->


	<!-- Team section -->
	
	<!-- Team section -->


	<!-- Review section -->
	<section class="about-section spad" id="estadistica">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 about-text">
					<h2>Grafica de barras</h2>
					
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto saepe animi aperiam sit ratione, odit consectetur voluptas minus maxime totam?</p>
					<h5>barras</h5>
					<a href="http://sisaire.ideam.gov.co/ideam-sisaire-web/consultas.xhtml" class="site-btn sb-gradients sbg-line mt-5">Visitar Sisaire</a>
				</div>
			</div>
			<div class="about-img">
				<img src="inicio/img/about-img.png" alt="">
			</div>
		</div>
	</section>
	<!-- Review section end -->


	<!-- Newsletter section -->
	<section class="newsletter-section gradient-bg" id="datos">
		<div class="container text-white">
			<div class="row">
				<div class="col-lg-7 newsletter-text">
					<h2>Datos Historicos</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet corporis sit itaque perferendis exercitationem blanditiis.</p>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->



	<!-- Blog section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 about-text">
					<h2>Datos Historicos</h2>
					
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto saepe animi aperiam sit ratione, odit consectetur voluptas minus maxime totam?</p>
					<h5>barras</h5>
					<a href="http://sisaire.ideam.gov.co/ideam-sisaire-web/consultas.xhtml" class="site-btn sb-gradients sbg-line mt-5">Visitar Sisaire</a>
				</div>
			</div>
			<div class="about-img">
				<img src="inicio/img/about-img.png" alt="">
			</div>
		</div>
	</section>
	<!-- Blog section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row spad">
				<div class="col-md-6 col-lg-3 footer-widget">
					<img src="img/logo.png" class="mb-4" alt="">
					<p>Atm contaminacion</p>
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->


				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title">Recursos</h5>
					<ul>
						<li><a href="#">Sisare</a></li>
						<li><a href="#">Siac</a></li>
						<li><a href="#">Min Ambiente</a></li>
						<li><a href="#">Ideam</a></li>
					
					</ul>
				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title"> Links</h5>
					<ul>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3 footer-widget pl-lg-5 pl-3">
					<h5 class="widget-title">Redes Sociales</h5>
					<div class="social">
						<a href="" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="" class="google"><i class="fa fa-google-plus"></i></a>
						<a href="" class="instagram"><i class="fa fa-instagram"></i></a>
						<a href="" class="twitter"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row">
					<div class="col-lg-4 store-links text-center text-lg-left pb-3 pb-lg-0">
						<a href=""><img src="img/appstore.png" alt="" class="mr-2"></a>
						<a href=""><img src="img/playstore.png" alt=""></a>
					</div>
					<div class="col-lg-8 text-center text-lg-right">
						<ul class="footer-nav">
							<li><a href="">DPA</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Privacy Policy </a></li>
							<li><a href="">support@company.com</a></li>
							<li><a href="">(123) 456-7890</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!--====== Javascripts & Jquery ======-->
	<script src="inicio/js/jquery-3.2.1.min.js"></script>
	<script src="inicio/js/owl.carousel.min.js"></script>
	<script src="inicio/js/main.js"></script>
	<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
	<script src="cssdashboard/js/pages/maps.js"></script>
    <script> 
   
     map.on('load', ()=>{
         comuna1({{$datos[1]}});
         comuna2({{$datos[2]}});
         comuna3({{$datos[3]}});
         comuna4({{$datos[4]}});
         comuna5({{$datos[5]}});
         comuna6({{$datos[6]}});
         comuna7({{$datos[7]}});
         comuna8({{$datos[8]}});
         comuna9({{$datos[9]}});
         comuna10({{$datos[10]}});
         comuna11({{$datos[11]}});
         comuna12({{$datos[12]}});
     } ); 
     </script>
</body>
</html>
