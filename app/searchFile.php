<?php

    $op = $_GET['op'];

    switch ($op) {
        case 'get':
            $arreglo = array();
            $directorio = opendir("../.././");
            while ($archivo = readdir($directorio))
                {  
                    // $nombreArch = ucwords($archivo);
                    $nombreArch = ($archivo);
                    $arreglo[] = array(0 => $nombreArch);
                }
            closedir($directorio); 

            echo json_encode($arreglo);
            break;

        case 'delete':
            $fileName = $_GET['file'];
            chmod('../../'.$fileName, 0777);
            rmdir('../../'.$fileName);
            echo "Eliminado";
            break;
        
        default:
            # code...
            break;
    }
    
?>