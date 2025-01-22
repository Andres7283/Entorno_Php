<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>APP Tienda Online</title>
  </head>
  <body>
    <h1>Inserción de Cervezas</h1>
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
      <input type="radio" name="tipo" value="1"/>
      <label for="">LAGER</label>
      <input type="radio" name="tipo" value="2"/>
      <label for="">PALE ALE</label>
      <input type="radio" name="tipo" value="3"/>
      <label for="">CERVEZA NEGRA</label>
      <input type="radio" name="tipo" value="4"/>
      <label for="">ABADIA</label>
      <input type="radio" name="tipo" value="5"/>
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
      <input type="checkbox" name="alergia"/>
      <label for="">Gluten</label>
      <input type="checkbox" name="alergia"/>
      <label for="">Huevo</label>
      <input type="checkbox" name="alergia"/>
      <label for="">Cacahuete</label>
      <input type="checkbox" name="alergia"/>
      <label for="">Soja</label>
      <input type="checkbox" name="alergia"/>
      <label for="">Lacteo</label>
      <input type="checkbox" name="alergia"/>
      <label for="">Sulfitos</label>
      <input type="checkbox" name="alergia" />
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
        if (empty($_REQUEST["precio"]) && !is_numeric($_REQUEST["precio"])) {
          ?><p style="color: red;">¡Ha de tener una fecha de consumo máxima! </p>
          <?php
        } 
      ?>
      <br />

      <label name="observaciones"><b>OBSERVACIONES:</b></label>
      <br />
      <textarea name="" id=""></textarea>
      <br /><br />

      <button id="boton">Insertar Cerveza</button>
    </form>
  </body>
</html>
