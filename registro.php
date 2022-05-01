<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?><!-- mejora visual-->
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Registro</h2>

		<form role="form" name="registro" action="php/registro.php" method="post">
		 
		 <div class="form-group">
		    <label for="ci">Cedula de identidad</label>
		    <input type="text" class="form-control" id="ci" name="ci" placeholder="Cedula de identidad">
		  </div>

		  <div class="form-group">
		    <label for="nombres">Nombres</label>
		    <input type="int" class="form-control" id="nombres" name="nombres" placeholder="Nombres">
		  </div>

		  <div class="form-group">
		    <label for="paterno">Apellido Paterno</label>
		    <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Apellido Paterno">
		  </div>
		  <div class="form-group">
		    <label for="materno">Apellido materno</label>
		    <input type="text" class="form-control" id="materno" name="materno" placeholder="Apellido Materno">
		  </div>
		  <div class="form-group">
		    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
		    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento">
		  </div>

		  <div class="form-group">
		    <label for="usuario">Nombre de usuario</label>
		    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de usuario">
		  </div>

		  <div class="form-group">
		    <label for="correo">Correo Electronico</label>
		    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electronico">
		  </div>

		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
		  </div>
		  <div class="form-group">
		    <label for="item">item</label>
		    <input type="text" class="form-control" id="item" name="item" placeholder="item">
		  </div>

		  <button type="submit" class="btn btn-default">Registrar</button>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_registro.js"></script><!-- valida tipo de datos -->
	</body>
</html>