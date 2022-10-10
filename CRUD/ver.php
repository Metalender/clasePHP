<?php
$mysqli = new mysqli("localhost", "root", "", "centrofp");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$DNI = htmlspecialchars($_GET["DNI"]);
/* Sentencia no preparada */
$resultado = $mysqli->query("SELECT * FROM alumnos WHERE DNI='".$DNI."'");

// mostrar resultado
?>
<html>
<head>
<style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table {
           margin:auto;
            width: 1000px;
            height: 3%
            
        }
        td{
        font-size: xx-large;
        font-family: helvetica;
        }
    </style>
    </head>
    <body>
<?php

echo "<table>";
while ($row = $resultado->fetch_assoc()) {
    echo("<tr><td>".$row['Nombre'] ."</td><td>". $row['Email'] ."</td><td>". $row['DNI'] . "</td><td>". $row['CodMatricula'] .'</td><td style="text-align: center;">'. $row['Ciclo'] .'</td><td><a href="modificar.php?DNI='.$DNI.'">Mod</a></td></tr>');    
}
echo "</table>";

/* se recomienda el cierre explícito */
$mysqli->close();

?>
</body>
</html>