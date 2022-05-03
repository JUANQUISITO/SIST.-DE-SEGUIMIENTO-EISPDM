<?php
session_start();
require_once("./php/conexion.php");

$consultaCarrera = "SELECT * FROM carrera";
$resultadoCarrera = mysqli_query($con, $consultaCarrera);

$consultaGestion = "SELECT * FROM gestion";
$resultadoGestion = mysqli_query($con, $consultaGestion);
//var_dump($resultadoCarrera);
?>
<html>

<head>
	<title>Formulario de Registro</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
	<?php include "php/menu2.php"; ?>
	<!-- mejora visual-->
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<center>
					<h2>Datos de registro</h2>
				</center>
				<form role="form" name="registro" action="php/registro.php" method="post">
					<center>
						<table>
							<tr>
								<div class="form-group">
									<td WIDTH="190" HEIGHT="50"><label for="ci">Cedula de identidad:</label></td>
									<td> <input type="text" class="form-control" id="ci" name="ci" placeholder="Cedula de identidad" required></td>
								</div>
							</tr>
							<tr>
								<div class="form-group">

									<td WIDTH="190" HEIGHT="50"><label for="nombres">Nombres:</label></td>
									<td><input type="int" class="form-control" id="nombres" name="nombres" placeholder="Nombres" required></td>

								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td WIDTH="190" HEIGHT="50"><label for="paterno">Apellido Paterno:</label></td>
									<td><input type="text" class="form-control" id="paterno" name="paterno" placeholder="Apellido Paterno" required></td>
								</div>
							</tr>
							<tr>
								<div class="form-group">

									<td WIDTH="190" HEIGHT="50"> <label for="materno">Apellido Materno:</label></td>
									<td><input type="text" class="form-control" id="materno" name="materno" placeholder="Apellido Materno" required></td>

								</div>
							</tr>
							<tr>
								<div class="form-group">

									<td WIDTH="190" HEIGHT="50"><label for="correo">Correo Electronico:</label></td>
									<td> <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electronico" required></td>

								</div>
							</tr>
							<tr>
								<div class="form-group">

									<td WIDTH="190" HEIGHT="50"><label for="fecha_nacimiento">Fecha de Nacimiento:</label></td>
									<td><input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento"></td>

								</div>
							</tr>
							<tr>
								<div class="form-group">

									<td WIDTH="190" HEIGHT="50"><label for="item">Celular:</label></td>
									<td><input type="text" class="form-control" id="Celular" name="celular" placeholder="ingrese su numero de celular" required></td>

								</div>
							</tr>
							<!--Aqui cargar carreras de la base de datos-->
							<tr>
								<div class="form-group">
									<td WIDTH="190" HEIGHT="50"> <label for="item">Carrera:</label></td>
									<td><select class="form-control " name="carrera" id="id_carrera">
											<option value="">Seleccione una Carrera</option>

											<?php while ($fila = mysqli_fetch_array($resultadoCarrera)) { ?>
												<option value="<?= $fila['id_carrera'] ?>">
													<?= $fila['nombre'] ?>
												</option>
											<?php } ?>

										</select> </td>
								</div>
							<tr>



								<!--Aqui cargar gestion de la base de datos-->
							<tr>
								<div class="form-group">
									<td WIDTH="190" HEIGHT="50"> <label for="item">Gestión:</label></td>
									<td><select class="form-control " name="gestion" id="id_gestion">
											<option value="">Seleccione una Carrera</option>

											<?php while ($fila = mysqli_fetch_array($resultadoGestion)) { ?>
												<option value="<?= $fila['id_gestion'] ?>">
													<?= $fila['detalle'] ?>
												</option>
											<?php } ?>

										</select> </td>
								</div>
							<tr>

						</table>
					</center>
					<center><button type="submit" class="btn btn-default">Registrar</button> </center>
				</form>
			</div>
		</div>
	</div>

	<!-- valida tipo de datos -->
	<!-- <script src="js/valida_registro.js"></script> -->
</body>

</html>