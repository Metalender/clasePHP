<?php
include ("ordenador.php");

$ordenadorArray=array(new ordenador('windows 10','hz101010',false),new ordenador('windows 10','hz111111',true),
    new ordenador('windows 10','hz100000',true),new ordenador('windows 10','hz114411',true));
echo '<table border="1px">';
foreach ($ordenadorArray as $ord){
    echo '<td>';
    echo $ord-> toString();
    echo '</td>';
}
echo '</table>';
?>