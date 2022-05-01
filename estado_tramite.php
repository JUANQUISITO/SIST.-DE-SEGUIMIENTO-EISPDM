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
<div class="col-md-10">
<center><h2>Estado de tramite</h2> </center>
		



		<form role="form" name="registro" action="php/registro.php" method="post">
		 		
		
		<center><table>
		<div class="form-group">
			<tr>	
		    <td WIDTH="190" HEIGHT="50"><FONT COLOR="BLUE"><label for="ci">C.I.:</label></FONT></td>
			<td  HEIGHT="50"><label for="ci">12345679</label></td>
			</tr>
			 </div>
		 <tr> 
		  	<div class="form-group">		  
		    <td HEIGHT="50"><FONT COLOR="BLUE"><label for="nombres">Nombres:</label></FONT></td>
			<td  HEIGHT="50"><label for="nombres">Jose Luis</label></td>			
		     </div>
		  </tr>
		  <tr>
		    <div class="form-group">		  
		    <td  HEIGHT="50"><FONT COLOR="BLUE"><label for="paterno">Apellido Paterno:</label></FONT></td>
			<td  HEIGHT="50"><label for="paterno">Cespedes</label></td>		
		    </div>
		  </tr>
		 <tr>
		   <div class="form-group">		  
			<td  HEIGHT="50"> <FONT COLOR="BLUE"><label for="materno">Apellido Materno:</label></FONT></td>
		    <td  HEIGHT="50"> <label for="materno">Caceres</label></td>						
		  </div>
		</tr>
		<tr>
		  <div class="form-group">		
		    <td  HEIGHT="50"><FONT COLOR="BLUE"><label for="fecha_inicio">Fecha de Inicio:</label></FONT></td>
			<td HEIGHT="50"><label for="correo">15/04/2022</label></td>					
		  </div>
		  </tr>
		  <tr>
		  <div class="form-group">		
			<td  HEIGHT="50"><FONT COLOR="BLUE"><label for="estado">Estado:</label></FONT></td>
			<td  HEIGHT="50"><FONT COLOR="RED"><label for="correo">EN CURSO</label></FONT></td>			
		  </div>
		  </tr>	
			</table> </center>

		  <center><button type="submit" class="btn btn-default" href="./loyout.php">Salir</button> </center>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_registro.js"></script><!-- valida tipo de datos -->
</html>