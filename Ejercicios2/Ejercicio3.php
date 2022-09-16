<?php
$pares = true;


    if($pares){
        for ($i = 1; $i < (rand(10,99)); $i++){
         if ($i%2==0) {
            echo $i." ♦ ";
            }
        }
    }else {
        for ($i = 1; $i < (rand(10,99)); $i++){
            if ($i%2==1) {
                echo $i." ♦ ";
            }
      }
    }


?>