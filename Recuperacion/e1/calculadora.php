<?php
// Recibimos los datos del formulario
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacion = $_POST['operacion'];

// Realizamos la operación según lo seleccionado
$resultado = 0;
switch ($operacion) {
    case 'suma':
        $resultado = $numero1 + $numero2;
        break;
    case 'resta':
        $resultado = $numero1 - $numero2;
        break;
    case 'multiplicacion':
        $resultado = $numero1 * $numero2;
        break;
    case 'division':
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
        } else {
            $resultado = "Error: División entre cero.";
        }
        break;
    default:
        $resultado = "Operación no válida.";
}

// Mostramos el resultado
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Resultado de la Operación</h1>
    <p>El resultado es: <strong><?php echo $resultado; ?></strong></p>
    <a href="index.php">Volver a la calculadora</a>
</body>
</html>
