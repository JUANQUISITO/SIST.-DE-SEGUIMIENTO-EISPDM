<?php


if(!empty($_POST)){
	if(isset($_POST["usuario"]) &&isset($_POST["password"])){
		if($_POST["usuario"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$sql1= "select * from responsable where usuario=\"$_POST[usuario]\"  and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["encargado"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";	
				

				
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../tramites.php';</script>";			
			}
		}
	}
}



?>