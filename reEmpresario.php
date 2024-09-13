<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Registro - Empresario</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload" style= "background-image: url('images/fondoEquipo.jpg');">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.php">Tecmilenio</a> 2024</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li>
								<a href="#" class="icon solid fa-angle-down">Informacion</a>
								<ul>
									<li><a href="equipo.php">Nuestro Equipo</a></li>
								</ul>
							</li>
							<li><a href="inicioSesion.php" class="button">Iniciar Sesión</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container medium" style= "background-image: url('images/fondoEquipo.jpg');">
					<header>
						<h2>Registro de empresario</h2>
						<p>Para garantizar la calidad y los estándares de tu empresa, es fundamental que cumpla con los requisitos de Talento Conectado. Buscamos asegurarnos de que ofrezcas un trato adecuado a los talentos y mantengas el nivel de profesionalismo necesario.</p>
					</header>
					<div class="box" style= "background-image: url('images/fondoEquipo.jpg');">
						<form method="post" action="mandarRegistroEmpresario.php" target="_blank">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-6 col-12-mobilep">
									<input type="text" name="name" id="name" value="" placeholder="Nombre del responsable" />
								</div>
								<div class="col-6 col-12-mobilep">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								</div>
								<div class="col-12 col-12-mobilep">
									<input type="tel" name="number" id="number" value="" placeholder="Número de Teléfono" />
								</div>
								<div class="col-12">
									<input type="text" name="subject" id="subject" value="" placeholder="Direccion de la empresa" />
								</div>
								<div class="col-12">
									<textarea name="message" id="message" placeholder="Por que quisieras colaborar con Talento Conectado?" rows="6"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" value="Mandar registro" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</section>
				

			<!-- Footer -->
				<footer id="footer" >
					<ul class="icons">
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Talento Conectado. Todos los derechos reservados.</li>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>