<?php $titulo = "Editar canción - BACK END"; 
$id_url = $_GET["id"];
include_once("includes/config.php");
$consultacancion = "SELECT * FROM canciones WHERE id_cancion = '$id_url'";
$ejecutaconsulta = mysqli_query($conexion,$consultacancion);

while ($row = mysqli_fetch_assoc($ejecutaconsulta)){
	$t = $row['titulo'];
	$a = $row['artista'];
	$al = $row['album'];
	$g = $row['genero'];
	$l = $row['fechaLanzamiento'];
	$c = $row['compositor'];
	$o = $row['oyentes'];
	$le = $row['letra'];
	$p = $row['portada'];
}

?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet">

    <title><?php echo $titulo; ?></title>
  </head>
  <body>
    
	
    <header>
  	  <div class="container">
  		  <div class="row">
  			  <div class="col-4">
  				  <img src="img/logo.png">
  			  </div>
  			  <div class="col-8">
  				  <nav class="menu">
  					  <ul>
  						  <li><a href="crearcancion.php">Crear canción +</a></li>
  						  <li><a href="../">Vista de usuario</a></li>
  					  </ul>
  				  </nav> 
  			  </div>
  		  </div>
  	  </div>
    </header>
	
	<h1>Editar canción</h1>
	
	<section id="tablaregistros">
		<form method="POST" action="includes/actualizarcancion.php">
			<span>Título: </span>
			<input type="text" name="titulo" value="<?php echo $t; ?>">
			<br><br>
			<span>Artísta: </span>
			<input type="text" name="artista" value="<?php echo $a; ?>">
			<br><br>
			<span>Álbum: </span>
			<input type="text" name="album" value="<?php echo $al; ?>">
			<br><br>
			<span>Género: </span>
			<input type="text" name="genero" value="<?php echo $g; ?>">
			<br><br>
			<span>Lanzamiento: </span>
			<input type="date" name="lanzamiento" value="<?php echo $l; ?>">
			<br><br>
			<span>Compositor/a: </span>
			<input type="text" name="compositor" value="<?php echo $c; ?>">
			<br><br>
			<span>Oyentes: </span>
			<input type="text" name="oyentes" value="<?php echo $o; ?>">
			<br><br>
			<span>Letra: </span>
			<textarea name="letra"> <?php echo $le; ?> </textarea>
			<br><br>
			<span>Portada: </span>
			<input type="text" name="portada" value="<?php echo $p; ?>">
			<br><br>
			<input type="hidden" name="id_cancion" value="<?php echo $id_url; ?>">
			<input type="submit" name="submit" value="Actualizar Canción">
		</form>
	</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>