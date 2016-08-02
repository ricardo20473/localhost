<div class="col-md-12">
	<div class="content">
		<div class="title">
			<h1>Proyectos</h1>
		</div>
		
		<?php
			$arreglo = array();
			// echo "<table class='table '>\n";
			$directorio = opendir("../.././");
			while ($archivo = readdir($directorio))
			   	{  
					$nombreArch = ucwords($archivo);
					$arreglo[] = array(0 => $nombreArch, 1 => $archivo);
					//$nombreArch = str_replace("..", "Atras", $nombreArch);
					// echo "<tr>\n<td>\n<a href='$archivo'>\n";
					// echo "<img src='localhost/carpeta.png' width='20' alt='Ver $nombreArch'";
					// echo " border=0>\n";
					// echo "<b>&nbsp;$nombreArch</b></a></td>\n";
					// echo "\n</tr>\n";
				}
			closedir($directorio); 
			// echo "</table>\n";
		?>
		<div class="content-text">
			<table class="table table-hover">
				<?php
					sort($arreglo);
					for ($i=0; $i < count($arreglo) ; $i++) { 
						if ($arreglo[$i][0] !='..' && $arreglo[$i][0] !='.' && $arreglo[$i][0] !='Index.php' && $arreglo[$i][0] !='Localhost' && $arreglo[$i][0] !='Phpmyadmin') {
							echo "<tr>";
							echo "<td>";
							echo "<a href=".$arreglo[$i][1]." style='text-decoration: none;'><span class='fa fa-folder-open'></span> &nbsp;<b>".$arreglo[$i][0]."</b></a>";
							echo "</td>";
							echo "</tr>";
						}
					}
					
				?>
			</table>
		</div>
	</div>
</div>