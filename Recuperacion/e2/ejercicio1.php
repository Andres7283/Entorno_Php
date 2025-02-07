<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión número-string</title>
</head>
<body>
    <h1>Conversión entre número y string</h1>
    <form method="POST">
        <label for="input">Ingresa un número o texto:</label>
        <input type="text" id="input" name="input" required>
        <button type="submit">Convertir</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $input = $_POST['input'];
        if (is_numeric($input)) {
            echo "<p>El número convertido a string es: '" . strval($input) . "'</p>";
        } else {
            echo "<p>El texto convertido a número es: " . intval($input) . "</p>";
        }
    }
    ?>
</body>
</html>
