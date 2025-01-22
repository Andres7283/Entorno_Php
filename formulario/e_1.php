<?php
$precio1 = $_REQUEST["precio1"];
$precio2 = $_REQUEST["precio2"];
$precio3 = $_REQUEST["precio3"];

$media = ($precio1 + $precio2 + $precio3) / 3;

echo "La media de los tres precios es de " . $media . " €.";
?>