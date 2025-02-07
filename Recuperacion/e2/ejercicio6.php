<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número perfecto</title>
</head>
<body>
    <h1>Comprobar si un número es perfecto</h1>
    <form method="POST">
        <label for="numero">Ingresa un número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Comprobar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = intval($_POST['numero']);
        $sumaDivisores = 0;

        for ($i = 1; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $sumaDivisores += $i;
            }
        }

        if ($sumaDivisores == $numero) {
            echo "<p>El número es perfecto.</p>";
        } else {
            echo "<p>El número no es perfecto.</p>";
        }
    }
    ?>
</body>
</html>
