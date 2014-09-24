<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
	<?php
		//Variables de fecha
		$DiaMes=date("d");
		$diaSemana=date("w");
	?>

<body>
	<?php
		if ($DiaMes<=15) {
			
			echo "Estamos en la Primera Quincena del mes</br></br>";
			
		}else{
				
			echo "Estamos en la Segunda Quincena del mes</br></br>";
		 }
		 
		 if($diaSemana == 0){
			 
			 echo "Estamos en Domingo</br></br>";
			 
			 }
		 elseif($diaSemana == 1){
			 
			 echo "Estamos en Lunes</br></br>";
			 
			 }
			  elseif($diaSemana == 1){
			 
			 echo "Estamos en Lunes</br></br>";
			 
			 }
			  elseif($diaSemana == 2){
			 
			 echo "Estamos en Martes</br></br>";
			 
			 }
			  elseif($diaSemana == 3){
			 
			 echo "Estamos en Miercoles</br></br>";
			 
			 }
			  elseif($diaSemana == 4){
			 
			 echo "Estamos en Jueves</br></br>";
			 
			 }
			  elseif($diaSemana == 5){
			 
			 echo "Estamos en Viernes</br></br>";
			 
			 }
			  elseif($diaSemana == 6){
			 
			 echo "Estamos en Sabado</br></br>";
			 
			 }
	?>
</body>
</html>