<?php
define('LIBRARIES_PATH', '../../../modelo/');
define('CONTROLLER_PATH', '../../../controller/');
define('VIEWS_PATH', '../../../views/');
define('CSS_PATH', '../../estilos/');
define('JS_PATH', '../../scripts/');

if (!defined('CONFIG_PATH')) {
    define('CONFIG_PATH', '../../../config/');
}

require_once(CONTROLLER_PATH ."ciudadanos.php");
?>
<!doctype html>
<html lang="Es-es">

<head>
    <title>Ingreso</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../estilos/styles.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-9">
                <div class="jumbotron">
                    <h2>
                        Ciudadanos Registrados
                    </h2>
                    <table class="table table-dark table-striped">
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