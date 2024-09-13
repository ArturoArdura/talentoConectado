<?php
session_start();

// Verificar si hay una sesión iniciada
if (!isset($_SESSION['email']) || !isset($_SESSION['tipoUsuario'])) {
    header("location:inicioSesion.php");
    exit();
}

// Verificar si el usuario es empresario
if ($_SESSION['tipoUsuario'] == 'empresario') {
    // Páginas que solo pueden ser accedidas por empresarios
    if (basename($_SERVER['PHP_SELF']) == 'portalTalentos.php' || 
        basename($_SERVER['PHP_SELF']) == 'perfilTalento.php' || 
        basename($_SERVER['PHP_SELF']) == 'vacantesPostuladas.php') {
        header("location:portalEmpresarios.php");
        exit();
    }
} 
// Verificar si el usuario es talento
elseif ($_SESSION['tipoUsuario'] == 'talento') {
    // Páginas que solo pueden ser accedidas por talentos
    if (basename($_SERVER['PHP_SELF']) == 'portalEmpresarios.php' || 
        basename($_SERVER['PHP_SELF']) == 'perfilEmpresario.php' || 
        basename($_SERVER['PHP_SELF']) == 'vacantesPublicadas.php') {
        header("location:portalTalentos.php");
        exit();
    }
}



?>
