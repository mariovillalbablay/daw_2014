<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tarea16</title>
</head>

<body>
<?php
	//funciones que pueden devolver un array
	$mi_array = range(120,130); //Rango entre 130 y 130
	foreach ($mi_array as $valor) {
		echo ("Nº : $valor</br>");
	}
	echo "<hr>";
	
	$pizza = "porción1 porción2 porción3 porción4 porción5 porción6";
	$porciones = explode(" ", $pizza);//Divide el string anterior en varios strings
	foreach ($porciones as $valor) {
		echo ("Porción: $valor</br>");
	}
	echo "<hr>";
	
	//contador elementos
	echo count($porciones);
	echo "<hr>";
	
	//Buscador de elementos
	$os = array("Mac", "NI", "Trix", "Linux");
	if (in_array("Mac", $os)) {
		echo "Existe Mac";
	}
	echo "<hr>";
	
	//Buscador devuelve la clave
	$array=array(0 => 'azul', 1 => 'rojo', 2 => 'verde', 3 => 'rojo');
	$clave = array_search('verde', $array); //devuelve un 2
	echo $clave;
	echo "<hr>";
	
	//Ordenar incluye valor e indice
	asort($array);
	foreach ($array as $indice => $valor) {
		echo ("indice:  $indice con valor $valor</br>");
	}
	echo "<hr>";
?>
</body>
</html>