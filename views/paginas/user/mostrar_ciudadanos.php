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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/bootstrap.min.css">
    <link rel="stylesheet" href="../../estilos/registrar_ciudadano.css">
    <link rel="stylesheet" href="../../estilos/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Administración ciudadano</title>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="../asset/logo.png" alt="Logo de la marca">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Registrar ciudadano</a></li>
                <li><a href="./admin.php">Generar reporte</a></li>
            </ul>
        </nav>
        <a class="btn" href="../index.php?info=2"><button>Cerrar sesión</button></a>
    </header>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9">
                <div class="jumbotron">
                    <h2 style="color: black;">
                        Ciudadanos Registrados
                    </h2>
                    <table class="table col-sm-6" class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">identificacion</th>
                                <th scope="col">nombres</th>
                                <th scope="col">apellidos</th>
                                <th scope="col">fecha nacimiento</th>
                                <th scope="col">Nacionalidad</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php
                            $result = getAllCiudadanos();
                            while ($row = mysqli_fetch_assoc($result)) {

                            ?>
                                <tr>
                                    <td>
                                        <?php echo $row["identificacion"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["nombres"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["apellidos"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["fx_nacimiento"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["lugar_nacimiento"]; ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="../scripts/jquery.min.js"></script>
    <script src="../scripts/popper.js"></script>
    <script src="../scripts/bootstrap.min.js"></script>
    <script src="../scripts/main.js"></script>

</body>

</html>