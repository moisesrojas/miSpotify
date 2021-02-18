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
$id = $_POST['id_cancion'];

$consulta = "UPDATE canciones SET titulo='$t', artista='$a', album='$al',
	 		genero='$g', fechaLanzamiento='$l', compositor='$c', oyentes='$o',
			letra='$le', portada='$p' WHERE id_cancion";

mysqli_query($conexion, $consulta);
header('Location:../index.php');
ob_flush();
?>