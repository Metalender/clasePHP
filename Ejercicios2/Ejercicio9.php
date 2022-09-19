<?php
$num= $_GET['num'];
$cont=0;
for($i=1;$i<=$num;$i++){
    if($num%$i==0)
        $cont++;
}
if ($cont<=2)
    echo $num." es primo";
else 
    echo $num." no es primo";

?>