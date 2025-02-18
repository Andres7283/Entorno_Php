<?php
session_start();

// Verificar si el usuario es un administrador
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_cerveza = $_POST['id_cerveza'];

    // Verificar si el ID fue proporcionado
    if (!empty($id_cerveza)) {
        header("Location: editar.php?id=" . $id_cerveza);
        exit;
    } else {
        $error_message = "¡Por favor, ingresa un ID de cerveza!";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos.css">
    <title>Seleccionar Cerveza</title>
</head>
<body>
    <h1>Seleccionar Cerveza para Modificar</h1>

    <!-- Formulario para ingresar el ID de la cerveza -->
    <form method="POST" action="seleccionar_cerveza.php">
        <label for="id_cerveza">ID de Cerveza: </label>
        <input type="number" name="id_cerveza" required>
        <button type="submit">Buscar Cerveza</button>
    </form>

    <!-- Mensaje de error si el ID no se ingresa correctamente -->
    <?php if (isset($error_message)): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <br>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
