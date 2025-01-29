<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Index</title>
</head>
<body class="index">
    <h1 style="color:blue">Inserción de Cervezas</h1>
    <p>Estos son los datos introducidos:</p>
    <ul>
        <li>DENOMINACIÓN CERVEZA: 
            <?php
            echo $_REQUEST["nombre"];
            ?>
        </li>
        <li>
            MARCA:
            <?php
            echo $_REQUEST["marca"];
            ?>
        </li>
        <li>
            TIPO CERVEZA:
            <?php
            echo $_REQUEST["tipo"];
            ?>
        </li>
        <li>
            FORMATO:
            <?php
            echo $_REQUEST["formato"];
            ?>
        </li>
        <li>
            TAMAÑO:
            <?php
            echo $_REQUEST["tamaño"];
            ?>
        </li>
        <li>
            ALÉRGENOS:
            <?php
            foreach ($_REQUEST["alergia"] as $alergia) {
                echo $alergia . ", ";
            }
            ?>
        </li>
        <li>
            FECHA CONSUMO:
            <?php
            echo $_REQUEST["fecha"];
            ?>
        </li>
        <li>
            PRECIO:
            <?php
            echo $_REQUEST["precio"];
            ?>
        </li>
        <li>
            FOTO:
            <?php
            echo $_REQUEST["file"];
            ?>
        </li>
        <li>
            OBSERVACIONES:
            <?php
            echo $_REQUEST["observaciones"];
            ?>
        </li>
    </ul>

    <p>[ <a href="principal.php" name="inserccion">Insertar otra cerveza</a> ]</p>

</body>
</html>