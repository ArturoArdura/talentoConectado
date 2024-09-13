<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Registro - Talento</title>
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
				<section id="main" class="container medium">
					<header>
						<h2>Registro de Talento</h2>
						<p>En nuestra búsqueda de talento, valoramos la diversidad y reconocemos que cada individuo aporta una perspectiva única al mundo laboral. Si eres una persona con talento diferente, queremos asegurarnos de que tu contribución sea apreciada y respetada. Puedes confiar en que no defraudarás a las empresas y que trabajarás incansablemente para lograr tus objetivos. Tu habilidad para superar desafíos y tu compromiso con la excelencia son cualidades que valoramos profundamente. Estamos ansiosos por verte prosperar y crecer en tu carrera profesional..</p>
					</header>
					<div class="box" style= "background-image: url('images/fondoEquipo.jpg');">
						<form method="post" action="mandarRegistroTalento.php" target="_blank">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-6 col-12-mobilep">
									<input type="text" name="name" id="name" value="" placeholder="Nombre completo" />
								</div>

								<div class="col-12 col-12-mobilep">
									<input type="text" name="edad" id="edad" value="" placeholder="Edad" />
								</div>
								
								<div class="col-6 col-12-mobilep">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								</div>
								<div class="col-12 col-12-mobilep">
									<input type="text" name="numero" id="numero" value="" placeholder="Número de Teléfono" />
								</div>
								<div class="col-12">
									<input type="text" name="subject" id="subject" value="" placeholder="Discapacidad:" />
								</div>
								<div class="col-12">
									<textarea name="message" id="message" placeholder="Que te motiva a registrarte en Talento Conectado?" rows="6"></textarea>
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
				<footer id="footer">
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