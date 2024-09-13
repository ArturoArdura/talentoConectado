<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Registrate!</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100vh;
        }
        
        .section {
            flex: 1;
            height: 100%;
            position: relative;
            overflow: hidden;
            transition: 0.5s;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .section:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }
        
        .section:hover .blur {
            filter: blur(5px);
        }
        
        .blur {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            filter: blur(0);
            transition: 0.5s;
        }
        
        .talento {
            background-image: url('images/cafeDown.jpg');
            background-position: center; /* Añadido para mover la imagen a la derecha */
        }
        
        .empresario {
            background-image: url('images/arturoElias.jpg');
            background-position: center; /* Añadido para mover la imagen a la derecha */
        }
        
        .button {
            background-color: #e5e5e5;
            border: none;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s;
            position: relative; /* Añadido */
            z-index: 1; /* Añadido */
        }
        
        .button:hover {
            background-color: #b0b2b4;
        }
        
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            
            .section {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section empresario">
            <div class="blur empresario"></div>
            <button class="button" onclick="window.location.href='reEmpresario.php'" >Regístrate como Empresario</button>
        </div>
        <div class="section talento">
            <div class="blur talento"></div>
            <button class="button" onclick="window.location.href='reTalento.php'" >Regístrate como Talento</button>
        </div>
    </div>
</body>
</html>
