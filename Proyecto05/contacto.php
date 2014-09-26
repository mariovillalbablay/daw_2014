	<?php
		require "pagina.php";
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

	<?php
		$pagina = new pagina(0,0,"<div id='cont'><h1>Contacto</h1></br><a href='mailto:mariovlbay@gmail.com'>Enviar email</a></div>","");
	    $pagina->getPagina();
		
		
	?>
</body>
</html>