<!DOCTYPE HTML>
<!--
    Alpha by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Iniciar Sesion - Talento Conectado</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <style>
            body {
                margin: 0;
                padding: 0;
                height: 100%;
                font-family: "Source Sans Pro", sans-serif;
                background-image: url('images/silladeruedas.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-blend-mode: multiply;
            }

           

        </style>
    </head>
    <body class="is-preload">
        <div id="page-wrapper">

            <!-- Header -->
                <header id="header">
                    <h1><a href="index.php">Tecmilenio</a> 2024</h1>
                    <nav id="nav">
                        <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li>
                                <a href="#" class="icon solid fa-angle-down">Informacion</a>
                                <ul>
                                    <li><a href="equipo.php">Nuestro Equipo</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="button">Iniciar Sesión</a></li>
                        </ul>
                    </nav>
                </header>

            <!-- Main -->
                <section id="main" class="container medium">
                    <header>
                        <h2 class="with-shadow">Iniciar sesión en tu cuenta</h2>
        				<p class="with-shadow">Inicia sesión con tus credenciales, el sitio te reconocerá y te mandará al portal de Talentos o de Empresarios!</p>
                    </header>
                    <div class="box">
                        <form method="POST" action="validate.php">
                            <div class="row gtr-50 gtr-uniform">
                            
                                <div class="col-12 col-12-mobilep">
                                    <input type="email" name="email" id="email" value="" placeholder="Email" />
                                </div>
                                <div class="col-12 col-12-mobilep">
                                    <input type="text" name="passwordd" id="passwordd" value="" placeholder="Contraseña" />
                                </div>
                                
                                <div class="col-12">
                                    <ul class="actions special">
                                        <li><input type="submit" value="Iniciar Sesión" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
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
