<?php
$array =
[
    'Jordi' => 'Jordi Rubio',
    'Marta' => 'Marta Fabra',
    'Eva' => 'Eva Palacio',
    'Antonio' => 'Antonio Comas',
    'Emilio' => 'Emilio Morales',
    'Francisco' => 'Francisco Cascales',
];
ksort($array);
print_r($array);
echo '<br><br>';
natsort($array);
print_r($array);
?>