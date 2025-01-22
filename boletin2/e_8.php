<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <h1>Curriculum Vitae</h1>
</body>
</html>
<?php 
$con = mysqli_connect('127.0.0.1:3308', 'root', '', 'prueba');
if ($con) {
    echo "ha conectado";
}
else {
    echo "no ha conectado";
}
$nombre = $_REQUEST["nombre"];
$apellidos = $_REQUEST["apellidos"];
$sexo = $_REQUEST["sexo"];
$correo = $_REQUEST["correo"];
$contacto = $_REQUEST["contacto"];
$experiencia = $_REQUEST["experiencia"];
$estudios = $_REQUEST["estudios"];
$jornada = $_REQUEST["jornada"];
$idioma = $_REQUEST["idioma"];

echo "<b> Nombre </b>" . $nombre . "<br>";
echo "<b> Apellidos </b>" . $apellidos . "<br>";
echo "<b> Sexo </b>" . $sexo . "<br>";
echo "<b> Correo electronico </b>" . $correo . "<br>";
echo "<b> Contacto </b>" . $contacto . "<br>";
echo "<b> Experiencia </b>" . $experiencia . "<br>";
echo "<b> Estudios </b>" . $estudios . "<br>";
echo "<b> Jornada </b>" . $jornada . "<br>";
echo "<b> Idiomas </b>";
echo "<ul>";
foreach ($idioma as $i) {
    echo "<li>" . $i . "</li>";
}
echo "</ul>";
?>