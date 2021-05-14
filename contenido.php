<?php
//Conexion con Clase para la base de datos

//include("lib/DBManager.php");
include("ContenidoController.php");
//$manager = new DBManager();

//$query = 'SELECT * FROM contenido';
//$resultado_manager = $manager->getInformation($query);
//var_dump($resultado_manager);

//echo $manager->deleteInformation('apunte','45');

/*


// Conectando, seleccionando la base de datos
$link = mysqli_connect('localhost', 'taller2021.manuel.user', '123qwe123qwe','taller2021_1')
    or die('No se pudo conectar: ' . mysqli_error());
//echo 'Connected successfully';

// Realizar una consulta MySQL
$query = 'SELECT * FROM contenido';
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
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

// Liberar resultados
mysqli_free_result($result);

// Cerrar la conexión
mysqli_close($link);

require('view/contenido/index.php');

echo $_SERVER["REQUEST_URI"];

*/
//RUTA

$home = "/IICT7702/contenido.php/";
$ruta = str_replace($home, "", $_SERVER["REQUEST_URI"]);
$array_ruta = array_filter(explode("/", $ruta));


$controller = new ContenidoController();

//logica de rutas
if (isset($array_ruta[0]) && $array_ruta[0] == "ver" && is_numeric($array_ruta[1])){
    $controller->detail($array_ruta[1]);
}
else{
    if (isset($array_ruta[0]) && $array_ruta[0] == "nuevo") {
        $controller->new();
    }
    else  {
        $controller->index();
    }
    
}






?>