<?php
/*Tengo un billete de avión para Denver definir la variable dataSalida (fecha y hora). Necesito que el programa que calcule tiempo me falta para coger dicho avión, dependiendo de la hora actual.*/
//datetime dateinterval


$fechaSalida = new DateTime('2022-12-18 11:12:34');
$fechaActual = new DateTime('now');

echo "La fecha de salida es  ".$fechaSalida->format('Y-m-d H:i:s')."<br>";
echo "La fecha actual es ".$fechaActual->format('Y-m-d H:i:s')."<br><br>";

$interval = $fechaSalida->diff($fechaActual);

echo "<h3>Para ir de vacaciones me quedan... ".$interval->format('%a dias, %H horas y %i minutos')."<h3>";


?>