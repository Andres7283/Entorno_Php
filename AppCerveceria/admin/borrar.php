<?php
session_start();
require_once '../includes/conexion.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id_cerveza = $_GET['id'];

    // Borrar la cerveza de la base de datos
    $sql = "DELETE FROM cervezas WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_cerveza]);

    echo "Cerveza borrada correctamente.";
}

?>
<head>
<link rel="stylesheet" href="../estilos.css">
</head>
<h2>Eliminar Cerveza</h2>
<form method="GET" action="borrar.php">
    <label for="id">ID de la Cerveza: </label><input type="text" name="id" required><br>
    <button type="submit">Borrar</button>
</form>
