<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular salario</title>
</head>
<body>
    <h1>Calcular salario de un empleado</h1>
    <?php
    $salarioHora = 30;
    $horasDia = 8;
    $salarioDia = $salarioHora * $horasDia;
    $salarioSemana = $salarioDia * 7;
    $salario15Dias = $salarioDia * 15;

    echo "<p>Salario diario: €$salarioDia</p>";
    echo "<p>Salario semanal: €$salarioSemana</p>";
    echo "<p>Salario en 15 días: €$salario15Dias</p>";
    ?>
</body>
</html>
