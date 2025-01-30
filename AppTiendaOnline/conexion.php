<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "cerveceria"
$conn = mysqli_connect($host, $nom, $pass, $db);

if (!$conn) 
{
  die("Error en la conexión: " . mysqli_connect_error());
}	
?>