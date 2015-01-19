	<?php
		require "pagina.php";
		require_once "db.php";
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
<title>Untitled Document</title>
</head>

<body>

	<?php
		$db= new db("localhost","root","mariete13","Tarea18");
		$db->conectar_base_datos();
		$contenidoLugares= $db->getLugares();
		$pagina = new pagina(0,0,"$contenidoLugares","");
		$pagina->getPagina();
		
		
	?>
</body>
</html>