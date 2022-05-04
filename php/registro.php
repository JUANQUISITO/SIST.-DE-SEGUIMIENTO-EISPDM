<?php
session_start();
require_once("../php/conexion.php");

$ci = $_POST["ci"];
$nombres = $_POST["nombres"];
$paterno = $_POST["paterno"];
$materno = $_POST["materno"];
$correo = $_POST["correo"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$celular = $_POST["celular"];
$carrera = $_POST["carrera"];
$gestion = $_POST["gestion"];

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";


$consulta = "INSERT INTO egresado(ci, nombres, paterno, materno, email, fecha_nacimiento, celular, id_carrera) 
VALUES ('$ci','$nombres','$paterno','$materno','$correo ','$fecha_nacimiento','$celular','$carrera');";

//Ejecutar la consulta
$respuesta = mysqli_query($con, $consulta);
$ciUltimo = mysqli_insert_id($con);
$mensaje = "";
//Verificar la respuesta
if ($respuesta) {
	//$mensaje =  "Se guardo correctamente";
	$tipoConclucion = 1;
	//tipoCIEncargado = 3242342;
	$tipoCIEncargado = $_SESSION['ci_responsable'];
	$estado = 1;
	$gestion = 1;
	$fecha = date("Y-m-d");

	$consulta2 = "INSERT INTO tramite (id_tipo, id_egresado, id_encargado, estado, id_gestion, fecha)
	VALUES ('$tipoConclucion','$ciUltimo','$tipoCIEncargado','$estado','$gestion','$fecha');";
	$respuesta = mysqli_query($con, $consulta2);
	if ($respuesta) {
	} else {
		$mensaje = "Se guardo correctamente";
	}
} else {
	$mensaje = "Error al guardar, intente de nuevo";
}
echo $mensaje;
?>

<div class="form-group">
	<a class="btn btn-default" href='../tramites.php'>Regresar</a>
</div>