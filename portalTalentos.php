<?php include('verificarSesion.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Portal - Talentos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="portalTalentos.php">Tecmilenio</a> 2024</h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="#" class="icon solid fa-angle-down">Dashboard</a>
								<ul>
									<li><a href="perfilTalento.php">Mi Perfil</a></li>
									<li><a href="vacantesPostuladas.php">Vacantes Postuladas</a></li>
								</ul>
								<li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
							</li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner" style="background-image: url('images/texturaNaranja.jpg'); background-size: cover;">	
					<h2>Portal Talentos</h2>
					<p>Postulate a las vacantes!</p>
					
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Sin miedo, atreverse es el primer paso!</h2>
						
						</header>
						<span class="image featured"><img src="images/jovenesEmpleos.jpg" alt="" /></span>
					</section>

			<!-- Feed de vacantes -->
				<section id="feed_vacantes" class="container">
    			<?php
    		// Conexión a la base de datos
    			$servername = "localhost"; // Cambia localhost si tu base de datos no está en el mismo servidor
    			$username = "d22027455_root"; // Cambia usuario por tu nombre de usuario de MySQL
    			$password = "Andatti1"; // Cambia contraseña por tu contraseña de MySQL
    			$database = "id22027455_primera"; // Nombre de tu base de datos
    			$conn = new mysqli($servername, $username, $password, $database);

    		// Verifica la conexión
    			if ($conn->connect_error) {
    			    die("Conexión fallida: " . $conn->connect_error);
    			}

    		// Consulta SQL para obtener las vacantes ordenadas por fecha
    			$sql = "SELECT * FROM vacantes ORDER BY fecha_publicacion DESC";
    			$result = $conn->query($sql);

    		if ($result->num_rows > 0) {
        		echo "<h2>Oferta Laboral</h2>";
        		while ($row = $result->fetch_assoc()) {
            		echo "<div class='post'>";
            		echo "<h2>" . $row["titulo"] . "</h2>";
					echo "<p><strong>Clave:</strong> " . $row["id"] . "</p>";
            		echo "<p><strong>Empresa:</strong> " . $row["empresa"] . "</p>";
            		echo "<p><strong>Descripción:</strong> " . $row["descripción"] . "</p>";
            		echo "<p><strong>Sueldo:</strong> " . $row["sueldo"] . "</p>";
            		echo "<p><strong>Ubicación:</strong> " . $row["ubicación"] . "</p>";
            		echo "<p><strong>Fecha de publicación:</strong> " . $row["fecha_publicacion"] . "</p>";
					// Botón de postulación modificado
					echo "<form action='postular.php' method='POST' target='_blank'>";
					echo "<input type='hidden' name='vacante_id' value='" . $row["id"] . "'>";
					echo "<input type='hidden' name='email' value='" . $_SESSION["email"] . "'>";
					// Añade campos ocultos para edad y teléfono
					echo "<input type='hidden' name='edad' value='" . $edadDesdeBD . "'>";
					echo "<input type='hidden' name='telefono' value='" . $telefonoDesdeBD . "'>";
					echo "<input type='submit' class='button primary' value='Postular'>";
					echo "</form>";
					echo "<hr>";
					echo "</div>";
				}
    		} else {
        		echo "<p>No hay vacantes publicadas.</p>";
    		}

    		// Cierra la conexión a la base de datos
    		$conn->close();
    		?>
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