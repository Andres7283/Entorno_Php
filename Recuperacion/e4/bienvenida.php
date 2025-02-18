<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h2>Bienvenido <?= htmlspecialchars($_SESSION['usuario']); ?></h2>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
