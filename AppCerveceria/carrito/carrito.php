<?php
session_start();
require_once '../includes/conexion.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit;
}

$sql = "SELECT * FROM cervezas";
$stmt = $pdo->query($sql);
$cervezas = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_cerveza = $_POST['id_cerveza'];
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }
    $_SESSION['carrito'][] = $id_cerveza;
}

?>
<head>
    <link rel="stylesheet" href="../estilos.css">
</head>
<h2>Carrito de Cervezas</h2>

<ul>
    <?php foreach ($cervezas as $cerveza): ?>
        <li>
            <?php echo $cerveza['nombre']; ?> - <?php echo $cerveza['precio']; ?> €
            <img src="../uploads/<?php echo $cerveza['foto']; ?>">
            <form method="POST" action="carrito.php">
                <input type="hidden" name="id_cerveza" value="<?php echo $cerveza['id']; ?>">
                <button type="submit">Agregar al carrito</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>

<h3>Productos en tu carrito:</h3>
<ul>
    <?php
    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $id_cerveza) {
            $stmt = $pdo->prepare("SELECT nombre, precio FROM cervezas WHERE id = :id_cerveza");
            $stmt->execute(['id_cerveza' => $id_cerveza]);
            $cerveza = $stmt->fetch();
            echo "<li>{$cerveza['nombre']} - {$cerveza['precio']} €</li>";
        }
    }
    ?>
</ul>
