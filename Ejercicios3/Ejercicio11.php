<?php

$array =
    [
        'Lunes' => 5,
        'Martes' => 3,
        'Miercoles' => 9,
        'Jueves' => 14,
        'Viernes' => 3,
        'Sabado' => 2,
        'Domingo' =>1
    ];

print_r($array);
echo '<br><br>Suma: ';
print_r(array_sum($array));
echo '<br><br>Media: ';
print_r(array_sum($array)/count($array));



?>