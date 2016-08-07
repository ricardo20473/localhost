<div class="col-md-12">
	<div class="content">
		<div class="title">
			<h1>Proyectos</h1>
		</div>
		
		<?php
			$arreglo = array();
			$directorio = opendir("../.././");
			while ($archivo = readdir($directorio))
			   	{  
					$nombreArch = ucwords($archivo);
					$arreglo[] = array(0 => $nombreArch, 1 => $archivo);
				}
			closedir($directorio); 
		?>
		<div class="content-text" ng-init="directorio = <?php echo htmlspecialchars(json_encode($arreglo)); ?>">
			<div  class="col-md-6">
				<table class="table table-hover table-bordered" >
					<tr>
						<th class="center">
							Num
						</th>
						<th>
							Titulo
						</th>
						<th>
							Acciones
						</th>
					</tr>
					<tr dir-paginate="dir in arreglo | orderBy:'0' | filter:search | itemsPerPage:10" >
						<td class="center">
							{{$index+1}}
						</td>
						<td>
							<a style='text-decoration: none;'><span class='fa fa-folder-open'></span> &nbsp;<b>{{dir[0]}}</b></a>
						</td>
						<td>
							<a href="{{dir[1]}}" class="btn btn-default">Abrir</a>
							<a href="{{dir[1]}}" target="_blank" class="btn btn-default">Abrir otra ventana</a>
						</td>
					</tr>
				</table>
			
				<div class="col-md-6 pull-left" >
	                <dir-pagination-controls max-size="10" direction-links="true" boundary-links="true" ></dir-pagination-controls>
	            </div>
            </div>

            <div  class="col-md-1">
            </div>
            <div  class="col-md-5">
            	<h3>Abiertos recientemente</h3>
            </div>
		</div>
	</div>
</div>