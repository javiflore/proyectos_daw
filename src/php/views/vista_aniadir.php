<?php

echo 'vista añadir'

echo '<form action="../controller/controlador.php" method="POST">
        <label for="nombre">Nombre</label><br/>
        <input type="text" name="nombre" id="nombre"><br/>
        <label for="urlMinijuego">URL del mijiuego</label><br/>
        <input type="text" name="urlMinijuego" id="urlMinijuego"><br/>
        <label for="imagen">Imagen</label><br/>
        <input type="text" name="imagen" id="imagen"><br/>
        <label for="descripcion">Descripción</label><br/>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea><br/>
        <input type="reset" value="Borrar">
        <input type="submit" value="Aceptar">
        </form>';