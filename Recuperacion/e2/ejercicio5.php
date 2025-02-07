<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Es verano?</title>
</head>
<body>
    <h1>Verificar si la fecha corresponde al verano</h1>
    <form method="POST">
        <label for="fecha">Ingresa una fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
        <button type="submit">Comprobar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fecha = new DateTime($_POST['fecha']);
        $veranoInicio = new DateTime($fecha->format('Y') . '-06-21');
        $veranoFin = new DateTime($fecha->format('Y') . '-09-21');

        if ($fecha >= $veranoInicio && $fecha <= $veranoFin) {
            echo "<p>Es verano.</p>";
        } else {
            echo "<p>No es verano.</p>";
        }
    }
    ?>
</body>
</html>
