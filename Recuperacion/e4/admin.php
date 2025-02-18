<?php
session_start();
require 'conexion.php';

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'admin') {
    header("Location: index.php");
    exit();
}

$stmt = $pdo->query("SELECT * FROM usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Admin</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h2>Usuarios Registrados</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
        </tr>
        <?php foreach ($usuarios as $user): ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= htmlspecialchars($user['usuario']); ?></td> <!-- para que no pueda meter caracteres especiales  -->
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
