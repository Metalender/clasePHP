<?php

$nombre1 = "Paco";
$nombre2 = "Miguel";
$apellido1 = "Torres";
$apellido2 = "Cervantes";
$DNI1 = "1111111A";
$DNI2 = "2222222B";
$array = array("Nombre1"=>$nombre1,"Nombre2"=>$nombre2,"Apellido1"=>$apellido1,"Apellido2"=>$apellido2,"DNI1"=>$DNI1,"DNI2"=>$DNI2);

$s = '<table border="1">';
foreach ( $array as $r ) {
    $s .= '<tr>';
    foreach ( $r as $v ) {
        $s .= '<td>'.$v.'</td>';
    }
    $s .= '</tr>';
}
$s .= '</table>';
echo $s;

?>