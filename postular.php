<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Postulación a Vacante</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>

<?php
// Iniciar sesión para usar $_SESSION
session_start();

// Conexión a la base de datos
$host = "localhost";
$username = "d22027455_root";
$password = "Andatti1$";
$dbname = "id22027455_primera";

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("<div class='error-message message'>Conexión fallida: " . $conn->connect_error . "</div>");
}

// Obtener el email y el id de la vacante desde el formulario
$email = $_SESSION["email"];
$idVacante = $_POST['vacante_id'];

// Verificar si el usuario ya se postuló a la vacante
$checkQuery = "SELECT * FROM postulaciones WHERE emailTalento = ? AND idVacante = ?";
$checkStmt = $conn->prepare($checkQuery);
$checkStmt->bind_param("si", $email, $idVacante);
$checkStmt->execute();
$checkResult = $checkStmt->get_result();

if ($checkResult->num_rows > 0) {
    echo "<div class='error-message message'>¡Ya te postulaste! (cierra esta ventana)</div>";
} else {
    // Preparar la consulta para obtener Edad y Telefono
    $query = "SELECT Edad, Telefono FROM usuariosTabla WHERE email = ?";
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        echo "<div class='error-message message'>Error al preparar la consulta: " . $conn->error . "</div>";
        exit;
    }

    // Vincular el parámetro
    $stmt->bind_param("s", $email);

    // Ejecutar la consulta
    $stmt->execute();

    // Vincular los resultados a variables
    $stmt->bind_result($Edad, $Telefono);

    // Comprobar si se obtuvieron resultados
    if ($stmt->fetch()) {
        // Liberar los resultados de la consulta
        $stmt->free_result();

        // Preparar la inserción en la tabla postulaciones
        $insertQuery = "INSERT INTO postulaciones (emailTalento, idVacante, Edad, Telefono, fechaPostulacion) VALUES (?, ?, ?, ?, NOW())";
        $insertStmt = $conn->prepare($insertQuery);
        if (!$insertStmt) {
            echo "<div class='error-message message'>Error al preparar la inserción: " . $conn->error . "</div>";
            exit;
        }

        // Vincular los parámetros
        $insertStmt->bind_param("siis", $email, $idVacante, $Edad, $Telefono);

        // Ejecutar la inserción
        $insertStmt->execute();

        if ($insertStmt->affected_rows > 0) {
            echo "<div class='success-message message'>Postulación realizada con éxito. (cierra esta ventana)</div>";
        } else {
            echo "<div class='error-message message'>Error al realizar la postulación: " . $insertStmt->error . "</div>";
        }

        // Cerrar la sentencia de inserción
        $insertStmt->close();
    } else {
        echo "<div class='error-message message'>No se pudo obtener la información del usuario.</div>";
    }

    // Cerrar la sentencia
    $stmt->close();
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