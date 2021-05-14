<?php
//Conexion con Clase para la base de datos
include("lib/DBManager.php");

class ContenidoController {
    
    private $results;
    private $manager;    
    function __construct() {
        $this->manager = new DBManager();
        $query = 'SELECT * FROM contenido';
        $this->results = $this->manager->getInformation($query);
    }
    public function index(){
        $resultado_manager = $this->results;
        require('view/contenido/index.php');
    }

    public function detail($id){
        $query = 'SELECT * FROM contenido where id ='.$id;
        $this->results = $this->manager->getInformation($query);
        $resultado_manager = $this->results;
        require('view/contenido/detail.php');
    }

    public function new(){
        require('view/contenido/new.php');
    }
}


?>