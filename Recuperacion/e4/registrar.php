<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $password = md5($_POST['password']); // En la cerveceria no lo he encriptado pero ya he aprendido con md5

    // Verificar si el usuario ya existe
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt->execute([$usuario]);
    
    if ($stmt->rowCount() > 0) {
        echo "<script>alert('El usuario ya existe');window.location='registro.php';</script>";
    } else {
        $stmt = $pdo->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
        $stmt->execute([$usuario, $password]);
        echo "<script>alert('Registro exitoso, ahora puedes iniciar sesión');window.location='index.php';</script>";
    }
}
?>
