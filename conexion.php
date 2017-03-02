<?php
/*$servidor="localhost";
$usuario="root";
$pwd="alex";
$BD="servcios_libres";*/

$servidor="mysql.hostinger.mx";
$usuario="u581452214_user1"; //$usuario="u508262852_movil";
$pwd="13940057";
$BD="u581452214_serv"; //$BD="u508262852_movil";

$conn=mysqli_connect($servidor,$usuario,$pwd,$BD)or die("Error al conectarse a la base de datos".mysqli_error());
?>
