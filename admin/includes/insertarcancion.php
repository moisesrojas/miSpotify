<?php
ob_start();
include_once("config.php");
$t = htmlentities($_POST['titulo'], ENT_QUOTES);
$a = htmlentities($_POST['artista'], ENT_QUOTES);
$al = htmlentities($_POST['album'], ENT_QUOTES);
$g = $_POST['genero'];
$l = $_POST['lanzamiento'];
$c = $_POST['compositor'];
$o = $_POST['oyentes'];
$le = htmlentities($_POST['letra'], ENT_QUOTES);
$p = $_POST ['portada'];

$consulta = "INSERT INTO canciones (titulo,artista,album,genero,fechaLanzamiento,compositor,oyentes,letra,portada)
			 VALUES ('$t','$a','$al','$g','$l','$c',$o,'$le','$p')";
mysqli_query($conexion, $consulta);
header('Location:../index.php');
ob_flush();
?>