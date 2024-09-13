<?php
// Muestra todos los errores de PHP (ver el registro de cambios)
error_reporting(E_ALL);

// Muestra todos los errores de PHP
ini_set('display_errors', '1');

// Lo mismo que error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
// Conexión a la base de datos
$servername = "localhost"; // Cambia localhost si tu base de datos no está en el mismo servidor
$username = "id22027455_root"; // Cambia usuario por tu nombre de usuario de MySQL
$password = "Andatti1"; // Cambia contraseña por tu contraseña de MySQL
$database = "id22027455_primera"; // Nombre de tu base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar si se recibió un campo y un nuevo valor
if(isset($_POST['campo']) && isset($_POST['nuevo_valor'])) {
    $campo = $_POST['campo'];
    $nuevo_valor = $_POST['nuevo_valor'];
    
    // Obtener el email del usuario desde la sesión (asegúrate de iniciar la sesión antes)
    session_start();
    $email_usuario = $_SESSION['email'];

    // Preparar la consulta SQL para actualizar el campo correspondiente
    $sql = "";
    switch($campo) {
        
        case 'password':
            // Recuerda siempre encriptar las contraseñas antes de almacenarlas en la base de datos
            $sql = "UPDATE usuariosTabla SET passwordd='$nuevo_valor' WHERE email='$email_usuario'";
            break;
        case 'telefono':
            $sql = "UPDATE usuariosTabla SET Telefono='$nuevo_valor' WHERE email='$email_usuario'";
            break;
        default:
            echo "Campo no válido";
    }
    
    // Ejecutar la consulta SQL
    if (!empty($sql)) {
        if ($conn->query($sql) === TRUE) {
            echo "Registro actualizado correctamente (cierra esta ventana)";
        } else {
            echo "Error al actualizar el registro: " . $conn->error;
        }
    } else {
        echo "No se puede actualizar el email directamente por razones de seguridad.";
    }
}

// ... código anterior ...

// Preparar la consulta SQL para actualizar el campo correspondiente
$stmt = $conn->prepare("UPDATE usuarios SET $campo = ? WHERE email = ?");
$stmt->bind_param("ss", $nuevo_valor, $email_usuario);

// Ejecutar la consulta SQL
if ($stmt->execute()) {
    echo "Registro actualizado correctamente";
} else {
    echo "Error al actualizar el registro: " . $stmt->error;
}

// Cerrar la sentencia y la conexión a la base de datos
$stmt->close();
$conn->close();
?>
