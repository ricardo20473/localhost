<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" type="image/png" href="localhost/lamp.png">
		<title>localhost</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="localhost/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="localhost/estilo.css">

		<script type="text/javascript" src="localhost/bootstrap/js/bootstrap.js"></script>
	</head>

	<body>

		<div class="container">
			<div class="row ">
				<div class="col-md-1 "></div>
				<div class="col-md-10 fondo">
					<?php
						echo "<img src='localhost/lamp.png' height='150' width='200'>";
						echo "<div class='linea'></div>";
						echo "<h3>Herramientas</h3>";
						echo "<a href='localhost/info.php'><img src='localhost/llave.png' width='20'> <b>phpinfo()</b></a> <br />";
						echo "<a href='phpmyadmin/index.php'><img src='localhost/llave.png' width='20'> <b>phpmyadmin</b></a> <br /><br />";
						echo "<div class='linea'></div>";
						echo "<h3>Proyectos</h3>\n";
						echo "<table class='table '>\n";
						$directorio = opendir("./");
						while ($archivo = readdir($directorio))
						   	{  
								$nombreArch = ucwords($archivo);
								$nombreArch = str_replace("..", "Atras", $nombreArch);
								echo "<tr>\n<td>\n<a href='$archivo'>\n";
								echo "<img src='localhost/carpeta.png' width='20' alt='Ver $nombreArch'";
								echo " border=0>\n";
								echo "<b>&nbsp;$nombreArch</b></a></td>\n";
								echo "\n</tr>\n";
							}
						closedir($directorio); 
						echo "</table>\n";
					?>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		
	</body>
</html>