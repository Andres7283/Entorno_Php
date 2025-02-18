<?php
session_start();
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $password = md5($_POST['password']); // Encriptar para comparar con la BD

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ? AND password = ?");
    $stmt->execute([$usuario, $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['usuario'] = $usuario;
        if ($usuario == 'admin') {
            header("Location: admin.php");
        } else {
            header("Location: bienvenida.php");
        }
        exit();
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos');window.location='index.php';</script>";
    }
}
?>
