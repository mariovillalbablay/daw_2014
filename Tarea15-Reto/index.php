<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include "ciudades.php";
?>
<title>Untitled Ddddddd</title>
</head>

<body>
	<?php
	
		$ciudades = new ciudades();
		
		$ciudades->imprimirComunidades();
		
		$ciudades->devuelveProvincias("País Vasco");
		
		$ciudades->devuelveCapital("Guipúzcoa");		
			
	?>	   
</body>
</html>