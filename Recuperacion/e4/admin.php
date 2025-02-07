<?php
require 'conexion.php';
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'admin') {
    header('Location: index.php');
    exit;
}

$stmt = $pdo->query("SELECT usuario FROM usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
</head>
<body>
    <h1>Panel de administración</h1>
    <h2>Usuarios registrados:</h2>
    <ul>
        <?php foreach ($usuarios as $user): ?>
            <li><?php echo htmlspecialchars($user['usuario']); ?></li>
        <?php endforeach; ?>
    </ul>
    <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>
