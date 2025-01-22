<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" />
    <title>Inserccion de cerveza</title>
</head>
<body>
<h1>Inserción de Cervezas</h1>
<?php
error_reporting(0);
$tipoCerveza = $_REQUEST["tipoCerveza"];
$denominacionAlimento = $_REQUEST["denominacionAlimento"];
$embase = $_REQUEST["embase"];
$cantidadNeta = $_REQUEST["cantidadNeta"];
$marca = $_REQUEST["marca"];
$advertencia = $_REQUEST["advertencia"];
$fecha = $_REQUEST["fecha"];
$alergenos = $_REQUEST["alergenos"];



 


echo $tipoCerveza . "<br>";
echo $denominacionAlimento . "<br>";
echo $embase ."<br>";
echo $cantidadNeta . "<br>";

if (isset($marca)) {
    echo "Se requiere una marca.<br>";
}else {
    echo $marca . "<br>";
}
if (isset($advertencia)) {
    echo "Es Obligatorio la advertencia sobre el abuso del consumo  de alcohol.<br>";
}else{
    echo $advertencia . "<br>";
}
if (isset($fecha)) {
    echo "No he introducido una fecha.<br>";
}  
else{
    echo $fecha . "<br>";
}

if (isset($alergenos)) {
    echo "Es obligatorio incluir alergenos.<br>";
}else { 
echo "Alergias: ";
    foreach ($alergenos as $alergia) {
        echo $alergia . ", ";
    }     
    
}

?>
</body>
</html>