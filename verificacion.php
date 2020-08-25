<?php
$nombre =$_POST['nombre'];
$nacido =$_POST['nacido'];
$ciudad =$_POST['ciudad'];
$direccion =$_POST['direccion'];
$edad =$_POST['edad'];
$producto =$_POST['productos'];
$actividad =$_POST['actividad'];

?>
<p>nombre: <?php echo $nombre;?></p>
    <p>nacido en: <?php echo $nacido;?></p>
    <p>Ciudad de residencia: <?php echo $ciudad;?></p>
    <p>direccion: <?php echo $direccion;?></p>
    <p>edad: <?php echo $edad;?></p>
    <p>productos: <?php echo $producto;?></p>
    <?php
    for ($i=0;$i<count($actividad);$i++) {
		echo $actividad[$i].'<br />';
    }
    ?>
