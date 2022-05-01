<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/menu1.php"; ?><!-- mejora visual-->
<div class="container">
<div class="row">
<div class="col-md-6">
<center><h2>Estado de tramite</h2> </center>
		



		<form role="form" name="registro" action="php/registro.php" method="post">
		 		
		
		<center><table>
		<div class="form-group">
			<tr>	
		    <td WIDTH="190" HEIGHT="50"><FONT COLOR="BLUE"><label for="ci">C.I.:</label></FONT></td>
			<td WIDTH="190" HEIGHT="50"><label for="ci">12345679</label></td>
			</tr>
			 </div>
		  
		  <div class="form-group">		  
			<tr> 
		    <td WIDTH="190" HEIGHT="50"><FONT COLOR="BLUE"><label for="nombres">Nombres:</label></FONT></td>
			<td WIDTH="190" HEIGHT="50"><label for="nombres">Jose Luis</label></td>
			</tr>			
		  </div>

		  <div class="form-group">		  
			<tr>
		    <td WIDTH="190" HEIGHT="50"><FONT COLOR="BLUE"><label for="paterno">Apellido Paterno:</label></FONT></td>
			<td WIDTH="190" HEIGHT="50"><label for="paterno">Cespedes</label></td>
			</tr>			
		  </div>

		  <div class="form-group">		  
			<tr>
			<td WIDTH="190" HEIGHT="50"> <FONT COLOR="BLUE"><label for="materno">Apellido Materno:</label></FONT></td>
		    <td WIDTH="190" HEIGHT="50"> <label for="materno">Caceres</label></td>
			</tr>			
		  </div>

		  <div class="form-group">		 
			<tr>
		    <td WIDTH="190" HEIGHT="50"><FONT COLOR="BLUE"><label for="correo">Fecha de Inicio:</label></FONT></td>
			<td WIDTH="190" HEIGHT="50"><label for="correo">15/04/2022</label></td>
		</tr>			
		  </div>


		  <div class="form-group">		 
			<tr>
			  <td WIDTH="190" HEIGHT="50"><FONT COLOR="BLUE"><label for="correo">Estado:</label></FONT></td>
			<td WIDTH="190" HEIGHT="50"><FONT COLOR="RED"><label for="correo">EN CURSO</label></FONT></td>
		</tr>			
		  </div>

		 

		  
			
					 
					
		  	
		 
</table> </center>
<center> <button href="./index.php.php">Salir</button></center>
		</div>
		</div>
		</div>

		<script src="js/valida_registro.js"></script><!-- valida tipo de datos -->
</html>