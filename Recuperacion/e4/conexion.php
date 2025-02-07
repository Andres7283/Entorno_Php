<?php
$host = "localhost";
$dbname = "login_basico";
$username = "root"; // Cambiar si tienes otro usuario en MySQL
$password = "";

// Crear la conexión
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}
?>
