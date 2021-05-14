<?php 
$variable = "";
$variable = "<h1>hola mundo!</h1>";
$variable .= "<div>Esta es una <strong>prueba</strong></div>";

//echo $variable;

$form = "";
$form .= "<form method='POST' action='index.php'>";
$form .= "<input type='text' name='nombre' placeholder='Ingresa nombre del contenido'><br>";
$form .= "<textarea name='descripcion'></textarea>";
$form .= "<input type='submit' value='Enviar'>";
$form .= "</form>";

//echo $form;

if ( isset($_POST) && !empty($_POST)){

    //echo "Existen datos en \$_POST<br>";
    /*foreach ( array_keys($_POST) as $key => $value){
        echo $key." = ".$value." (".$_POST[$value].")<br>";
    }
    */
    //echo "Hola como estas ".$_POST['nombre']."<br>";
    //echo "Hola como estas ".$_POST['descripcion']."<br>";

    $QUERY = "INSERT INTO contenido (nombre,descripcion,fecha_creacion,fecha_actualizacion) values";
    $QUERY .= "('".$_POST['nombre']."','".$_POST['descripcion']."',now(),now());";
    //echo $QUERY;

    // Conectando, seleccionando la base de datos
    $link = mysqli_connect('localhost', 'taller2021.manuel.user', '123qwe123qwe','taller2021_1')
    or die('No se pudo conectar: ' . mysql_error());
    echo 'Connected successfully';

    // Realizar una consulta MySQL
    //$query = 'SELECT * FROM contenido';
    $result = mysqli_query($link,$QUERY) or die('Consulta fallida: ' . mysql_error());

    /* Redirecciona a una página diferente en el mismo directorio el cual se hizo la petición */
    //https://www.php.net/manual/es/function.header.php
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'contenido.php';
    header("Location: http://$host$uri/$extra");


}

/*if ( isset($_GET) ) {
    echo "Existen datos en \$_GET<br>";
    foreach ( array_keys($_GET) as $key => $value){
        echo $key." = ".$value." (".$_GET[$value].")<br>";
    }
}

if ( isset($_POST) ){
    echo "Existen datos en \$_POST<br>";
    foreach ( array_keys($_POST) as $key => $value){
        echo $key." = ".$value." (".$_POST[$value].")<br>";
    }
}


foreach (array_keys($_SERVER) as $key => $value ){
    //Imprimir informacion de cada variable encontrada en el arr $_SERVER
    echo $key." = ".$value." => ".$_SERVER[$value]."<br>";
}
var_dump($_SERVER);
*/
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="container-fluid">
    <form method="POST" action="index.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Se debe incorporar un nombre al contenido.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descripcion</label>
    <textarea name="descripcion"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>



    </div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>