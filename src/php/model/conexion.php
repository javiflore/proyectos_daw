<?php
// Javier Florencio Airado

// include 'config/configuracion.php';

class Conectar{

    public static function conexion(){
        $mysqli = new mysqli(servidorbd, usuario, password, basedatos) or die ('NO conecta');
        return $mysqli;
    }
}
?>
