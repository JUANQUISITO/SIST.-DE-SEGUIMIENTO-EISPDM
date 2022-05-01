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

		<form role="form" name="login" action="tramites.php" method="post">


		<center><table>
			<tr>
		  <div class="form-group">
		  <td WIDTH="190" HEIGHT="50"><FONT COLOR="BLUE"><label for="usuario">Usuario</label></td>
		  <td> <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese usuario"></td>
			</tr>
		  </div>

		  <tr>
		  <div class="form-group">
		  <td WIDTH="190" HEIGHT="50"><FONT COLOR="BLUE"> <label for="password">Contraseña </label></td>
		  <td>  <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su Contrase&ntilde;a"></td>
			</tr>
		  </div>
		</table> </center>
<br>

          <center> <button href="./tramites.php">Consultar</button></center>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>