## Crear una lista de carpetas con PHP

PHP tiene la capacidad de crear un array con todos los archivos de una carpeta en nuestro servidor. En este script analizaremos el contenido de una carpeta y crearemos una tabla con la lista de los archivos que la componen. 

**Código**

    <?php
    echo "<h3>Index</h3>\n";
    echo "<table>\n";
    $directorio = opendir(".");
    while ($archivo = readdir($directorio))
       {
       $nombreArch = ucwords($archivo);
       $nombreArch = str_replace("..", "Atras", $nombreArch);
       echo "<tr>\n<td>\n<a href='$archivo'>\n";
       echo "<img src='./imagenes/carpeta.png' alt='Ver $nombreArch'";
       echo " border=0>\n";
       echo "<b>&nbsp;$nombreArch</b></a></td>\n";
       echo "\n</tr>\n";
       }
    closedir($directorio); 
    echo "</table>\n";
    ?>


Explico brevemente:

$directorio = opendir("."); Abrimos el directorio raíz

while ($archivo = readdir($directorio)) La var archivo es igual a lo leido en el direcorio

echo "<tr>\n<td>\n<a href='$archivo'>\n"; Link al archivo