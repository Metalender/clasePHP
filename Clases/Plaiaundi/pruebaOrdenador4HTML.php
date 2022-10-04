<!DOCTYPE html>
<html>
<head>
<title>Insert ordenador</title>
<meta charset="UTF-8">
</head>
<body>

	<form>
		<input name="codHZ" placeholder="codHZ"> <input name="SO"
			placeholder="SO"><label><input name="esSobremesa" type="checkbox">Sobremesa</label> <br>
		<br>
		<input type="submit" value="Guardar" name="Guardar"><input type="submit" value="Mostrar" name="Mostrar"><input type="submit" value="Eliminar" name="Eliminar">
	</form>
    <?php
    include 'ordenador.php';

    $ordenadorArray = ordenador::getOrdenadoresUnselizados('storeordenador');

    // imprimir los coches del fichero
        foreach ($ordenadorArray as $ordenador) {
            $ordenador->toString();
    }
    
    
  
    if(isset($_GET['Guardar'])){
    if (isset($_GET['codHZ']) && isset($_GET['SO'])) {

        $codHZ = $_GET['codHZ'];
        $SO = $_GET['SO'];
        if (isset($_GET['esSobremesa']))
            $esSobremesa = $_GET['esSobremesa'];
        else
            $esSobremesa = false;

        if ($codHZ != NULL && $SO != NULL) { // se ha rellenado el form
                                             // echo "se va ha crear el ordenador";
            foreach ($ordenadorArray as $ordenador) {
                if(!($_GET['codHZ']==$ordenador->getcodHZ())){
                    $ordenadorNuevo = new ordenador($codHZ, $SO, $esSobremesa);
                    
                    
                    $ordenadorArray[] = $ordenadorNuevo;
                    
                    ordenador::guardarSerializado('storeordenador', $ordenadorArray);
                }
            }
            
            
        }
    }
}
if(isset($_GET['Mostrar'])){
   foreach ($ordenadorArray as $ordenador)
       $ordenador->toString();
}
if(isset($_GET['Eliminar'])){
    if(isset($_GET['codHZ']))
        $codigo = $_GET['codHZ'];
    foreach ($ordenadorArray as $ordenador){
        if ($codigo == $ordenador->getCodHZ()) {
           unset($ordenador[$ordenador->getCodHZ()]);
        }
    }
}
    ?>
</body>
</html>
