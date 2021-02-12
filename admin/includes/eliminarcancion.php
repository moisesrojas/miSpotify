<?php
ob_start();
//INCLUIMOS LA CONEXIÓN
include_once("config.php");
//ALMACENAMOS LA VARIABLE
$id = $_GET['id'];
// DEFINIMOS LA CONSULTA
$consulta_eliminar = "DELETE FROM canciones WHERE id_cancion = '$id'";
//EJECUTAMOS LA CONSULTA
mysqli_query($conexion, $consulta_eliminar);
//REGRESAMOS EL USUARIO AL INDEX
header('Location:../index.php');
ob_flush();
?>