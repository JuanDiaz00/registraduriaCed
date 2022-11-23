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
                <li><a href="/views/paginas/admin/registrar_ciudadano.php">Ver ciudadanos</a></li>
                
                <li><a href="./admin.php">Generar reporte</a></li>
            </ul>
        </nav>
        <a class="btn" href="../index.php?info=2"><button>Cerrar sesión</button></a>
    </header>
    <br>
    <div>
        <div>
            <div>
                <h2 style="color: black;">
                    Administración de ciudadanos
                </h2>
                <p>
                    En esta sección se puede agregar nuevos ciudadanos y modificar sus datos.
                </p>
            </div>
        </div>
        <br>
        <?php
        if (isset($_GET["status"])) {
            if ($_GET["status"] == 'success') {
        ?>
                <div class="alert alert-success d-flex alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <strong>¡Ciudadano Registrado Correctamente!</strong>
                    <!-- <button type="close" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    <a href="./registrar_ciudadano.php" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                </div>
        <?php
            }
        }
        ?>
        <div class="box2">
            <div class="box">

                <form action="../../../controller/registrar_ciudadano.php" method="POST">
                    <h2>Registrar ciudadano</h2>
                    <p style="color: #fff; text-align: left; font-size: 15px;">Por favor ingrese cada uno de los datos del ciudadano a registrar.</p>
                    <div class="inputBox col-sm-6">
                        <input type="text" name="nombres" required>
                        <span>Nombres</span>
                        <i></i>
                    </div>
                    <div class="inputBox col-sm-6">
                        <input type="text" name="apellidos" required>
                        <span>Apellidos</span>
                        <i></i>
                    </div>
                    <div class="inputBox ">
                        <input type="number" name="identificacion" required>
                        <span>Documento de identificación</span>
                        <i></i>
                    </div>
                    <div class="inputBox ">
                        <input type="text" name="lugar_exp" required>
                        <span>Lugar de expedición</span>
                        <i></i>
                    </div>
                    <div class="inputBox ">
                        <input type="date" name="fx_nacimiento" required>
                        <span>Fecha Nacimiento</span>
                        <i></i>
                    </div>
                    <div class="inputBox ">
                        <input type="text" name="lugar_nacimiento" required>
                        <span>Lugar Nacimiento</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="number" name="estatura" required>
                        <span>Estatura</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="gs" required>
                        <span>Grupos Sanguineo</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="rh" required>
                        <span>RH</span>
                        <i></i>
                    </div>
                    <br>
                    <div>
                        <input type="submit" value="Registrar" required>
                    </div>
                    <input type="hidden" name="New_citizen">
                </form>
            </div>
        </div>
        <br>
        <!-- <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Identificación</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Lugar Nacimiento</th>
                    <th scope="col">Lugar Expedición</th>
                    <th scope="col">Estatura</th>
                    <th scope="col">Grupo Sanguineo</th>
                    <th scope="col">RH</th>
                </tr>
            </thead>
            <tbody> -->
        <!-- php 
                // $result = getAllCiudadanos();
                // if ($result != null) {
                //     while ($ciudadano = mysqli_fetch_assoc($result)) {
                 
                        <tr>
                            <td><php echo $ciudadano["nombres"]; ?></td>
                            <td><php echo $ciudadano["apellidos"]; ?></td>
                            <td><php echo $ciudadano["identificacion"]; ?></td>
                            <td><php echo $ciudadano["fx_nacimiento"]; ?></td>
                            <td><php echo $ciudadano["lugar_nacimiento"]; ?></td>
                            <td><php echo $ciudadano["lugar_exp"]; ?></td>
                            <td><php echo $ciudadano["estatura"]; ?></td>
                            <td><php echo $ciudadano["gs"]; ?></td>
                            <td><php echo $ciudadano["rh"]; ?></td>
                        </tr>
                <php
                    }
                }
                ?>
            </tbody>
        </table> -->

    </div>

</body>
</html>