<?php
$mysqli = new mysqli("localhost", "root", "", "centrofp");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/* Sentencia no preparada */
$resultado = $mysqli->query("SELECT * FROM `alumnos`");


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
            width: 30%;
        }
    </style>
    </head>
    <body>
    <div style="width:100px; height:20px; border:1px solid black; text-align:center; margin:auto; margin-bottom:40px;">
    <a href="añadir.php">Añadir registro</a>
    <br><br>
	</div>
<?php

echo '<table>';
while ($row = $resultado->fetch_assoc()) {
    echo('<tr><td><a href="ver.php?DNI='.$row['DNI'].'">'.$row['Email'] .'</a></td><td>'. $row['Nombre'] .'</td><td><a style="text-decoration:none;" href="eliminar.php?DNI='.$row['DNI'].'">-</a></td></tr>');
    
}
echo "</table>";

/* se recomienda el cierre explícito */
$mysqli->close();

?>
</body>
</html>