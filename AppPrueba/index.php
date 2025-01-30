<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <title>Cervecería</title>
</head>
<body>
    <h1>Bienvenido a la Cervecería</h1>

    <?php if (isset($_SESSION['admin'])): ?>
        <p>Bienvenido, Administrador. <a href="logout.php">Cerrar sesión</a></p>
        <a href="admin/insertar.php">Administrar cervezas</a>
    <?php elseif (isset($_SESSION['usuario'])): ?>
        <p>Bienvenido, <?php echo $_SESSION['usuario']; ?>. <a href="logout.php">Cerrar sesión</a></p>
        <a href="carrito/carrito.php">Ir a mi carrito</a>
    <?php else: ?>
        <a href="login.php">Iniciar sesión</a>
    <?php endif; ?>
</body>
</html>
