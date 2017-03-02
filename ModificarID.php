<?php
include "conexion.php";

$Id=$_POST["ID"];
$nom=$_POST["Nom"];
$dir=$_POST["Dir"];
$rfc=$_POST["Rfc"];
$tel=$_POST["Tel"];
$clasif=$_POST["Clasif"];
$foto=$_POST["Foto"];
$lat=$_POST["Lat"];
$longit=$_POST["Long"];
//$sql="SELECT * FROM servicios WHERE Id_Servicio=$Id";
//ResultSet rs= st.executeQuery("update Datos.ALUMNOS set Nombre = '"+nombre+"',APPaterno='"+apaterno+"',APMaterno='"+amaterno+"',IDCarrera='"+carrera+"' where IDAlumno = '"+Ncontrol+"'");
$sql="UPDATE servicios SET Nombre_servicio='$nom',Direccion='$dir',RFC='$rfc',Telefono='$tel',Clasificacion='$clasif',Foto='$foto',Latitud='$lat',Longitud='$longit' WHERE Id_Servicio='$Id'";
$reg=mysqli_query($conn,$sql);
if($reg){
echo "Nombre:".$nom." Dirección:".$dir." RFC:".$rfc." Tel:".$tel." Clasificación:".$clasif." Foto:".$foto." Latitud:".$lat." Longitud:".$longit;
}else{
echo "Error al registrar los datos:".mysqli_error();	
}

mysqli_close($conn);
?>

