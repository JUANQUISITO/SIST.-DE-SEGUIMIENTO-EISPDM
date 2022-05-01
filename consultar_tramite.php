<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/menu1.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-10">
		<h2><center>Consulta de tramite</center></h2>
<br>


		<form role="form" name="login" action="estado_tramite.php" method="post">

		<center><table>
		<tr>
		  <div class="form-group">
		  <td HEIGHT="50"> <label for="usuario">Cedula de Identidad:</label> </td>
		  <td><input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su C.I."> </td>
		  </div>
		</tr>

		<tr>
		  <div class="form-group">
		  <td HEIGHT="50"><label for="password">Fecha de Nacimiento: </label> </td>
		  <td><input type="date" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a"> </td>
		  </div>
		</tr>
		</table></center>

		<br>
          <center> <button href="./estado_tramite.php">Consultar</button></center>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>