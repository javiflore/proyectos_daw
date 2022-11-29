<?php
    require_once('controller/controlador.php');
    $controlador = new Controlador();

    $data=$controlador->getProyectos();

    require_once('views/vista_listar.php');
?>
