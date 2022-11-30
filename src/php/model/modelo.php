<?php
// Javier Florencio Airado
// include ('conexion.php');

class Modelo {
    private $db;
    private $proyectos;


    public function __construct() {
        $this->db = Conectar::conexion();
        $this->proyectos = array();
    }
        
    public function getMinijuego(){
        $consulta=$this->db->query("SELECT * from minijuegos;");
        
            while($filas=$consulta->fetch_assoc()){
                $this->proyectos[]=$filas;
            }
            //var_dump($this->proyectos);
            return $this->proyectos;
    }

    public function saveMinijuego($post){
        // var_dump($post);

        $id = $nombre = $urlMinijuego = $imagenMinijuego = $descripcion= "";

        if(isset($post["nombre"])) $nombre = $post["nombre"];
        if(isset($post["urlMinijuego"])) $urlMinijuego = $post["urlMinijuego"];
        if(isset($post["imagenMinijuego"])) $imagenMinijuego = $post["imagenMinijuego"];
        if(isset($post["descripcion"])) $descripcion = $post["descripcion"];

        $sql=("INSERT INTO minijuegos (id, nombre, urlMinijuego, imagenMinijuego, descripcion) values(default, ?, ?, ?, ?);");
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('ssss', $nombre, $urlMinijuego, $imagenMinijuego, $descripcion);
        // $stmt->execute([$nombre, $urlMinijuego, $imagenMinijuego, $descripcion]);
        $stmt->execute();

    }

}
?>