<?php
$primerNum = $_GET['num1'];
$ultimoNum = $_GET['num2'];
$suma = 0;

for ($primerNum; $primerNum <= $ultimoNum; $primerNum++) {
    $suma += $primerNum;
    
}
echo $suma;

?>