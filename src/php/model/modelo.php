<?php
// Javier Florencio Airado
include ('db/db.php');

class Modelo {
    private $db;
    private $proyectos;


    public function __construct() {
        $this->db = Conectar::conexion();
        $this->proyectos = array();
    }
        
    public function getProyectos(){
        $consulta=$this->db->query("select * from minijuegos;");
            while($filas=$consulta->fetch_assoc()){
                $this->proyectos[]=$filas;
            }
            //var_dump($this->proyectos);
            return $this->proyectos;
    }

}
?>