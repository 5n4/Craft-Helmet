<html>
	<head>
		<title>Craft-Helmet</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/mystyle.css">
		<?php require 'connection.php';?>
	</head>
	<body>
		<!--head-->
		<?php require'header.php';?>
		<!--body-->
		<?php
			try{
				$result = $connection->query("select * from product where active=1"); //solicitud
				if ($result->num_rows > 0) { //Si hay mas de 0 resultados
					while($row = $result->fetch_assoc()) { //Mientras existan resultados entregara datos
						echo '<div class="showcase">'; //Vitrina de productos
							echo '<img src="data:'.$row["type"].'; base64,'.base64_encode($row["image"]).'">';
							//insercion de imagen, utilizando en la base de datos un campo blob 
							//ademas de la codificacion de byte en base64.
							echo '<h1>'.$row["name"].'</h1>';
							echo '<p>'.$row["description"].'</p>';
							echo '<div class="showcaseDownload">'; //seccion de descarga
								echo '<form class="download">';	//descarga
									echo '<input type="submit" value="Download">'; //Boton descarga
								echo '</form>';
							echo '</div>';
						echo '</div>';
					}
				} else {
					echo '<div class="showcase">'; //NO OLVIDAR MANEJAR
						echo '<p>there are no active products.</p>';
					echo '</div>';
				}
				$connection->close(); //Cerrar conexion.
			}catch(Exception $e){
				die ("Error: ".$e->getMessage());
			}
		?>
		<!--footer-->
		<?php include 'footer.php';?>
	</body>
</html>