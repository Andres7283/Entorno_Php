<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar letras en string</title>
</head>
<body>
    <h1>Contar letras en un string</h1>
    <form method="POST">
        <label for="string">Ingresa un texto:</label>
        <input type="text" id="string" name="string" required>
        <label for="letra">Letra a buscar:</label>
        <input type="text" id="letra" name="letra" maxlength="1" required>
        <button type="submit">Contar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $string = $_POST['string'];
        $letra = $_POST['letra'];
        $conteo = substr_count($string, $letra);
        echo "<p>La letra '$letra' aparece $conteo veces en el texto.</p>";
    }
    ?>
</body>
</html>
