<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		//Definiendo un array
		//Diferencia con java que no hay que definir ni yipo ni  tamaño
		
		//A lo burro
		$ciudades[]="Valencia";
		$ciudades[]="Barcelona";
		$ciudades[]="Madrid";
		
		//Ordenada
		$provincias[]="Castellon";
		$provincias[]="Alicante";
		$provincias[]="Valencia";
		
		//con la funcion de array()
		$comunidades[]=array("Cataluña","Comunidad Valenciana","Madrid");
		
		//mostrando los arrays
		foreach ($ciudades as $valor) {
			echo ("Una ciudad es $valor</br>");}
		
		//Definiendo arrays con indices
		$capitales=array("España"=>"Madrid","Francia"=>"Paris","Italia"=>"Roma");
		
		echo ("La capital de España es $capitales[España]</br>");
		
		//mostrando los indices y sus valores
		foreach ($capitales as $indice => $valor) {
			echo ("La capital de $indice es $valor</br>");}
			
			
		//Arrays Multidimensionales
		$comunidades=array("Cataluña"=>array("Barcelona","Lérida","Tarragona","Gerona"),
						   "Comunidad Valenciana"=>array("Valencia","Castellón","Alicante"));
						   
		//mostrando arrays multidimensionales
		foreach ($comunidades as $indice => $valor) {
			foreach ($valor as $provincia) {
				echo ("Una provincia de $indice es $provincia </br>");}	}	
			
			?>	   
</body>
</html>