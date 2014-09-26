<?php
	require "seguridad.php";
	require "pagina.php";
	require_once "db.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Proyecto 05</title>
<style> 
td, th {
padding: 20px;
}
</style>
<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./index_files/ie-emulation-modes-warning.js"></script><style type="text/css"></style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	Te has autenticado correctamente
    <br>
    <br>
    <?php $db= new db("localhost","root","mariete13","Tarea18");
		
		if (isset($_GET["lugar"])){
		$db->conectar_base_datos();
		$contenidoLugar= $db->getLugar($_GET["lugar"]);
		$pagina = new pagina(0,0,"$contenidoLugar","");
		$pagina->getPagina();
			
		}else{
			$db->conectar_base_datos();
			if(isset($_POST["nombre"])){
				$db->updateLugar($_POST["id"],$_POST["nombre"],$_POST["descripcion"],$_POST["fecha"]);}
				
			
			$contenidoLugares= $db->getLugares();
			$pagina = new pagina(0,0,"$contenidoLugares","");
			$pagina->getPagina();}
	?>
    
</body>
</html>