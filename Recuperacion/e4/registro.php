<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nuevoUsuario = $_POST['usuario'];
    $nuevoPassword = $_POST['password'];

    // Encriptar la contraseña antes de guardarla
    $passwordHash = password_hash($nuevoPassword, PASSWORD_DEFAULT);

    // Insertar en la base de datos
    try {
        $stmt = $pdo->prepare("INSERT INTO usuarios (usuario, password) VALUES (:usuario, :password)");
        $stmt->execute([
            'usuario' => $nuevoUsuario,
            'password' => $passwordHash,
        ]);
        header('Location: index.php');
        exit;
    } catch (PDOException $e) {
        if ($e->getCode() === '23000') { // Código de error para "entrada duplicada"
            $error = "El usuario ya existe.";
        } else {
            $error = "Error al registrar: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de usuario</h1>
    <form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Registrar</button>
    </form>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <p><a href="index.php">Volver al inicio de sesión</a></p>
</body>
</html>
