<?php $titulo = "Crear canción - BACK END"; ?>
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
	
	<section id="tablaregistros">
		<form method="POST" action="includes/insertarcancion.php">
			<span>Título: </span>
			<input type="text" name="titulo">
			<br><br>
			<span>Artísta: </span>
			<input type="text" name="artista">
			<br><br>
			<span>Álbum: </span>
			<input type="text" name="album">
			<br><br>
			<span>Género: </span>
			<input type="text" name="genero">
			<br><br>
			<span>Lanzamiento: </span>
			<input type="date" name="lanzamiento">
			<br><br>
			<span>Compositor/a: </span>
			<input type="text" name="compositor">
			<br><br>
			<span>Oyentes: </span>
			<input type="text" name="oyentes">
			<br><br>
			<span>Letra: </span>
			<textarea name="letra"></textarea>
			<br><br>
			<span>Portada: </span>
			<input type="text" name="portada">
			<br><br>
			<input type="submit" name="submit" value="Agregar Canción">
		</form>
	</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>