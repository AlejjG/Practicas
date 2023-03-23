<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "BD_Practica";
$conexion = mysql_connect($servidor, $usuario, $password, $bd);
if($conexion->connect_error){
    die("Error al conectar la bd". $conexion->connect_error);
}

?>