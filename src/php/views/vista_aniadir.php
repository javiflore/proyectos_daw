<?php

$id = $nombre = $urlMinijuego = $imagenMinijuego = $descripcion= "";

if(isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];
if(isset($dataToView["data"]["nombre"])) $nombre = $dataToView["data"]["nombre"];
if(isset($dataToView["data"]["urlMinijuego"])) $urlMinijuego = $dataToView["data"]["urlMinijuego"];
if(isset($dataToView["data"]["imagenMinijuego"])) $imagenMinijuego = $dataToView["data"]["imagenMinijuego"];
if(isset($dataToView["data"]["descripcion"])) $descripcion = $dataToView["data"]["descripcion"];


echo '
        <main id="aniadir">
                <form action="index.php?action=saveMinijuego" enctype="multipart/form-data" method="POST">
                        <input type="hidden" name="id" value="'.$id.'"/>
                        <label for="nombre">Nombre</label><br/>
                        <input type="text" name="nombre" value="'.$nombre.'"><br/>
                        <label for="urlMinijuego">URL del mijiuego</label><br/>
                        <input type="text" name="urlMinijuego" value="'.$urlMinijuego.'"><br/>
                        <label for="imagen">Imagen</label><br/>
                        <input type="file" name="imagenMinijuego"><br/>
                        <label for="descripcion">Descripción</label><br/>
                        <textarea name="descripcion" id="'.$id.'" cols="30" rows="10">'.$descripcion.'</textarea><br/>
                        <input type="reset" value="Borrar">
                        <input type="submit" id='.$id.'>
                </form>
        </main>
'
;