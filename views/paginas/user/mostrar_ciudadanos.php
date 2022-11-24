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
    <link rel="stylesheet" href="../../estilos/user.css">
    <link rel="stylesheet" href="../../estilos/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Administración ciudadano</title>
</head>

<body>

    <body>
        <header class="header">
            <div class="logo">
                <img src="../asset/logo.png" alt="Logo de la marca">
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#">Ver ciudadanos</a></li>
                </ul>
            </nav>
            <a class="btn" href="../index.php?info=2"><button>Cerrar sesión</button></a>
        </header>
        <h2 style="color: black;">
            Ciudadanos Registrados
        </h2>
        <div class="container-fluid">
            <div class="row">
                <center>
                    <div class="col-md-9">
                        <div class="jumbotron">

                            <table class="table col-sm-6" class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">identificacion</th>
                                        <th scope="col">nombres</th>
                                        <th scope="col">apellidos</th>
                                        <th scope="col">fecha nacimiento</th>
                                        <th scope="col">Nacionalidad</th>
                                        <th scope="col">editar</th>
                                        <th scope="col">informe</th>
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
                                            <td>
                                                <a href="?id=<?php echo $row["id"]; ?>">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="?id=<?php echo $row["id"]; ?>&elimina=1">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                </center>
            </div>
        </div>
        <?php

        if (isset($_GET["id"]) && !isset($_GET["elimina"])) {
            //echo $_GET["id"];
            $result = getOneciudadano($_GET["id"]);
            //print_r($result_one_viaje);
            while ($row = mysqli_fetch_assoc($result)) {
                //print_r($row);
        ?>
                <div class="box2">
                    <div class="box">

                        <form action="../../../controller/actualizar.php" method="POST">
<<<<<<< HEAD
                            <h2>Actualizar datos</h2>
=======
                            <h2>Registrar ciudadano</h2>
>>>>>>> main
                            <p style="color: #fff; text-align: left; font-size: 15px;">Por favor ingrese
                                cada uno de los datos del ciudadano a registrar.</p>
                            <div class="inputBox col-sm-6">
                                <input type="text" name="nombres" value="<?php echo $row["nombres"]; ?>">
                                <span>Nombres</span>
                                <i></i>
                            </div>
                            <div class="inputBox col-sm-6">
                                <input type="text" name="apellidos" value="<?php echo $row["apellidos"]; ?>">
                                <span>Apellidos</span>
                                <i></i>
                            </div>
                            <div class="inputBox ">
                                <input type="number" name="identificacion" value="<?php echo $row["identificacion"]; ?>">
                                <span>Documento de identificación</span>
                                <i></i>
                            </div>
                            <div class="inputBox ">
                                <input type="text" name="lugar_exp" value="<?php echo $row["lugar_exp"]; ?>">
                                <span>Lugar de expedición</span>
                                <i></i>
                            </div>
                            <div class="inputBox ">
                                <input type="date" name="fx_nacimiento" value="<?php echo $row["fx_nacimiento"]; ?>">
                                <span>Fecha Nacimiento</span>
                                <i></i>
                            </div>
                            <div class="inputBox ">
                                <input type="text" name="lugar_nacimiento" value="<?php echo $row["estatura"]; ?>">
                                <span>Lugar Nacimiento</span>
                                <i></i>
                            </div>
                            <div class="inputBox">
                                <input type="number" name="estatura" value="<?php echo $row["estatura"]; ?>">
                                <span>Estatura</span>
                                <i></i>
                            </div>
                            <div class="inputBox">
                                <input type="text" name="gs" value="<?php echo $row["rh"]; ?>">
                                <span>Grupos Sanguineo</span>
                                <i></i>
                            </div>
                            <div class="inputBox">
                                <input type="text" name="rh" value="<?php echo $row["gs"]; ?>">
                                <span>RH</span>
                                <i></i>
                            </div>
                            <br>
                            <div class="col-12">
                                <input type="hidden" name=id value="<?php echo $row["id"] ?>">
                                <input type="hidden" name="actualizaCiudadano">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                            <input type="hidden" name="New_citizen">
                        </form>
                    </div>
                </div>
        <?php
            }
        }
        ?>
        </div>
    </body>

</html>