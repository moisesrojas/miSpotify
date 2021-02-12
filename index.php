<?php $titulo = "Mi Spotify - FRONT END";
include_once("admin/includes/config.php");
$consulta = "SELECT * FROM canciones";
$ejecutaConsulta = mysqli_query($conexion, $consulta);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href="css/style-front.css" rel="stylesheet">

    <title><?php echo $titulo; ?></title>
  </head>
  <body>
	  
  <header>
	  <div class="container">
		  <div class="row">
			  <div class="col-4">
				  <img src="img/logo-bco.png">
			  </div>
			  <div class="col-8">
				  <nav class="menu">
					  <ul>
						  <li>Menú 1</li>
						  <li>Menú 2</li>
					      <li>Menú 3</li>
					  </ul>
				  </nav> 
			  </div>
		  </div>
	  </div>
  </header>
  
  <section id="novedades">
	  <div class="container">
		  <div class="row">
			  <div class="col-12">
				  
			  	<?php 
			  	while ($row = mysqli_fetch_assoc($ejecutaConsulta)){
					echo "<div class='bloque'>";
					echo "<img class='portada' src='img/" . $row['portada'] . "'>";
					echo "<br>";
					echo $row['titulo'];
					echo "</div>";
				}
				?>
			  </div>
		  </div>
	  </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>