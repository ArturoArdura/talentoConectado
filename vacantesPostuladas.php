<?php 
include('verificarSesion.php');
$emailTalento = $_SESSION['email']; // Asegúrate de que el email está almacenado en la sesión

// Conexión a la base de datos
 $conexion = mysqli_connect("localhost", "id22027455_root
 ", "Andatti1", "id22027455_primera");

$queryPostulaciones = "SELECT fechaPostulacion, idVacante FROM postulaciones WHERE emailTalento = '$emailTalento'";
$resultadoPostulaciones = mysqli_query($conexion, $queryPostulaciones);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Talento Conectado - Vacantes Postuladas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />	
	</head>
	<body style= "background-image: url('images/naranjaDifuminado.jpg');"class="is-preload">
		<div id="page-wrapper">
			<!-- Header y resto de tu estructura HTML -->
			<header id="header">
					<h1><a href="portalTalentos.php">Tecmilenio</a> 2024</h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="#" class="icon solid fa-angle-down">Dashboard</a>
								<ul>
									<li><a href="portalTalentos.php">Portal Principal</a></li>
									<li><a href="cerrarSesion.php">Cerrar Sesión</a></li>									
								</ul>
							</li>
							<li><a href="perfilTalento.php" class="button">ir a Mi Perfil</a></li>
						</ul>
					</nav>
				</header>
			<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Vacantes que me postulé</h2>
					<?php if(mysqli_num_rows($resultadoPostulaciones) > 0): ?>
						<p>Estas son las vacantes a las que te has postulado:</p>
					<?php else: ?>
						<p>No te has postulado a ninguna vacante!</p>
					<?php endif; ?>
				</header>
				<div class="box">
					<?php 
					if(mysqli_num_rows($resultadoPostulaciones) > 0){
						while($postulacion = mysqli_fetch_assoc($resultadoPostulaciones)){
							$idVacante = $postulacion['idVacante'];
							$fechaPostulacion = $postulacion['fechaPostulacion'];

							$queryVacantes = "SELECT titulo, sueldo, empresa FROM vacantes WHERE id = '$idVacante'";
							$resultadoVacantes = mysqli_query($conexion, $queryVacantes);
							$vacante = mysqli_fetch_assoc($resultadoVacantes);

							echo "<h3>" . $vacante['titulo'] . "</h3>";
							echo "<p><strong>Sueldo:</strong> " . $vacante['sueldo'] . "</p>";
							echo "<p><strong>Fecha de postulación:</strong> " . $fechaPostulacion . "</p>";
							echo "<p><strong>Empresa:</strong> " . $vacante['empresa'] . "</p>";
							echo "<hr>"; // Separador para cada vacante
						}
					}
					?>
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
					</ul>
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