<?php
class DBManager {

    private $host = 'localhost';
    private $user = 'taller2021.manuel.user';
    private $password = '123qwe123qwe';
    private $db = 'taller2021_1';
    private $link;
    private $result;

    function __construct(){
        $this->link = mysqli_connect($this->host,$this->user,$this->password,$this->db)
            or die('No se pudo conectar: ' . mysqli_error());
            //echo 'Connected successfully';
    }

    public function getInformation($sql_query){
        $this->result = mysqli_query($this->link,$sql_query) or die('Consulta fallida: ' . mysql_error());
        $arrayResult = array();
        $rows = array();
        while($row = $this->result->fetch_assoc())
        {
            $rows[] = $row;
        }
        return $rows;
    }
    public function deleteInformation($table,$id){
        $query_delete = "DELETE FROM ".$table." WHERE id = ".$id;
        return $query_delete;
    }

}

?>