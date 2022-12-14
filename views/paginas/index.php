<?php
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
	<link rel="stylesheet" href="../estilos/menu.css">

</head>

<body>

<header class="header">
        <div class="logo">
            <img src="./asset/logo.png" alt="Logo de la marca">
        </div>
        <nav>
            <!-- <ul class="nav-links">
                <li><a href="#">Registrar ciudadano</a></li>
                <li><a href="./admin.php">Generar reporte</a></li>
            </ul> -->
        </nav>
        <a class="btn" href="./index.php"><button>Iniciar Sesión</button></a>
    </header>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Registraduria Konrad</h2>
				</div>
			</div>
			<?php
                        if (isset($_GET["info"])) {
                            if ($_GET["info"] == 1) {
                        ?>
                                <div class="alert alert-danger d-flex alert-dismissible fade show" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <strong>¡Datos Incorrectos!</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                            }
                            if ($_GET["info"] == 2) {
                            ?>
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                                        <use xlink:href="#info-fill" />
                                    </svg>
                                    <strong>¡Cerró Sesión!</strong> Adiós
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php
                            }
                        }
                        ?>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Ingresar</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form action="../../controller/valida_login.php" class="signin-form" method="POST">
								<div class="form-group mt-3">
									<input type="text" class="form-control" name="correo" required>
									<label class="form-control-placeholder" for="correo">Usuario</label>
								</div>
								<div class="form-group">
									<input id="clave" type="password" class="form-control" name="clave" required>
									<label class="form-control-placeholder" for="clave">Contraseña</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<button type="submit" value="ingresar" class="form-control btn btn-primary rounded submit px-3">Registrarse</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Rercuerdame
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Olvidaste tu contraseña?</a>
									</div>
								</div>
							</form>
							<p class="text-center">¿No estás registrado?<a data-toggle="tab" href="#signup">Registrate</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="../scripts/jquery.min.js"></script>
	<script src="../scripts/popper.js"></script>
	<script src="../scripts/bootstrap.min.js"></script>
	<script src="../scripts/main.js"></script>

</body>

</html>