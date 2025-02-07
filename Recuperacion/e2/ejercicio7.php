<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pares e impares</title>
</head>
<body>
    <h1>Mostrar números pares e impares</h1>
    <form method="POST">
        <label for="numero1">Primer número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <label for="numero2">Segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero1 = intval($_POST['numero1']);
        $numero2 = intval($_POST['numero2']);

        if ($numero1 == $numero2) {
            echo "<script>alert('Los números son iguales. Por favor, ingresa valores diferentes.');</script>";
        } else {
            $pares = [];
            $impares = [];
            for ($i = min($numero1, $numero2); $i <= max($numero1, $numero2); $i++) {
                if ($i % 2 == 0) {
                    $pares[] = $i;
                } else {
                    $impares[] = $i;
                }
            }
            echo "<p>Números pares: " . implode(', ', $pares) . "</p>";
            echo "<p>Números impares: " . implode(', ', $impares) . "</p>";
        }
    }
    ?>
</body>
</html>
