<?php
include ("ordenador.php");

$ordenadorArray=array(new ordenador("windows 10","hz101010"),new ordenador("windows 10","hz111111"),new ordenador("windows 10","hz100000"),new ordenador("windows 10","hz114411"));
echo '<table border="1px">';
foreach ($ordenadorArray as $i){
    echo '<td>';
    echo $i->print();
    echo '</td>';
}
echo '</table>';
?>