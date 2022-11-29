<?php
// Javier Florencio Airado
require_once "model/modelo.php";

/**
 *  Clase Controlador. Recibe las peticiones de las vistas, solicita información
 *  u ordena cambios al Modelo
 */
class Controlador {

    public function __construct() {
        $this->modelo = new Modelo();
    }

    public function getProyectos() {
        return $this->modelo->getProyectos();
    }

}

$app = new Controlador();
?>