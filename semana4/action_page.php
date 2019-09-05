<?php

	echo "Su nombre es ".$_GET['nombre'];

	

	

	$MiObjeto= new stdClass();
    $MiObjeto->nombre=$_GET ['nombre'];
    $MiObjeto->apellido=$_GET ['apellido'];


	var_dump(json_encode($MiObjeto));
    $archivo=fopen('usuario.txt', 'a');
	fwrite($archivo, $_GET['nombre']."\n");
    var_dump(json_encode($MiObjeto));
	fclose($archivo);

?>