<?php

$id = $nombre = $urlMinijuego = $imagenMinijuego = $descripcion= "";

if(isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];
if(isset($dataToView["data"]["title"])) $nombre = $dataToView["data"]["nombre"];
if(isset($dataToView["data"]["content"])) $urlMinijuego = $dataToView["data"]["urlMinijuego"];
if(isset($dataToView["data"]["content"])) $imagenMinijuego = $dataToView["data"]["imagenMinijuego"];
if(isset($dataToView["data"]["content"])) $descripcion = $dataToView["data"]["descripcion"];


echo '
        <main id="aniadir">
                <form action="index.php?action=saveMinijuego" enctype="multipart/form-data" method="POST">
                        <label for="nombre">Nombre</label><br/>
                        <input type="text" name="nombre" id='.$id.' value="'.$nombre.'"><br/>
                        <label for="urlMinijuego">URL del mijiuego</label><br/>
                        <input type="text" name="urlMinijuego" id='.$id.' value="'.$urlMinijuego.'"><br/>
                        <label for="imagen">Imagen</label><br/>
                        <input type="file" name="imagenMinijuego" id='.$id.' value="'.$imagenMinijuego.'"><br/>
                        <label for="descripcion">Descripción</label><br/>
                        <textarea name="descripcion" id="'.$id.'" cols="30" rows="10">'.$descripcion.'</textarea><br/>
                        <input type="reset" value="Borrar">
                        <input type="submit" id='.$id.'>
                </form>
        </main>
'
;