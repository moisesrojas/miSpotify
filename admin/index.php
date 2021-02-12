<?php $titulo = "Mi Spotify - BACK END";
include_once("includes/config.php");
$consulta = "SELECT * FROM canciones";
$ejecutaConsulta = mysqli_query($conexion, $consulta);
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
	
	<div class='container'>
	<?php 
	while ($row = mysqli_fetch_assoc($ejecutaConsulta)){
		
		echo "<div class='cancion'>";
		echo $row['id_cancion'];
		echo "<br>";
		echo $row['titulo'];
		echo "<br>";
		echo $row['artista'];
		echo "<br>";
		echo "<img class='portada' src='img/" . $row['portada'] . "'>";
		echo "<a href='includes/eliminarcancion.php?id=" . $row['id_cancion'] . "'>Eliminar</a>";
		echo "</div>";
	}
	?>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>