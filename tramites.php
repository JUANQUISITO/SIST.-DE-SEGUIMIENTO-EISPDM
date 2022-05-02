<?php
session_start();
require_once("./php/conexion.php");
$consulta = "SELECT t.id_tramite, CONCAT(e.nombres,' ',e.paterno,' ',e.materno) AS nombres,t.estado, t.fecha 
FROM tramite t INNER JOIN egresado e ON e.id_egresado=t.id_egresado;";
$respuesta = $con->query($consulta);
?>

<html>

<head>
	<title>REGISTROS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
	<?php include "php/menu2.php"; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h2>
					<center>TRAMITES RECIENTES</center>
				</h2>
				<br>
				<br>
				<br>
				<table class="table table-border table-hover table-striped">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Nro</th>
							<th scope="col">C.I.</th>
							<th scope="col">Nombres y Apellidos</th>
							<th scope="col">Estado</th>
							<th scope="col">Fecha Inicio</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;
						while ($fila = mysqli_fetch_array($respuesta)) {
							$i = $i + 1;
						?>
							<tr class="">
								<th scope="row"><?= $i ?></th>
								<td><?= $fila['id_tramite'] ?></td>
								<td><?= $fila['nombres'] ?></td>
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
								<td><?= $estado ?></td>
								<td><?= date("d/m/Y", strtotime($fila['fecha'])) ?></td>

							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="js/valida_login.js"></script>
</body>

</html>