
<?php
$lineas = $_GET['nombreParam1'];



for($i=1;$i<=$lineas;$i++){
    for($k=0;$k<$i;$k++){
        echo("o ");
    }
    echo "<BR>\n ";
}

?>