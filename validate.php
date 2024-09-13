<?php
$email = $_POST['email'];
$passwordd = $_POST['passwordd'];
session_start();
$_SESSION['email'] = $email;

$conn = mysqli_connect("localhost", "id22027455_root
", "Andatti1", "id22027455_primera");
$consulta = "SELECT * FROM usuariosTabla WHERE email= '$email' and passwordd='$passwordd'";
$resultado = mysqli_query($conn, $consulta);
$filas = mysqli_fetch_assoc($resultado);

if($filas) {
    // Guardar el tipo de usuario en la sesión
    $_SESSION['tipoUsuario'] = $filas['tipoUsuario'];
    
    // Redirigir según el tipo de usuario
    if($filas['tipoUsuario'] == 'talento') {
        header("location:portalTalentos.php");
    } else if($filas['tipoUsuario'] == 'empresario') {
        header("location:portalEmpresarios.php");
    }
} else {
    include("inicioSesion.php");
    echo "<h2 class='bad'> ERROR EN LA AUTENTIFICACION </h2>";
}

mysqli_free_result($resultado);
mysqli_close($conn);
?>
