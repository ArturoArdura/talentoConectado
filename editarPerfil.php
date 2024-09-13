<?php
// Incluir la conexión a la base de datos
include 'connection.php';

// Verificar si se recibió un campo para editar
if(isset($_POST['campo'])) {
    $campo = $_POST['campo'];

    // Dependiendo del campo a editar, mostrar el formulario correspondiente
    switch($campo) {
        case 'password':
            echo "<form action='actualizarPerfil.php' method='post'>";
            echo "<input type='hidden' name='campo' value='password'>";
            echo "<input type='password' name='nuevo_valor' placeholder='Nueva contraseña'>";
            echo "<input type='submit' value='Guardar'>";
            echo "</form>";
            break;
        case 'telefono':
            echo "<form action='actualizarPerfil.php' method='post'>";
            echo "<input type='hidden' name='campo' value='telefono'>";
            echo "<input type='tel' name='nuevo_valor' placeholder='Nuevo teléfono'>";
            echo "<input type='submit' value='Guardar'>";
            echo "</form>";
            break;
        default:
            echo "Campo no válido";
    }
}
?>
