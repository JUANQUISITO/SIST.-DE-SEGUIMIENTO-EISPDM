<?php
session_start();

//Recibir los datos del formulario
$usuario = $_POST['usuario'];
$ps = $_POST['password'];

//Conectar a la Base de datos
require_once("./php/conexion.php");
//Preparar la consulta
$consulta = "SELECT * FROM responsable WHERE usuario = '$usuario' AND password = '$ps';";
//Ejecutar la consulta
$respuesta = mysqli_query($con, $consulta);
$numeroFilas = mysqli_num_rows($respuesta);

if ($numeroFilas > 0) {
    //ES correcto el usuario
    $fila = mysqli_fetch_array($respuesta);
    $_SESSION['usuario'] = $fila['usuario'];
    $_SESSION['nombres'] = $fila['nombres'];
    $_SESSION['paterno'] = $fila['paterno'];
    $_SESSION['materno'] = $fila['materno'];
    $_SESSION['ci_responsable'] = $fila['ci_responsable'];
    $_SESSION['item'] = $fila['item'];
    $_SESSION['valido'] = true;
    header("Location: tramites.php");
} else {
    // No es correcto el usuario
    header("Location: index.php?error=1");
}
