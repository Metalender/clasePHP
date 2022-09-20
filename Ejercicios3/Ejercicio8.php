<?php
$nombre1 = "Paco";
$nombre2 = "Miguel";
$apellido1 = "Torres";
$apellido2 = "Cervantes";
$DNI1 = "1111111A";
$DNI2 = "2222222B";
$array = [
    [
        'Nombre' => $nombre1,
        'Apellido' => $apellido1,
        'Dni' => $DNI1,
    ],
    [
        'Nombre' => $nombre2,
        'Apellido' => $apellido2,
        'DNI' => $DNI2,
    ]
];

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