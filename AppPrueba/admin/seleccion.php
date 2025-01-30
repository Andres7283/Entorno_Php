<?php
session_start();

// Verificamos si el usuario está logueado como administrador
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../estilos.css">
    <title>Seleccionar Acción - Admin</title>
</head>
<body>
    <h1>Bienvenido, Administrador</h1>
    <p>Selecciona una acción para gestionar las cervezas:</p>
    
    <form action="insertar.php">
        <button type="submit">Insertar Cerveza</button>
    </form>
    
    <form action="seleccionar_cerveza.php">
        <button type="submit">Editar Cerveza</button>
    </form>
    
    <form action="borrar.php">
        <button type="submit">Borrar Cerveza</button>
    </form>

    <br>
    <a href="../logout.php">Cerrar sesión</a>
</body>
</html>
