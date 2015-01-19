<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <?php
		//Todos los tipos de variables
		//ENTEROS
		$numero=1;
		$NUMERO=2;
		$Numero=3;
		$numero_negativo=-50;
		
		//COMA FLOTANTE
		$decimal=2.345;
		
		//CADENAS
		$frase="Esta es una frase completa";
		
		//BOOLEAN
		$verdadero=TRUE;		
		
		//CONSTANTE
		define("PI",3.14);
	?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Documento sin título</title>
    </head>

    <body>
 	<?php
		echo "la variable numero contiene: $numero<br>";
		echo "la variable Numero contiene: $Numero<br>";
		echo "la variable NUMERO contiene: $NUMERO<br>";
		echo "la variable decimal contiene: $decimal<br>";
		echo "la variable frase contiene: $frase<br>";
		echo "la variable verdadero contiene: $verdadero<br>";
		echo "la variable pi contiene: ".PI."<br>";
	?>
    </body>
</html>