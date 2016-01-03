<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
        <div class="">
			<div class="col-md-12">
				<h1>Buscar</h1>
			</div>

			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				<center>
					<form method="post" action="#">
						<div class="form-group">
						    <label class="sr-only" for="buscar">Buscar</label>
						    <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Buscar proyecto" required>
						</div>
						<button type="submit" class="btn btn-success">Buscar</button>
						<button type="reset" class="btn btn-danger">Cancelar</button>
					</form>
				</center>
			</div>
			<div class="col-md-4">
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php
						$buscar = $_POST['buscar'];

						echo $buscar;
					?>
					<?php
						$arreglo = array();
						$directorio = opendir("../.././");
						while ($archivo = readdir($directorio))
						   	{  
								$nombreArch = ucwords($archivo);
								$arreglo[] = array(0 => $nombreArch, 1 => $archivo);
							}
						closedir($directorio); 

						sort($arreglo);
						for ($i=0; $i < count($arreglo) ; $i++) { 
							if ($arreglo[$i][0] !='..' && $arreglo[$i][0] !='.' && $arreglo[$i][0] !='Index.php' && $arreglo[$i][0] !='Localhost' && $arreglo[$i][0] !='Phpmyadmin') {
								echo "<pre>";
								echo "<a href=".$arreglo[$i][1]." style='text-decoration: none;' target='_blank'><b>".$arreglo[$i][0]."</b></a>";
								echo "</pre>";
							}
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>