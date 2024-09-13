<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro Empresarios</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>

<?php
$host = "localhost";
$username = "d22027455_root";
$password = "Andatti1$";
$dbname = "id22027455_primera";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("<div class='error-message message'>La conexión falló: " . $conn->connect_error . "</div>");
}

// Recoger los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Preparar la sentencia SQL
$sql = "INSERT INTO registrosEmpresarios (nombre, email, telefono, direccion, razonEnsayo)
VALUES ('$name', '$email', '$number', '$subject', '$message')";

// Ejecutar la sentencia SQL
if ($conn->query($sql) === TRUE) {
  echo "<div class='success-message message'>Nuevo registro creado satisfactoriamente</div>";
} else {
  echo "<div class='error-message message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
}

// Cerrar la conexión
$conn->close();
?>

</body>

</html>
<style>
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.message {
  text-align: center;
  padding: 20px;
  border-radius: 5px;
}

.success-message {
  color: green;
  background-color: lightgreen;
}

.error-message {
  color: red;
  background-color: lightcoral;
}



