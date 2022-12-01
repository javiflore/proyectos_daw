<?php
// Javier Florencio Airado
require_once "model/modelo.php";

/**
 *  Clase Controlador. Recibe las peticiones de las vistas, solicita información
 *  u ordena cambios al Modelo
 */
class ControladorMinijuego {

    public function __construct() {
        $this->vista = 'listar';
        $this->modelo = new Modelo();
    }

    public function setMinijuego(){
        // echo 'crear nuevo mini';
        $this->vista = 'aniadir';
    }

    public function getMinijuego() {
        // echo ' nombres minijuegos ';
        return $this->modelo->getMinijuego();
    }

    public function editarMinijuego(){
        $this->vista = 'aniadir';
        if(isset($_GET["id"])) $id = $_GET["id"];
        var_dump($id);
        return $this->modelo->consultaId($id);
    }

    public function saveMinijuego(){
        // echo 'guardar nuevo mini';
        $this->vista = 'listar';

        var_dump($_POST);
        var_dump($_FILES);

        $this->modelo->saveMinijuego($_POST, $_FILES);
        return $this->modelo->getMinijuego();
    }

}

// $app = new Controlador();
?>