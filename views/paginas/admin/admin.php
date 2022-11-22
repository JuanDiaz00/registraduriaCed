<?php
define('LIBRARIES_PATH', '../../../modelo/');
define('CONTROLLER_PATH', '../../../controller/');
define('VIEWS_PATH', '../../../views/');
define('CSS_PATH', '../../estilos/');
define('JS_PATH', '../../scripts/');

if (!defined('CONFIG_PATH')) {
    define('CONFIG_PATH', '../../../config/');
}

require_once(CONTROLLER_PATH . "ciudadanos.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/bootstrap.min.css">
    <link rel="stylesheet" href="../../estilos/registrar_ciudadano.css">
    <link rel="stylesheet" href="../../estilos/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Generar Reporte</title>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="../asset/logo.png" alt="Logo de la marca">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="./registrar_ciudadano.php">Registrar ciudadano</a></li>
                <li><a href="#">Generar reporte</a></li>
            </ul>
        </nav>
        <a class="btn" href="../index.php?info=2"><button>Cerrar sesión</button></a>
    </header>
    <br>
    <div>
        <div>
            <div>
                <h2 style="color: black;">
                    Generar Reporte
                </h2>
                <p>
                    En esta sección se le permitira generar un reporte como administrador, de todos los ciudadanos que 
                    se encuentran en la base de datos.
                </p>
            </div>
        </div>
        <br>
        <div class="box2">
            <div class="box">

                <form action="../../../controller/registrar_ciudadano.php" method="POST">
                    <h2>Generar reporte</h2>
                    <p style="color: #fff; text-align: left; font-size: 15px;">Oprima el siguiente botón si quiere generar un reporte de ciudadanos.</p>
                    <br>
                    <div>
                        <a href='./reporte.php' type="submit" value="Generar" required>Generar</a>
                    </div>
                </form>
            </div>
        </div>
        <br>
    </div>
</body>
</html>