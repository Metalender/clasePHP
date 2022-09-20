<?php
$array = array(0=>10,1=>25,2=>43,3=>2,4=>21,5=>42,6=>31,7=>12,8=>69,9=>100);
$num = $array[1];
for ($i = 1; $i < count($array) ; $i++) {
    if ($num < $array[$i]) {
     $num=$array[$i];
    }
}
echo $num;
?>