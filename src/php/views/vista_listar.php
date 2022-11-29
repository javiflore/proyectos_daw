<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Florencio Airado">
    <title>Vista ADMIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div>minijuegos 2DAW</div>
        <div>vista Admin</div>
    </header>
    <main>
        <div>
            <button type="submit" id="anadir">Añadir nuevo proyecto</button>
        </div>
        <table>
            <tr>
                <th>IMG</th>
                <th>MINIJUEGO</th>
                <th>URL</th>
                <th>DESCRIPCIÓN</th>
            </tr>
            <?php
                foreach ($data as $datos) {
                    echo "<tr><td>".$datos['imagenMinijuego']."</td><td>".$datos['nombre']."</td><td>".$datos['urlMinijuego']."</td><td>".$datos['descripcion']."</td></tr>";
                }
            ?>
        </table>
    </main>
    <footer>
        <p> copyright </p>
    </footer>
</body>
</html>