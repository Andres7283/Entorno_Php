<?php
// conexion.php
$host = '127.0.0.1:3308';     // O tu servidor de base de datos
$dbname = 'cerveceria';  // Nombre de la base de datos
$username = 'root';      // Tu usuario de MySQL
$password = 'root';          // Tu contraseña de MySQL (si la tienes)

// Conexión a la base de datos usando PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configuración de errores
} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}
?>
