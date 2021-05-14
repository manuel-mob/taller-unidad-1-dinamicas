<?php

?>
<h1>Contenido</h1>
<a href="index.php">Agregar nuevo contenido</a>
<a href="contenido.php/nuevo">Agregar nuevo contenido</a>
<?php 
// Imprimir los resultados en HTML
echo "<table >\n";
//while ($line = $result->fetch_array(MYSQLI_ASSOC)) {
foreach ($resultado_manager as $line) {
    echo "\t<tr>\n";
    $temp = 0;
    foreach ($line as $col_value) {
        if ( $temp == 0 ){
            echo "\t\t<td><a href='contenido.php/ver/$col_value'>$col_value</a></td>\n";
            $temp = 1;
        }
        else {
            echo "\t\t<td>$col_value</td>\n";
        }    
    }
    echo "\t</tr>\n";
}
echo "</table>\n";


