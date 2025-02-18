<?php
session_start();
require_once '../includes/conexion.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $tipo = $_POST['tipo'];
    $formato = $_POST['formato'];
    $tamano = $_POST['tamano'];
    $alergia = isset($_POST['alergia']) ? implode(', ', $_POST['alergia']) : '';  // Unir los checkboxes en una cadena
    $fecha = $_POST['fecha'];
    $foto = $_FILES['foto']['name'];  // Obtener el nombre del archivo de la foto
    $precio = $_POST['precio'];
    $observaciones = $_POST['observaciones'];

    // Verificar si la carpeta 'uploads' existe y tiene permisos
    $uploadsDir = '../uploads/';
    if (!is_dir($uploadsDir)) {
        mkdir($uploadsDir, 0777, true); // Crear la carpeta si no existe
    }

    // Subir la foto al servidor
    if ($_FILES['foto']['error'] == 0) {
        $destino = $uploadsDir . basename($foto);
        if (!move_uploaded_file($_FILES['foto']['tmp_name'], $destino)) {
            echo "Error al subir la imagen.";
            exit;
        }
    }

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO cervezas (nombre, marca, tipo, formato, tamano, alergia, fecha_consumo, foto, precio, observaciones)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nombre, $marca, $tipo, $formato, $tamano, $alergia, $fecha, $foto, $precio, $observaciones]);

    echo "Cerveza insertada correctamente.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../estilos.css">
    <title>Inserción de Cervezas</title>
</head>
<body>
    <h1>Inserción de Cervezas</h1>
    <p>Introduzca los datos de la cerveza:</p>

    <form method="POST" action="insertar.php" enctype="multipart/form-data">
        <label for="nombre"><b>DENOMINACIÓN CERVEZA:</b></label>
        <input type="text" name="nombre" required />
        <br />

        <label for="marca"><b>MARCA:</b></label>
        <select name="marca" required>
            <option value="Heineken">Heineken</option>
            <option value="Mahou">Mahou</option>
            <option value="DAM">DAM</option>
            <option value="Estrella Galicia">Estrella Galicia</option>
            <option value="Alhambra">Alhambra</option>
            <option value="Cruzcampo">Cruzcampo</option>
            <option value="Artesana">Artesana</option>
        </select>
        <br />

        <label for="tipo"><b>TIPO CERVEZA:</b></label>
        <input type="radio" name="tipo" value="Lager" checked /> Lager
        <input type="radio" name="tipo" value="Pale Ale" /> Pale Ale
        <input type="radio" name="tipo" value="Cerveza Negra" /> Cerveza Negra
        <input type="radio" name="tipo" value="Abadia" /> Abadía
        <input type="radio" name="tipo" value="Rubia" /> Rubia
        <br />

        <label for="formato"><b>FORMATO:</b></label>
        <select name="formato" required>
            <option value="lata">Lata</option>
            <option value="Botella">Botella</option>
            <option value="Pack">Pack</option>
        </select>
        <br />

        <label for="tamano"><b>TAMAÑO:</b></label>
        <select name="tamano" required>
            <option value="botellin">Botellín</option>
            <option value="Tercio">Tercio</option>
            <option value="Media">Media</option>
            <option value="Litrona">Litrona</option>
            <option value="Pack">Pack</option>
        </select>
        <br />

        <label for="alergia"><b>ALÉRGENOS:</b></label>
        <input type="checkbox" name="alergia[]" value="Gluten" /> Gluten
        <input type="checkbox" name="alergia[]" value="Huevo" /> Huevo
        <input type="checkbox" name="alergia[]" value="Cacahuete" /> Cacahuete
        <input type="checkbox" name="alergia[]" value="Soja" /> Soja
        <input type="checkbox" name="alergia[]" value="Lacteo" /> Lácteo
        <input type="checkbox" name="alergia[]" value="Sulfitos" /> Sulfitos
        <input type="checkbox" name="alergia[]" value="Sin Alérgenos" /> Sin Alérgenos
        <br />

        <label for="fecha"><b>FECHA CONSUMO:</b></label>
        <input type="date" name="fecha" required />
        <br />

        <label for="foto"><b>FOTO:</b></label>
        <input type="file" name="foto" required />
        <br />

        <label for="precio"><b>PRECIO:</b></label>
        <input type="text" name="precio" required /> €
        <br />

        <label for="observaciones"><b>OBSERVACIONES:</b></label>
        <textarea name="observaciones"></textarea>
        <br /><br />

        <button type="submit">Insertar Cerveza</button>
    </form>
</body>
</html>
