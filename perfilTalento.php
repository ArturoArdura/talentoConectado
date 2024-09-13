<?php
session_start();

// Verificar si hay una sesión iniciada
if (!isset($_SESSION['email']) || !isset($_SESSION['tipoUsuario'])) {
    header("location:inicioSesion.php");
    exit();
}

include('verificarSesion.php');

// Obtener datos del usuario de la base de datos
// Conexión a la base de datos
$servername = "localhost"; // Cambia localhost si tu base de datos no está en el mismo servidor
$username = "d22027455_root"; // Cambia usuario por tu nombre de usuario de MySQL
$password = "Andatti1"; // Cambia contraseña por tu contraseña de MySQL
$dbname = "id22027455_primera"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Query para obtener los datos del usuario
$email = $_SESSION['email'];
$sql = "SELECT * FROM usuariosTabla WHERE email = '$email'";
$result = $conn->query($sql);

?>
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Talento Conectado - Mi Perfil</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body style= "background-image: url('images/naranjaDifuminado.jpg');" class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
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
							<li><a href="vacantesPostuladas.php" class="button">Vacantes postuladas</a></li>
						</ul>
					</nav>
				</header>

						<!-- Main -->
						<section id="main" class="container">
					<header>
						<h2>Mi Perfil</h2>
						<p>Actualiza tus datos personales.</p>
					</header>
					<div class="box">
						<div class="row">
<?php
if ($result->num_rows > 0) {
    // Imprimir los datos del usuario
    while($row = $result->fetch_assoc()) {
        echo "<p>Nombre: " . $row["Nombre"] . "</p>";
        echo "<p>Edad: " . $row["Edad"] . "</p>";
        echo "<p>Email: " . $row["email"] . "</p>";
        echo "<p>Contraseña: " . $row["passwordd"] . "</p>";
        echo "<p>Teléfono: " . $row["Telefono"] . "</p>";
        // Botón para editar cada parámetro
        
        echo "<form action='editarPerfil.php' method='post'>";
        echo "<input type='hidden' name='campo' value='password'>";
        echo "<input type='submit' value='Editar Contraseña'>";
        echo "</form>";

        echo "<form action='editarPerfil.php' method='post'>";
        echo "<input type='hidden' name='campo' value='telefono'>";
        echo "<input type='submit' value='Editar Teléfono'>";
        echo "</form>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
						</div>
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