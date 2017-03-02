<?php

include "conexion.php";
$Id=$_POST["ID"];
//alter table personal drop pasatiempo
$sql="DELETE FROM servicios WHERE Id_Servicio=$Id";
$result=mysqli_query($conn,$sql);
$datos= array();
if($result){
echo "registro eliminado con este ID:";
}else{
	echo "No se encontro ningun registro con este ID:".mysqli_error();
}
mysqli_close($conn);
echo json_encode($datos);
?>