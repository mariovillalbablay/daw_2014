<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		function mensajeSimple($str)
		{
			echo "<div class='parrafo'>".$str."</div>";
		}
		//Fecha actual simple
		mensajeSimple(date('l jS \of F Y h:i:s A'));
		//Utilizando clase DateTime
		$date1 = new DateTime('2013-03-24');
		mensajeSimple($date1->format("d-m"));
		mensajeSimple($date1->format("Y"));
		$date2 = new DateTime('+2 days');
		mensajeSimple($date2->format("d-m-Y"));
		
		//Modificaciones
		$date1->setDate(2013, 12, 30); //yyyy, mm, dd will set the the specified date
		$date1->setTime(12, 3, 20); //hh, mm, ss (optional) will modify the time
		$date1->modify('tomorrow'); //string based manipulation
		mensajeSimple($date2->format("d-m-Y"));
		mensajeSimple("-------------------------");
		
		//Comparando fechas
		$carles = new DateTime('May 20th, 1980');
		$adolf  = new DateTime('March 11th, 1962');
 
		if ($carles > $adolf)
    		echo 'carles is younger than adolf';
	
		//Añadir tiempo
		$date1 = new DateTime('2013-03-24');
		mensajeSimple($date1->format("d-m-Y-H"));
		$date1->add(new DateInterval("P1DT1H"));
		mensajeSimple($date1->format("d-m-Y-H"));
		
		//FEchas por localizacion
		date_default_timezone_set('America/New_York');
		$date1 = new DateTime('today'); //datetime object is on New York time
		mensajeSimple($date1->format("d-m-Y h-m-s"));
		date_default_timezone_set('Europe/Madrid');
		$date2 = new DateTime('today'); //datetime object is on New York time
		mensajeSimple($date2->format("d-m-Y h-m-s"));
	?>
</body>
</html>