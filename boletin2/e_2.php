
<?php
$valores = [NULL, true, false, 0, 3.8, "0", "10", "6 metros", 'hola'];

foreach ($valores as $var) {
    echo "
    Valor original: " . $var ;
    var_dump($var);
    
    $vint = (int)$var;
    echo "Convertido en int: ";
    var_dump($vint);

    $vboolean = (boolean)$var;
    echo "Convertido en boolean: ";
    var_dump($vboolean);

    $vstring = (string)$var;
    echo "Convertido en string: ";
    var_dump($vstring);

    $vfloat = (float)$var;
    echo "Convertido en float: ";
    var_dump($vfloat);

    echo "<br><br>";
}
?>
