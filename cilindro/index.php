<?php
$pi = 3.141592;
$radio = $_REQUEST["radio"];
$altura = $_REQUEST["altura"];
$caudal = $_REQUEST["caudal"];
if (isset($_REQUEST["radio"]) && isset($_REQUEST["altura"]) && 
isset($_REQUEST["caudal"])) {
print "<p>Desea recibir informacion</p>\n";
$volumen = $pi * ($radio * $radio) * $altura;
$tiempo = $volumen / $caudal;
echo $volumen;
echo"<br>";
echo $tiempo;
}
else {
    print "<p>No deaea recibir informacion</p>\n";
}
?>