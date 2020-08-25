<?php
if(isset($_POST['submit'])){
    $nombre =$_POST['nombre'];
    $nacido =$_POST['nacido'];
    $ciudad =$_POST['ciudad'];
    $Direccion =$_POST['Direccion'];
    $edad =$_POST['edad'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="verificacion.php" method="post">
  <p>Nombre: <input type="text" name="nombre" autofocus><br> <size="40"></p>
  <p>Año de nacimiento: <input type="number" name="nacido" min="1900"></p>
  
    <p>Ciudad: <input type="text" name="ciudad" size="40"></p>
    <p>Direccion: <input type="text" name="direccion" size="40"></p>
    <p>Edad: <input type="number" name="edad" min="14" max="50"></p>
    <label for="cars">seleccione producto favorito:</label>
<select id="productos" name="productos">
  <option value="arroz">arroz</option>
  <option value="leche">leche</option>
  <option value="milo">milo</option>
  <option value="pollo">pollo</option>
</select>
<label for="actividad">seleccione sus actividades favoritas:</label>
<select id="actividad" name="actividad[]" size="4" multiple>
  <option value="jugarPlay">jugarPlay</option>
  <option value="jugarFutbol">jugarFutbol</option>
  <option value="montarBici">montarBici</option>
  <option value="dormir">dormir</option>
</select>
  </p>
  <p>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
  </p>
  <?php include("verificacion.php");
  ?>
</form>

</body>
</html>