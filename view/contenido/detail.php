<?php

?>
<h1>#</h1>

<?php 
// Imprimir los resultados en HTML
echo '<h1>'.$id.'# Contenido</h1>';
echo "<table >\n";
//while ($line = $result->fetch_array(MYSQLI_ASSOC)) {
foreach ($resultado_manager as $line) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";


