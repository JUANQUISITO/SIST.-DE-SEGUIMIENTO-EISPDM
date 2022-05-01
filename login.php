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
		<h2><center>Iniciar Sesion</center></h2>

		<br>
<br>
<br>
		<form role="form" name="login" action="php/login.php" method="post">
		  <div class="form-group">
		    <label for="usuario">Usuario</label>
		    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>

		  <center> <button type="submit" class="btn btn-default">Acceder</button></center>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>