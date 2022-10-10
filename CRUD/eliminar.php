<?php
$DNI= htmlspecialchars($_GET["DNI"]);   

$mysqli = new mysqli("localhost", "root", "", "centrofp");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sentencia="DELETE FROM alumnos WHERE DNI='".$DNI."'";
$query = mysqli_query($mysqli,$sentencia);

echo 'Registro eliminado';
?>