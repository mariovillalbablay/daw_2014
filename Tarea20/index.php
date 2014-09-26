	<?php
		require "pagina.php";
		require_once "db.php";
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
	
	if (isset($_GET["id"])){
		switch($_GET["id"]){
		case 1:
		$pagina = new pagina(0,0,"<div id='cont'><h1>Inicio</h1></br>Estas en la pagina de Inicio</div>","");break;
		case 2:
		$db= new db("localhost","root","mariete13","Tarea18");
		$db->conectar_base_datos();
		$contenidoLugares= $db->getLugares();
		$pagina = new pagina(0,0,"$contenidoLugares","");break;
		
		case 3:
		$pagina = new pagina(0,0,"<div id='cont'><h1>Contacto</h1></br><a href='mailto:mariovlbay@gmail.com'>Enviar email</a></div>","");break;
		
		default:$pagina = new pagina(0,0,"<div id='cont'><h1>Inicio</h1></br>Estas en la pagina de Inicio</div>","");
		}
		
	   
	}else{
		$pagina = new pagina(0,0,"<div id='cont'><h1>Inicio</h1></br>Estas en la pagina de Inicio</div>","");
		}
	$pagina->getPagina();
	?>
</body>
</html>