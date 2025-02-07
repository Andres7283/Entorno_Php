<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar palabra en frase</title>
</head>
<body>
    <h1>Comprobar si una frase contiene una palabra</h1>
    <form method="POST">
        <label for="frase">Ingresa una frase:</label>
        <input type="text" id="frase" name="frase" required>
        <label for="palabra">Ingresa una palabra:</label>
        <input type="text" id="palabra" name="palabra" required>
        <button type="submit">Comprobar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $frase = $_POST['frase'];
        $palabra = $_POST['palabra'];
        if (strpos($frase, $palabra) !== false) {
            echo "<p>La frase contiene la palabra '$palabra'.</p>";
        } else {
            echo "<p>La frase no contiene la palabra '$palabra'.</p>";
        }
    }
    ?>
</body>
</html>
