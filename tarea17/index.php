<?php
	require_once "db.php"
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
	<?php
		$db=new db("localhost","root","daw01","lugares");
		$db->conectar_base_datos();
		echo $db->getInfo();
		echo "</br>";
<<<<<<< HEAD
		$db->setLugar("MAdrid2","Excursión a las playas de Madrid, cuando el mundo explote","2014-10-12");
=======
		$db->setLugar("Alicante","Excursión a las playas de Alicante","2014-09-12");
>>>>>>> 61513b7c1f64888d08756d6826f2f9b708c53330
		echo $db->getLugares();
	?>
<body>
</body>
</html>
