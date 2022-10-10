<?php 
$DNI = htmlspecialchars($_GET["DNI"]);
$mysqli = new mysqli("localhost", "root", "", "centrofp");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAAHHHH</title>

</head>
<body>
	<form>
	<label>DNI<input readonly type="text" name="DNI" value=<?php echo $DNI  ?>></label>
	<label>Nombre<input type="text" name="nombre"></label>
	<label>email<input type="text" name="email" ></label>
	<label>Código de matricula<input type="text" name="codMatricula" ></label>
	<label>Ciclo<input type="text" name="ciclo" ></label>
	<input type="submit">
	</form>
</body>
</html>
<?php

if (isset($_GET['nombre']) && isset($_GET['email'])&& isset($_GET['ciclo'])&& isset($_GET['codMatricula'])) {
    $nombre= $_GET['nombre'];
    $email = $_GET['email'];
    $codMatricula = $_GET['codMatricula'];
    $ciclo = $_GET['ciclo'];
    
   
    
    /* Sentencia preparada, etapa 1: preparación */
    if (!($sentencia = $mysqli->prepare("UPDATE alumnos SET Nombre=?, Email=?, Ciclo=?, CodMatricula=? WHERE DNI=?;"))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    /* Sentencia preparada, etapa 2: vinculación y ejecución */
    if (!$sentencia->bind_param("sssss", $nombre, $email, $ciclo, $codMatricula, $DNI)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    /* se recomienda el cierre explícito */
    $sentencia->close();
    header("Location: ver.php?DNI=".$DNI);
    
    /* Sentencia no preparada */
    //     $resultado = $mysqli->query("SELECT * FROM test");
    //     var_dump($resultado->fetch_all());
    
}



?>
