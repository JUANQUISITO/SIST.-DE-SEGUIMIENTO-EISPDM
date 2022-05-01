<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/menu2.php"; ?><!-- mejora visual-->
<div class="container">
<div class="row">
<div class="col-md-10">
<center><h2>Datos de registro</h2> </center>
		



		<form role="form" name="registro" action="php/registro.php" method="post">
		 		
		
		<center><table>
		<tr>
		    <div class="form-group">				
		    <td WIDTH="190" HEIGHT="50"><label for="ci">Cedula de identidad:</label></td>
			<td> <input type="text" class="form-control" id="ci" name="ci" placeholder="Cedula de identidad"></td>			
			 </div>
		</tr>
		<tr> 
		  <div class="form-group">		  
			 
		    <td WIDTH="190" HEIGHT="50"><label for="nombres">Nombres:</label></td>
		    <td><input type="int" class="form-control" id="nombres" name="nombres" placeholder="Nombres"></td>
						
		  </div>
		  </tr>
		  <tr>
		  <div class="form-group">
		    <td WIDTH="190" HEIGHT="50"><label for="paterno">Apellido Paterno:</label></td>
		    <td><input type="text" class="form-control" id="paterno" name="paterno" placeholder="Apellido Paterno"></td>						
		  </div>
		  </tr>
		  <tr>
		  <div class="form-group">		  
			
			<td WIDTH="190" HEIGHT="50"> <label for="materno">Apellido Materno:</label></td>
		    <td><input type="text" class="form-control" id="materno" name="materno" placeholder="Apellido Materno"></td>
						
		  </div>
		  </tr>
		  <tr>
		  <div class="form-group">		 
			
		    <td WIDTH="190" HEIGHT="50"><label for="correo">Correo Electronico:</label></td>
			<td> <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electronico"></td>
				
		  </div>
		  </tr>	
		  <tr>
		  <div class="form-group">		  
			
		    <td WIDTH="190" HEIGHT="50"><label for="fecha_nacimiento">Fecha de Nacimiento:</label></td>
		    <td><input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento"></td>
						
		  </div>
		  </tr>
		  <tr>		  
		  <div class="form-group">		 
			
		    <td WIDTH="190" HEIGHT="50"><label for="item">Celular:</label></td>
		    <td><input type="text" class="form-control" id="Celular" name="Celular" placeholder="ingrese su numero de celular"></td>
						
		  </div>
		  </tr>
			<!--Aqui cargar carreras de la base de datos-->
		<tr>
		  	<div class="form-group">		
			<td WIDTH="190" HEIGHT="50"> <label for="item">Carrera:</label></td>
			<td><select name="ciLocationUser" class="form-control" id="ciLocationUser">
			<option value="sc">--Seleccione la carrera---</option>  
			<option value="ii">Informatica Industrial</option>  
			<option value="qi">Quimica Industrial</option> 
			<option value="ei">Electriciad Industrial</option> 
			<option value="ma">Mecanica Automotriz</option> 				
			</select>	</td>					
		  	</div>
		  <tr>

			<!--Aqui cargar gestion de la base de datos-->
			<tr>
		    <div class="form-group">  			
			<td WIDTH="190" HEIGHT="50"> <label for="item">Gestión:</label></td>
		    <td><select name="ciLocationUser" class="form-control" id="ciLocationUser"> 
			<option value="sc">--Seleccione la Gestión---</option>  
			<option value="ii">I/2021</option>  
			<option value="qi">II/2021</option> 
			<option value="ei">I/2022</option> 								
			</select>	</td> 		
		    </div>
			<tr>

</table> </center>
		  <center><button type="submit" class="btn btn-default">Registrar</button> </center>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_registro.js"></script><!-- valida tipo de datos -->
	</body>
</html>