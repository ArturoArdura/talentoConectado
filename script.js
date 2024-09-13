function mostrarContrasena() {
    var contrasena = document.getElementById("contrasena");
    var boton = document.getElementById("mostrar-contrasena");

    if (contrasena.style.display === "none") {
        contrasena.style.display = "inline";
        boton.textContent = "Ocultar Contraseña";
    } else {
        contrasena.style.display = "none";
        boton.textContent = "Mostrar Contraseña";
    }
}
