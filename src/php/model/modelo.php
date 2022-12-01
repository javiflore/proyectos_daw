<?php
// Javier Florencio Airado
// include ('conexion.php');

class Modelo {
    private $db;
    private $proyectos;
    private $tabla = "minijuegos";


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

    public function consultaId($id){
        print_r($id);

        $consulta=$this->db->query(" SELECT * from minijuegos WHERE id=".$id."; ");
        // $stmt=$this->db->query($sql);
        // $stmt->bind_param('i', $id);
        // $stmt->execute();
        return $consulta->fetch_assoc(); // devuelve la fila
    }

    public function saveMinijuego($post, $file){
        var_dump($post);

        $id = $nombre = $urlMinijuego = $imagenMinijuego = $descripcion= "";

        // comprobamos si exite el minijuego

     

        // seteamos el file
        $nombreImagen = $file['imagenMinijuego']['name'];
        $rutaImagen = "../img/minijuegos/".$nombreImagen;
        $archivoTemporal = $file['imagenMinijuego']['tmp_name'];
        $subir = move_uploaded_file($archivoTemporal, $rutaImagen);



        if(isset($post["id"]) && $post["id"] != ""){
            
            if(isset($post["nombre"])) $nombre = $post["nombre"];
            if(isset($post["urlMinijuego"])) $urlMinijuego = $post["urlMinijuego"];
            // if(isset($file)) $imagenMinijuego = $rutaImagen;
            if(isset($post["descripcion"])) $descripcion = $post["descripcion"];

            print_r($post["id"]);

            $sql=("UPDATE minijuegos SET nombre = ?, urlMinijuego= ?, descripcion = ? WHERE id=".$post["id"].";");
            $stmt = $this->db->prepare($sql);
            $stmt->bind_param('sss', $nombre, $urlMinijuego, $descripcion);
            // $stmt->execute([$nombre, $urlMinijuego, $imagenMinijuego, $descripcion]);
            $stmt->execute();
            $stmt->close();

        }else{
            if(isset($post["nombre"])) $nombre = $post["nombre"];
            if(isset($post["urlMinijuego"])) $urlMinijuego = $post["urlMinijuego"];
            if(isset($file)) $imagenMinijuego = $rutaImagen;
            if(isset($post["descripcion"])) $descripcion = $post["descripcion"];

            $sql=("INSERT INTO minijuegos (id, nombre, urlMinijuego, imagenMinijuego, descripcion) values(default, ?, ?, ?, ?);");
            $stmt = $this->db->prepare($sql);
            $stmt->bind_param('ssss', $nombre, $urlMinijuego, $imagenMinijuego, $descripcion);
            $stmt->execute();
            $stmt->close();
        }      
    }

    public function eliminarMinijuego($id){

        $sql=("DELETE FROM minijuegos WHERE id=".$id.";");
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $stmt->close();
    }

}
?>