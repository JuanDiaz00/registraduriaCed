<?php
define('controller_path', '../../../controller/');
define('LIBRARIES_PATH', '../modelo/');
require(controller_path . "ciudadanos.php");
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
            <div class="col-md-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="?all=1">Cantantes</a>
                    </li>
                    <li class="nav-item dropdown ml-md-auto">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                            data-toggle="dropdown">Dropdown link</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another
                                action</a> <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider">
                            </div> <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                </ul>
            </div>
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
                                    <?php echo $row["apellido"]; ?>
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
                            ?>3

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