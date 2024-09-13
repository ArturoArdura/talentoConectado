<?php 
include('verificarSesion.php');
// Muestra todos los errores de PHP (ver el registro de cambios)
error_reporting(E_ALL);

// Muestra todos los errores de PHP
ini_set('display_errors', '1');

// Lo mismo que error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
$emailUsuario = $_SESSION['email']; // Asegúrate de que el email está almacenado en la sesión

// Conexión a la base de datos
 $conexion = mysqli_connect("localhost", "id22027455_root
 ", "Andatti1", "id22027455_primera");

$sqlVacantes = "SELECT id, titulo, empresa, empresa, descripción, sueldo, ubicación, fecha_publicacion FROM vacantes WHERE email = '$emailUsuario'";
$resultadoVacantes = mysqli_query($conexion, $sqlVacantes);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Talento Conectado - Vacantes Publicadas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />	
	</head>
	<body style= "background-image: url('images/azulDifuminado.jpg');" class="is-preload">
		<div id="page-wrapper">
			<!-- Header y resto de tu estructura HTML -->
			<header id="header">
					<h1><a href="portalEmpresarios.php">Tecmilenio</a> 2024</h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="#" class="icon solid fa-angle-down">Dashboard</a>
								<ul>
									<li><a href="portalEmpresarios.php">Portal Principal</a></li>
									<li><a href="cerrarSesion.php">Cerrar Sesión</a></li>									
								</ul>
							</li>
							<li><a href="perfilEmpresario.php" class="button">ir a Mi Perfil</a></li>
						</ul>
					</nav>
				</header>
			<!-- Main -->
			<section id="main" class="container">
        <header>
            <h2>Mis Vacantes Publicadas</h2>
        </header>
        <div class="box">
            <?php 
            if(mysqli_num_rows($resultadoVacantes) > 0){
                while($vacante = mysqli_fetch_assoc($resultadoVacantes)){
                    echo "<h2>" . $vacante['titulo'] . "</h2>";
                    echo "<p><strong>Empresa:</strong> " . $vacante['empresa'] . "</p>";
                    echo "<p><strong>Descripción:</strong> " . $vacante['descripción'] . "</p>";
                    echo "<p><strong>Sueldo:</strong> " . $vacante['sueldo'] . "</p>";
                    echo "<p><strong>Ubicación:</strong> " . $vacante['ubicación'] . "</p>";
                    echo "<p><strong>Fecha de publicación:</strong> " . $vacante['fecha_publicacion'] . "</p>";
                    $idVacante = $vacante['id'];
					$sqlPostulantes = "SELECT t.Nombre, p.Edad, p.Telefono, p.fechaPostulacion FROM postulaciones AS p INNER JOIN usuariosTabla AS t ON p.emailTalento = t.email WHERE p.idVacante = '$idVacante'";
                    $resultadoPostulantes = mysqli_query($conexion, $sqlPostulantes);

                    if(mysqli_num_rows($resultadoPostulantes) > 0){
						echo "<h3>Postulantes:</h3>"; // Título en grande para los postulantes
                        echo "<ul>";
                        while($postulante = mysqli_fetch_assoc($resultadoPostulantes)){
                            echo "<li><strong>Nombre:</strong> " . $postulante['Nombre'] . "</li>";
                            echo "<li><strong>Edad:</strong> " . $postulante['Edad'] . "</li>";
                            echo "<li><strong>Teléfono:</strong> " . $postulante['Telefono'] . "</li>";
                            echo "<li><strong>Fecha de postulación:</strong> " . $postulante['fechaPostulacion'] . "</li>";
							echo "<br>";
                        }
                        echo "</ul>";
                    } else {
                        echo "<p>Nadie se ha postulado aún.</p>";
                    }
                    echo "<hr>"; // Separador para cada vacante
                }
            } else {
                echo "<h2>No has publicado ninguna vacante.</h2>";
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