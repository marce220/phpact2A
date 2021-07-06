<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>PHP Actividad 2 - A</title>
</head>

<body>

<h1>PHP Actividad 2 - A </h1>


<?php
$nombre="Ana";
$apellido="Bonaparte";
$edad=25;
$hobbie="nadar";
$editor="Uso el editor de código Visual Studio Code";
$sistema="El sistema operativo que utilizo es Windows 10";

?>
<h2>Datos Personales</h2>
<?php
$datos="Mis datos personales son : "  .$nombre . " ".$apellido .   " y tengo " .$edad . " años. ";
echo $datos;?>
<br>
<br>
<h2>Mi Hobbie</h2>
<?php
$gustos=" Me gusta ".$hobbie . " . ";
echo $gustos;?>

<br><br>
<h2>Editor de Código y Sistema Operativo</h2>
<?php
echo $editor ;?>
<br><br>
<?php
echo $sistema;


?>


</body>

</html>
