<?php
include ("ordenador.php");

$ordenadorArray=array(new ordenador("windows 10","hz101010"),new ordenador("windows 10","hz111111"),new ordenador("windows 10","hz100000"),new ordenador("windows 10","hz114411"));

foreach ($ordenadorArray as $i){
    echo $i->print();
}
?>