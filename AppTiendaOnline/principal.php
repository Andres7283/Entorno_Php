<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
    <title>Principalº</title>
  </head>
  <body class="principal">
    <div>
    <h1 style="color: #00C6B2">Inserción de Cervezas</h1>
    <p>Introduzca los datos de la la cerveza:</p>
    <br />

    <form action="index.php">
      <label for=""><b>DENOMINACIÓN CERVEZA:</b></label>
      <input type="text" name="nombre"/>
      <?php
        if (empty($_REQUEST["nombre"])) {
          ?><p style="color: red;">¡Se requiere el nombre de la Cerveza!</p>
          <?php  
      }   
      ?>
      <br />

      <label for=""><b>MARCA:</b></label>
      <select name="marca" id="">
        <option value="Heineken">Heineken</option>
        <option value="Mahou">Mahou</option>
        <option value="DAM">DAM</option>
        <option
          value="Estrella Galicia
        "
        >
          Estrella Galicia
        </option>
        <option value="Alhambra">Alhambra</option>
        <option value="Cruzcampo">Cruzcampo</option>
        <option value="Artesana">Artesana</option>
      </select>

      
      <br /><br />
  
      <label for=""><b>TIPO CERVEZA:</b></label>
      <input type="radio" name="tipo" value="Larger" checked/>
      <label for="">LAGER</label>
      <input type="radio" name="tipo" value="Pale Ale"/>
      <label for="">PALE ALE</label>
      <input type="radio" name="tipo" value="Cerveza Negra"/>
      <label for="">CERVEZA NEGRA</label>
      <input type="radio" name="tipo" value="Abadia"/>
      <label for="">ABADIA</label>
      <input type="radio" name="tipo" value="Rubia"/>
      <label for="">RUBIA</label>
      <?php
        if (empty($_REQUEST["tipo"])) {
          ?><p style="color: red;">¡Has de elegir un tipo de cerveza! </p>
          <?php
        } 
      ?>
      <br />

      <label for=""><b>FORMATO:</b></label>
      <select name="formato" id="">
        <option value="lata">Lata</option>
        <option value="Botella">Botella</option>
        <option value="Pack">Pack</option>
      </select>
      <br /><br />

      <label for=""><b>TAMAÑO:</b></label>
      <select name="tamaño" id="">
        <option value="botellin">Botellin</option>
        <option value="Tercio">Tercio</option>
        <option value="Media">Media</option>
        <option value="Litrona">Litrona</option>
        <option value="Pack">Pack</option>
      </select>
      <br /><br />

      <label for=""><b>ALÉRGENOS:</b></label>
      <input type="checkbox" name="alergia[]" value="Gluten"/>
      <label for="">Gluten</label>
      <input type="checkbox" name="alergia[]" value="Huevo"/>
      <label for="">Huevo</label>
      <input type="checkbox" name="alergia[]" value="Cacahuete"/>
      <label for="">Cacahuete</label>
      <input type="checkbox" name="alergia[]" value="Soja"/>
      <label for="">Soja</label>
      <input type="checkbox" name="alergia[]" value="Lacteo"/>
      <label for="">Lacteo</label>
      <input type="checkbox" name="alergia[]" value="Sulfitos"/>
      <label for="">Sulfitos</label>
      <input type="checkbox" name="alergia[]" value="Sin Alérgenos"/>
      <label for="">Sin Alérgenos</label>
      <?php
          if (empty($_REQUEST["tipo"])) {
         ?><p style="color: red;">¡Has de elegir Alérgenos! </p>
         <?php
        } 
      ?>
      <br />

      <label for=""><b>FECHA CONSUMO:</b></label>
      <input type="date" name="fecha" id="" />
      <?php
        if (empty($_REQUEST["fecha"])) {
          ?>
           <p style="color: red;">¡Ha de tener una fecha de consumo máxima! </p>
           <?php
        }
      ?>
      <br />

      <label for=""><b>FOTO:</b></label>
      <input type="file" name="file"/>
      <br /><br />

      <label for=""><b>PRECIO:</b></label>
      <input type="text" name="precio"/> € 
      <?php
      error_reporting(0);
        echo $_REQUEST["precio"];
        if (empty($_REQUEST["precio"]) && !is_numeric($_REQUEST["precio"])) {
          ?><p style="color: red;">¡El precio debe ser un valor numérico! </p>
          <?php
        } 
      ?>
      <br />

      <label><b>OBSERVACIONES:</b></label>
      <br />
      <textarea name="observaciones"></textarea>
      <br /><br />

      <button id="boton">Insertar Cerveza</button>
    </form>
    </div>
  </body>
</html>




<!-- CREATE TABLE 'productos' (
  'id' int(3) NOT NULL,
  'Denominacion_Cerveza' varchar(100) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Tipo_Cerveza` varchar(50) NOT NULL,
  `Formato` varchar(100) NOT NULL,
  `Tamano` int(3) NOT NULL,
  `Alergenos` varchar(40) NOT NULL,
  `Fecha_Consumo` date NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Precio` int(9) NOT NULL,
  `Observaciones` text NOT NULL 
)-->

