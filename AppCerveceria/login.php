<?php
session_start();
require_once 'includes/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    if ($usuario == 'admin' && $contrasena == 'root') {
        $_SESSION['admin'] = true;
        header("Location: admin/seleccion.php");
        exit;
    } else {
        $sql = "SELECT * FROM usuario WHERE nombre = :nombre AND contrasena = :contrasena";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nombre' => $usuario, 'contrasena' => $contrasena]);

        if ($stmt->rowCount() > 0) {
            $_SESSION['usuario'] = $usuario;
            header("Location: carrito/carrito.php");
            exit;
        } else {
            echo "Usuario o contraseña incorrectos.";
        }
    }
}
?>
<head>
    <link rel="stylesheet" href="estilos.css">
</head>
<form method="POST" action="login.php">
    <label for="usuario">Usuario: </label>
    <input type="text" name="usuario" required><br>
    <label for="contrasena">Contraseña: </label>
    <input type="password" name="contrasena" required><br>
    <button type="submit">Iniciar sesión</button>
</form>
