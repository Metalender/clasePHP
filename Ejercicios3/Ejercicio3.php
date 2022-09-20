<?php
$array = [
    [
        'Producto1' => 'Zapatos negras',
        'Producto2' => 'Zapatos arrones',
        'Producto3' => 'Zapatillas blancas',
        'Producto4' => 'Zapatillas negras',
        'Producto5' => 'Zapatillas de deporte',
    ],
    [
        'Precio1' => '11.20€',
        'Precio2' => '11.20€',
        'Precio3' => '15.25€',
        'Precio4' => '15.25€',
        'Precio5' => '23.99€',
    ],
    [
        'Precio1' => '11.20'*0.7."€",
        'Precio2' => '11.20'*0.7."€",
        'Precio3' => '15.25'*0.7."€",
        'Precio4' => '15.25'*0.7."€",
        'Precio5' => '23.99'*0.7."€",
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

echo $s;

?>