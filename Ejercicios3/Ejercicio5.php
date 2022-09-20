<?php
$array = array(0=>rand(0,99),1=>rand(0,99),2=>rand(0,99),3=>rand(0,99),4=>rand(0,99),5=>rand(0,99),6=>rand(0,99),7=>rand(0,99),8=>rand(0,99),9=>rand(0,99));
$num = $array[1];
for ($i = 1; $i < count($array) ; $i++) {
    if ($num > $array[$i]) {
        $num=$array[$i];
    }
}
echo $num;


?>