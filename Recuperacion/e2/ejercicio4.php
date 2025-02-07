<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días entre fechas</title>
</head>
<body>
    <h1>Calcular días entre dos fechas</h1>
    <form method="POST">
        <label for="fecha1">Fecha inicial:</label>
        <input type="date" id="fecha1" name="fecha1" required>
        <label for="fecha2">Fecha final:</label>
        <input type="date" id="fecha2" name="fecha2" required>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fecha1 = new DateTime($_POST['fecha1']);
        $fecha2 = new DateTime($_POST['fecha2']);
        $diferencia = $fecha1->diff($fecha2);
        echo "<p>La diferencia entre las fechas es de " . $diferencia->days . " días.</p>";
    }
    ?>
</body>
</html>

