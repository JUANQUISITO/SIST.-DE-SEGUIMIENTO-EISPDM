<?php session_start(); ?>
<html>

<head>
	<title>Consultar Tramites</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
	<?php include "php/menu1.php"; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h2>
					<center>Consulta de tramite</center>
				</h2>
				<br>
				<form role="form" name="login" action="estado_tramite.php" method="post">
					<center>
						<table>
							<tr>
								<div class="form-group">
									<td HEIGHT="50"> <label for="ci">Cedula de Identidad:</label> </td>
									<td><input type="number" class="form-control" id="ci" name="ci" placeholder="Ingrese su C.I." required> </td>

							</tr>
							<tr>
								<div class="form-group">
									<td HEIGHT="50"><label for="fecha_nacimiento">Fecha de Nacimiento: </label> </td>
									<td><input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required> </td>
								</div>
							</tr>
						</table>
					</center>
					<br>
					<center>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" value="Consultar">
						</div>
					</center>
				</form>
			</div>
		</div>
	</div>
	<!-- <script src="js/valida_login.js"></script> -->
</body>

</html>