<?php
ob_start();
include_once("config.php");
$t = $_POST['titulo'];
$a = $_POST['artista'];
$al = $_POST['album'];
$g = $_POST['genero'];
$l = $_POST['lanzamiento'];
$c = $_POST['compositor'];
$o = $_POST['oyentes'];
$le = $_POST['letra'];
$p = $_POST ['portada'];

$consulta = "INSERT INTO canciones (titulo,artista,album,genero,fechaLanzamiento,compositor,oyentes,letra,portada)
			 VALUES ('$t','$a','$al','$g','$l','$c',$o,'$le','$p')";
mysqli_query($conexion, $consulta);
header('Location:../index.php');
ob_flush();
?>