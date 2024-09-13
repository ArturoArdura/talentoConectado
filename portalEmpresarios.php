<?php
include('verificarSesion.php');

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Prepara las variables para la inserción
    $titulo = $_POST['titulo'];
    $empresa = $_POST['empresa'];
    $descripción = $_POST['descripción'];
    $sueldo = $_POST['sueldo'];
    $ubicación = $_POST['ubicación'];
    $email = $_SESSION['email']; // Suponiendo que el id del usuario está almacenado en la sesión

    // Prepara la consulta SQL para insertar datos
    $sql = "INSERT INTO vacantes (fecha_publicacion, titulo, empresa, descripción, sueldo, ubicación, email) 
            VALUES (NOW(), '$titulo', '$empresa', '$descripción', '$sueldo', '$ubicación', '$email')";

    // Ejecuta la consulta y verifica si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "Vacante publicada exitosamente";
    } else {
        echo "Error al publicar la vacante: " . $conn->error;
    }

    // Cierra la conexión a la base de datos
    $conn->close();
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Portal - Empresarios</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/mainPortales.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="portalEmpresarios.php">Tecmilenio</a> 2024</h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="#" class="icon solid fa-angle-down">Dashboard</a>
								<ul>
									<li><a href="perfilEmpresario.php">Mi perfil</a></li>
									<li><a href="misVacantes.php">Vacantes Publicadas</a></li>
								</ul>
								<li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
							</li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
			<section id="banner" style="background-image: url('images/texturaAzul.jpg'); background-size: cover;">					<h2>Portal Empresarios</h2>
					<p>Publica Vacantes y contrata personal!</p>
					
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Se honesto al publicar, el corazón de tu empresa son los empleados!</h2>
							
						</header>
						<span class="image featured"><img src="images/hombreCasco.jpg" alt="" /></span>
					</section>

					<!-- Agregar un nuevo formulario para publicar vacantes -->
    				<section id="publicar_vacante" class="container">
        				<h3>Publicar una nueva vacante</h3>
        				<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            				<div class="row gtr-uniform gtr-50">
                			<div class="col-6 col-12-mobilep">
                    			<input type="text" name="titulo" id="titulo" value="" placeholder="Título de la vacante" required />
                			</div>
                			<div class="col-6 col-12-mobilep">
                    			<input type="text" name="empresa" id="empresa" value="" placeholder="Nombre de la empresa" required />
                			</div>
                			<div class="col-12">
								<input type="text" name="descripción" id="descripción" placeholder="Descripción de la vacante" rows="6" required/>
                			</div>
                			<div class="col-6 col-12-mobilep">
                    			<input type="text" name="sueldo" id="sueldo" value="" placeholder="Sueldo ofrecido" required />
                			</div>
                			<div class="col-6 col-12-mobilep">
                    			<input type="text" name="ubicación" id="ubicación" value="" placeholder="Ubicación" required />
                			</div>
							<!-- Agrega un campo oculto para enviar el ID del usuario empresario -->
							<input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuarioEmpresario']; ?>">
                			<!-- Añadir campos para la carga de la foto -->
                			<div class="col-12">
                    			<ul class="actions special">
                        			<li><input type="submit" value="Publicar Vacante" /></li>
                    			</ul>
               				</div>
            				</div>
       						</form>
    				</section>

<!-- Feed de vacantes -->
<section id="feed_vacantes" class="container">
    <?php
    // Conexión a la base de datos
    $servername = "localhost"; // Cambia localhost si tu base de datos no está en el mismo servidor
    $username = "root"; // Cambia usuario por tu nombre de usuario de MySQL
    $password = ""; // Cambia contraseña por tu contraseña de MySQL
    $database = "PRIMERA"; // Nombre de tu base de datos
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