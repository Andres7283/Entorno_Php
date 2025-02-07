<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Los Simpson</title>
</head>
<body>
    <h1>Test Los Simpson</h1>
    <form method="POST">
        <p>1. Sólo un personaje tiene cinco dedos. (Dios)</p>
        <input type="radio" name="q1" value="3" required> Verdadero<br>
        <input type="radio" name="q1" value="0"> Falso<br>

        <p>2. El hermano de Lisa es Bart.</p>
        <input type="radio" name="q2" value="3" required> Verdadero<br>
        <input type="radio" name="q2" value="0"> Falso<br>

        <p>3. Los nombres fueron elegidos al azar.</p>
        <input type="radio" name="q3" value="0" required> Verdadero<br>
        <input type="radio" name="q3" value="3"> Falso<br>

        <p>4. MilHouse es hermano de Ralph.</p>
        <input type="radio" name="q4" value="0" required> Verdadero<br>
        <input type="radio" name="q4" value="3"> Falso<br>

        <p>5. Homero tiene 6 hijos.</p>
        <input type="radio" name="q5" value="0" required> Verdadero<br>
        <input type="radio" name="q5" value="3"> Falso<br>

        <button type="submit">Enviar respuestas</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $totalPuntos = intval($_POST['q1']) + intval($_POST['q2']) + intval($_POST['q3']) + intval($_POST['q4']) + intval($_POST['q5']);
        echo "<p>Puntaje total: $totalPuntos puntos.</p>";
        if ($totalPuntos <= 6) {
            echo "<p>Te falta ver más capítulos de los Simpson.</p>";
        } elseif ($totalPuntos <= 12) {
            echo "<p>Eres fanático de los Simpson.</p>";
        } else {
            echo "<p>¡Genial! Eres muy fanático de los Simpson.</p>";
        }
    }
    ?>
</body>
</html>
