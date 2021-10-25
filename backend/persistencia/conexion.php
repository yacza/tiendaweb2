<?php
class conexion{
    private $server="localhost";
    private $usr="root";
    private $pass="";
    private $db="supercito";

        $mysqli=new $mysqli($this->server,
        $this->usr,
        $this->pass,
        $this->db);
        
}
?>