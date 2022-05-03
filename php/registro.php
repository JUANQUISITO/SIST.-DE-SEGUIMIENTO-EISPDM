<?php
//verifica si ya existe en la base de datos

// if (!empty($_POST)) {
// 	if (isset($_POST["ci"]) && isset($_POST["nombres"]) && isset($_POST["paterno"]) && isset($_POST["materno"]) && isset($_POST["fecha_nacimiento"]) && isset($_POST["correo"]) && isset($_POST["password"]) && isset($_POST["confirm_password"]) && isset($_POST["item"])) {
// 		if ($_POST["ci"] != "" && $_POST["nombres"] != "" && $_POST["paterno"] != "" && $_POST["materno"] != "" && $_POST["fecha_nacimiento"] != "" &&  $_POST["correo"] != "" && $_POST["password"] == $_POST["confirm_password"] && $_POST["item"] != "") {
// 			include "conexion.php";
// 			$found = false;
// 			$sql1 = "select * from encargado where usuario=\"$_POST[usuario]\" or correo=\"$_POST[correo]\"";
// 			$query = $con->query($sql1);
// 			while ($r = $query->fetch_array()) {
// 				$found = true;
// 				break;
// 			}
// 			if ($found) {
// 				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
// 			}
// 			$sql = "insert into encargado(id_encargado,ci,nombres,paterno,materno,usuario,fecha_nacimiento,correo,contraseña,item) value (\"$_POST[ci]\",\"$_POST[ci]\",\"$_POST[nombres]\",\"$_POST[paterno]\",\"$_POST[materno]\"\"$_POST[fecha_nacimiento]\",\"$_POST[usuario]\",\"$_POST[correo]\",\"$_POST[password]\",\"$_POST[item]\",NOW())";
// 			$query = $con->query($sql);
// 			if ($query != null) {
// 				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../login.php';</script>";
// 			}
// 		}
// 	}
// }

// require_once("./php/conexion.php");
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

//Verificar la respuesta
if ($respuesta) {
	$mensaje =  "Se guardo correctamente";
} else {
	$mensaje = "Error al guardar, intente de nuevo";
}
echo $mensaje;
