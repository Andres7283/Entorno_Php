<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Calculadora Simple</h1>
    <form action="calculadora.php" method="POST">
        <label for="numero1">Ingresa un número:</label>
        <input type="number" name="numero1" id="numero1" required>

        <label for="operacion">Selecciona una operación:</label>
        <select name="operacion" id="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>

        <label for="numero2">Ingresa otro número:</label>
        <input type="number" name="numero2" id="numero2" required>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>
