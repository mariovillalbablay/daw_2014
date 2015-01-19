	<?php
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
	
	if (isset($_POST["nombre"])){
		$db= new db("localhost","root","mariete13","Tarea18");
		$db->conectar_base_datos();
		$db->setLugar($_POST["nombre"],$_POST["descripcion"],$_POST["fecha"]);
		
	}
	?>
    
    <form method="post" action="index.php">
    	Lugar:
        <br/><input type="text" name="nombre"/><br/>
        Descripcion:
        <br/><textarea class="form-control" rows="3" name="descripcion"></textarea><br/>
        Fecha:
        <br/><input type="text" name="fecha"/><br/>
        <input type="submit" value="enviar"/><br/></form>
</body>
</html>