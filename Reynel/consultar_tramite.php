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
<div class="col-md-6">
		<h2><center>Consulta de tramite</center></h2>
<br>
<br>
<br>

		<form role="form" name="login" action="estado_tramite.php" method="post">
		  <div class="form-group">
		    <label for="usuario"><FONT COLOR="BLUE">Cedula de Identidad: </font></label>
		    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su C.I.">
		  </div>
		  <div class="form-group">
		    <label for="password"><FONT COLOR="BLUE">Fecha de Nacimiento; </font></label>
		    <input type="date" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>

          <center> <button href="./estado_tramite.php"> <font color="blue">Consultar</button> </font></center>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>