<?php
include ("ordenador.php");

$ordenadorArray=array(new ordenador("windows 10","hz101010",false),new ordenador("windows 10","hz111111",true),new ordenador("windows 10","hz100000",false),new ordenador("windows 10","hz114411",true));

foreach ($ordenadorArray as $i){
    echo $i->toString();
}
?>