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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Administración ciudadano</title>
</head>

<body>
    <div class="container-fluid">
        <div class="col-md-9">
            <div class="jumbotron">
                <h2>
                    Ciudadanos
                </h2>
                <p>
                    En esta sección se puede agregar nuevos ciudadanos, modificarlos o eliminarlos.
                </p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Añadir Nuevo Ciudadano
                </button>
            </div>

            <br>
            <table class="table table-stripped">
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
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = getAllCiudadanos();
                    if ($result != null) {
                        while ($ciudadano = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo $ciudadano["nombres"]; ?></td>
                                <td><?php echo $ciudadano["apellidos"]; ?></td>
                                <td><?php echo $ciudadano["identificacion"]; ?></td>
                                <td><?php echo $ciudadano["fx_nacimiento"]; ?></td>
                                <td><?php echo $ciudadano["lugar_nacimiento"]; ?></td>
                                <td><?php echo $ciudadano["lugar_exp"]; ?></td>
                                <td><?php echo $ciudadano["estatura"]; ?></td>
                                <td><?php echo $ciudadano["gs"]; ?></td>
                                <td><?php echo $ciudadano["rh"]; ?></td>
                                <td>
                                    <a href="?id= <?php echo $ciudadano["id"]; ?>">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>

            <?php
            if (isset($_GET["id"])) {
                $result_one_ciudadano = getOneCiudadano($_GET["id"]);

                while ($row = mysqli_fetch_assoc($result_one_ciudadano)) {
            ?>
                    <form method="Post" action="<?php echo CONTROLLER_PATH; ?>ciudadanos.php">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombres</label>
                            <input type="text" value="<?php echo $row["nombres"]; ?>" class="form-control" id="nombres" name="nombres" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese el nombre/s.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Apellidos</label>
                            <input type="text" value="<?php echo $row["apellidos"]; ?>" class="form-control" id="apellidos" name="apellidos" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese los apellidos.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Identificación</label>
                            <input type="number" value="<?php echo $row["identificacion"]; ?>" class="form-control" id="identificacion" name="identificacion" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese la identificación.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Fecha de nacimiento</label>
                            <input type="date" value="<?php echo $row["fx_nacimiento"]; ?>" class="form-control" id="fx_nacimiento" name="fx_nacimiento" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese la fechad e nacimiento.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Lugar de nacimiento</label>
                            <input type="text" value="<?php echo $row["lugar_nacimiento"]; ?>" class="form-control" id="lugar_nacimiento" name="lugar_nacimiento" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese el lugar de nacimiento.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Lugar de expedición de identificación</label>
                            <input type="text" value="<?php echo $row["lugar_exp"]; ?>" class="form-control" id="lugar_exp" name="lugar_exp" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese el lugar de expidicón de la identificación.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Estatura</label>
                            <input type="number" value="<?php echo $row["estatura"]; ?>" class="form-control" id="estatura" name="estatura" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese la estatura.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Grupo sanguineo</label>
                            <input type="text" value="<?php echo $row["gs"]; ?>" class="form-control" id="gs" name="gs" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese el grupo sanguineo.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">RH</label>
                            <input type="text" value="<?php echo $row["rh"]; ?>" class="form-control" id="rh" name="rh" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese el RH.</div>
                        </div>
                        <input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
                        <input type="hidden" name="actualiza_ciudadano">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="Post" action="<?php echo CONTROLLER_PATH; ?>ciudadanos.php">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="nombres" name="nombres" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese el nombre/s.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese los apellidos.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Identificación</label>
                            <input type="number" class="form-control" id="identificacion" name="identificacion" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese la identificación.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fx_nacimiento" name="fx_nacimiento" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese la fechad e nacimiento.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Lugar de nacimiento</label>
                            <input type="text" class="form-control" id="lugar_nacimiento" name="lugar_nacimiento" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese el lugar de nacimiento.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Lugar de expedición de identificación</label>
                            <input type="text" class="form-control" id="lugar_exp" name="lugar_exp" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese el lugar de expidicón de la identificación.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Estatura</label>
                            <input type="number" class="form-control" id="estatura" name="estatura" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese la estatura.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Grupo sanguineo</label>
                            <input type="text" class="form-control" id="gs" name="gs" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese el grupo sanguineo.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">RH</label>
                            <input type="text" class="form-control" id="rh" name="rh" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese el RH.</div>
                        </div>
                        <input type="hidden" name="nuevo_ciudadano">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../../scripts/bootstrap.min.js"></script>

</body>

</html>