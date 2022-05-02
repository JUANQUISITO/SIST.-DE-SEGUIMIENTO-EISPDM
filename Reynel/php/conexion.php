<?php
$host="localhost";
$user="root";
$password="";
$db="bd_seguimiento";
//$con = new mysqli($host,$user,$password,$db);



// Crear conexion
$con = mysqli_connect($host, $user, $password, $db);
// elegir conexion
if (!$con) {
    die(".fallo de conexion: " . mysqli_connect_error());
}
echo "conexion ok";
//mysqli_close($con);
 return $con;


?>