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
$id = $_POST['id_cancion'];

$consulta = "UPDATE canciones SET titulo='$t', artista='$a', album='$al',
	 		genero='$g', fechaLanzamiento='$l', compositor='$c', oyentes='$o',
			letra='$le', portada='$p' WHERE id_cancion";

mysqli_query($conexion, $consulta);
header('Location:../index.php');
ob_flush();
?>