<?php

require_once 'config/configuracion.php';
require_once 'model/conexion.php';
require_once 'controller/controlador.php';

/** Cargamos el controlador */
$controladorMinijuego = new ControladorMinijuego();

/**
 * Le mandamos mediante get las acciones que tiene que realizar el controlador 
 * Pero si no viene ningún get, que coja el por defecto
 */
if(!isset($_GET["action"])) $_GET["action"] = constant("DEFAULT_ACTION");

// print_r($_GET["action"]);

$dataToView["data"] = array();

if(method_exists($controladorMinijuego,$_GET["action"])) $dataToView["data"] = $controladorMinijuego->{$_GET["action"]}();

// var_dump($dataToView["data"]);

/** Monta las vistas */
require_once('views/header.html');
require_once('views/vista_'.$controladorMinijuego->vista.'.php');
require_once('Views/footer.html');













    // require_once('controller/controlador.php');
    // $controladorMinijuego = new ControladorMinijuego();

    // if (isset($_POST) && !empty($_POST)){
    // // if (!empty($_POST)){
    //     // var_dump($_POST);

    //     foreach($_POST as $index => $value) {
    //         $vista = $index;
    //     }
    //     include('views/header.html');
    //     require_once('views/vista_'.$vista.'.php');
    //     require_once('Views/footer.html');

    // }else{
    //     $data=$controladorMinijuego->getMinijuego();
        
    //     include('views/header.html');
    //     require_once('views/vista_listar.php');
    //     require_once('Views/footer.html');
    // }

?>
