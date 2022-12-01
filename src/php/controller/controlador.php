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

    public function saveMinijuego(){
        // echo 'guardar nuevo mini';
        $this->vista = 'listar';
        $this->modelo->saveMinijuego($_POST);
        return $this->modelo->getMinijuego();
    }

}

// $app = new Controlador();
?>