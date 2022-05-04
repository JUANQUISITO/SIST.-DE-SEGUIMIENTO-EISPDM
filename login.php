<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Registro</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
	<?php include "php/menu1.php"; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h2 class="text-center">INICIAR SESIÓN</h2>
				<form role="form" name="login" action="verificar.php" method="post">
					<div class="form-group">
						<label for="usuario">Usuario:</label>
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese usuario" required>
					</div>

					<div class="form-group">
						<label for="password">Contraseña:</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su Contraseña" required>
					</div>

					<div class="form-group">
						<button href="./tramites.php" class="btn btn-primary">Consultar</button>
					</div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	</div>
</body>

</html>