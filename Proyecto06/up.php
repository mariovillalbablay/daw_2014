<?php
		require "pagina.php";
		require_once "db.php";
		session_start();
		
		if(isset($_GET["errorusuario"])){
			if($_GET["errorusuario"]=="si")
			{
				if(!isset($_COOKIE["errores"])){
					setcookie("errores",2,time()+30);
				}else{
					setcookie("errores",$_COOKIE["errores"]+1,time()+30);
				}
			}
		}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Proyecto 05</title>
<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

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
<?php
move_uploaded_file($_FILES['archivo']['tmp_name'],"files/" . $_FILES['archivo']['name']);
$pagina = new pagina(0,0,"<div id='cont'><h1>Perfil</h1><h2>Foto</h2><img width='200px' height='200px' src='files/".$_FILES['archivo']['name']."'></img></br><h2>Cambiar Foto</h2><form class='form-signin' role='form' 				 action='up.php' method='post' enctype='multipart/form-data'>
        <input  type='file' name='archivo' id='archivo'></input></br>
		 Nombre:<input name='nombre' type='text' placeholder='Paco' readonly = 'readonly'></br>
		 Apellidos:<input name='apellidos' type='text' placeholder='Gomez Arnal' readonly = 'readonly'></br></br>
        <button  type='submit'>Enviar</button>
      </form></div>","");

	$pagina->getPagina();	
	
?>
</body>
</html>