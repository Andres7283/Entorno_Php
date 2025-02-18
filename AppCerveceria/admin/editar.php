<?php
session_start();

// Verificar si el usuario es un administrador
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Verificar si el ID está presente en la URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID de cerveza no proporcionado";
    exit;
}

$id_cerveza = $_GET['id'];


// Conectar a la base de datos
require_once '../includes/conexion.php';

// Buscar la cerveza por ID
$sql = "SELECT * FROM cervezas WHERE id = :id_cerveza";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id_cerveza' => $id_cerveza]);
$cerveza = $stmt->fetch();

if (!$cerveza) {
    echo "Cerveza no encontrada.";
    exit;
}

// Si se envía el formulario de edición
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $tipo = $_POST['tipo'];
    $formato = $_POST['formato'];
    $tamano = $_POST['tamano'];
    $alergia = isset($_POST['alergia']) ;//? implode(',', $_POST['alergia']) : '';
    $fecha_consumo = $_POST['fecha_consumo'];
    $foto = $_POST['foto'];
    $precio = $_POST['precio'];
    $observaciones = $_POST['observaciones'];

    $sql = "UPDATE cervezas SET 
        nombre = :nombre, 
        marca = :marca, 
        tipo = :tipo, 
        formato = :formato,
        tamano = :tamano, 
        alergia = :alergia, 
        fecha_consumo = :fecha_consumo, 
        foto = :foto,
        precio = :precio, 
        observaciones = :observaciones 
        WHERE id = :id_cerveza";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    'id_cerveza' => $id_cerveza, // Corregido el marcador
    'nombre' => $nombre,
    'marca' => $marca,
    'tipo' => $tipo,
    'formato' => $formato,
    'tamano' => $tamano,
    'alergia' => $alergia,
    'fecha_consumo' => $fecha_consumo,
    'foto' => $foto,
    'precio' => $precio,
    'observaciones' => $observaciones
]);
    echo "Cerveza actualizada correctamente.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos.css">
    <title>Editar Cerveza</title>
</head>
<body>
    <h1>Editar Cerveza</h1>
    
    <form method="POST" action="editar.php?id=<?php echo $cerveza['id']; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $cerveza['nombre']; ?>" required><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" value="<?php echo $cerveza['marca']; ?>" required><br>

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" value="<?php echo $cerveza['tipo']; ?>" required><br>

        <label for="formato">Formato:</label>
        <input type="text" name="formato" value="<?php echo $cerveza['formato']; ?>" required><br>

        <label for="tamano">Tamaño:</label>
        <input type="text" name="tamano" value="<?php echo $cerveza['tamano']; ?>" required><br>

        <label for="alergia">Alergia:</label>
        <input type="text" name="alergia" value="<?php echo $cerveza['alergia']; ?>"><br>

        <label for="fecha_consumo">Fecha de Consumo:</label>
        <input type="date" name="fecha_consumo" value="<?php echo $cerveza['fecha_consumo']; ?>" required><br>

        <label for="foto">Foto:</label>
        <input type="text" name="foto" value="<?php echo $cerveza['foto']; ?>" required><br>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" value="<?php echo $cerveza['precio']; ?>" required><br>

        <label for="observaciones">Observaciones:</label>
        <textarea name="observaciones"><?php echo $cerveza['observaciones']; ?></textarea><br>

        <button type="submit">Actualizar Cerveza</button>
    </form>
    
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
