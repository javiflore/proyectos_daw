<main>
    <form action="index.php?action=setMinijuego" method="POST">
        <input type="submit" value="Añadir nuevo proyecto">
    </form>
    <table>
        <tr>
            <th>IMG</th>
            <th>MINIJUEGO</th>
            <th>URL</th>
            <th>DESCRIPCIÓN</th>
            <th>OPCIONES</th>
        </tr>
        <?php
            foreach ($dataToView["data"] as $datos) {
                echo "<tr><td>".$datos['imagenMinijuego']."</td><td>".$datos['nombre']."</td><td>".$datos['urlMinijuego']."</td><td>".$datos['descripcion']."</td><td>
                <a href=\"views/vista_editar.php\">
                    <span class=\"material-symbols-outlined\">edit_note</span>
                </a>
                <a href=\"views/vista_eliminar.php\">
                    <span class=\"material-symbols-outlined\">delete</span>
                </a>
                ".$datos['id']."</td></tr>";
            }
        ?>
    </table>
</main>
