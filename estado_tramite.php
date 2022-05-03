<?php
session_start();

$ci = $_POST['ci'];
$fechaNacimiento = $_POST['fecha_nacimiento'];

require_once("./php/conexion.php");

$consultaTramite = "SELECT t.id_tramite, e.ci,e.nombres,e.paterno,e.materno,e.fecha_nacimiento,t.estado, t.fecha 
FROM tramite t
INNER JOIN egresado e ON e.id_egresado=t.id_egresado
WHERE e.ci = $ci AND e.fecha_nacimiento = '$fechaNacimiento'";

$respuesta = mysqli_query($con, $consultaTramite);
$fila = mysqli_fetch_array($respuesta);

?>
<html>

<head>
	<title>Formulario de Registro</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
	<?php include "php/menu1.php"; ?>
	<!-- mejora visual-->
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<center>
					<h2>Estado de tramite</h2>
				</center>

				<center>
					<table>
						<div class="form-group">
							<tr>
								<td WIDTH="190" HEIGHT="50">
									<FONT COLOR="BLUE"><label for="ci">C.I.:</label></FONT>
								</td>
								<td HEIGHT="50"><label for="ci"><?= $fila['ci'] ?></label></td>
							</tr>
						</div>
						<tr>
							<div class="form-group">
								<td HEIGHT="50">
									<FONT COLOR="BLUE"><label for="nombres">Nombres:</label></FONT>
								</td>
								<td HEIGHT="50"><label for="nombres"><?= $fila['nombres'] ?></label></td>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<td HEIGHT="50">
									<FONT COLOR="BLUE"><label for="paterno">Apellido Paterno:</label></FONT>
								</td>
								<td HEIGHT="50"><label for="paterno"><?= $fila['paterno'] ?></label></td>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<td HEIGHT="50">
									<FONT COLOR="BLUE"><label for="materno">Apellido Materno:</label></FONT>
								</td>
								<td HEIGHT="50"> <label for="materno"><?= $fila['materno'] ?></label></td>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<td HEIGHT="50">
									<FONT COLOR="BLUE"><label for="fecha_inicio">Fecha de Inicio:</label></FONT>
								</td>
								<td HEIGHT="50"><label for="correo"><?= $fila['fecha'] ?></label></td>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<td HEIGHT="50">
									<FONT COLOR="BLUE"><label for="estado">Estado:</label></FONT>
								</td>
								<td HEIGHT="50">
									<?php
									$estado = "";
									if ($fila['estado'] == '1') {
										$estado = "En curso";
									} else if ($fila['estado'] == '2') {
										$estado = "En curso";
									} else {
										$estado = "Observado";
									}
									?>
									<FONT COLOR="RED"><label for="correo"><?= $estado ?></label></FONT>
								</td>
							</div>
						</tr>
					</table>
				</center>
				<center>
					<a class="btn btn-default" href='./consultar_tramite.php'>Salir</a>
				</center>
			</div>
		</div>
	</div>
	<!-- valida tipo de datos -->
	<!-- <script src="js/valida_registro.js"></script> -->

</html>