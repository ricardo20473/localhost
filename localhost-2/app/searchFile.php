<?php
    $arreglo = array();
    $directorio = opendir("../.././");
    while ($archivo = readdir($directorio))
        {  
            // $nombreArch = ucwords($archivo);
            $nombreArch = ($archivo);
            $arreglo[] = array(0 => $nombreArch, 1 => $archivo);
        }
    closedir($directorio); 

    echo json_encode($arreglo);
?>