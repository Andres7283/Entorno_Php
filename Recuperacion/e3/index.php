<?php
require 'conexion.php';

$sql = "SELECT * FROM Alumnos";
$stmt = $pdo->query($sql);
$alumnos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h2>Lista de Alumnos</h2>

<table>
    <tr>
        <th>Código</th>
        <th>Nombre y Apellido</th>
        <th>Aula</th>
        <th>P1</th>
        <th>P2</th>
        <th>P3</th>
        <th>EP</th>
        <th>EF</th>
        <th>Promedio</th>
    </tr>

    <?php foreach ($alumnos as $alumno): ?>
        <tr>
            <td><?= $alumno['Codigo']; ?></td>
            <td><?= $alumno['Nombre']; ?></td>
            <td><?= $alumno['Aula']; ?></td>
            <td><?= $alumno['P1']; ?></td>
            <td><?= $alumno['P2']; ?></td>
            <td><?= $alumno['P3']; ?></td>
            <td><?= $alumno['EP']; ?></td>
            <td><?= $alumno['EF']; ?></td>
            <td><?= number_format(($alumno['P1'] + $alumno['P2'] + $alumno['P3'] + $alumno['EP'] + $alumno['EF']) / 5, 2); ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
