	<?php
		require "pagina.php";
		require_once "db.php";
		session_start();
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
	//En caso de que el usuario se autentifique mal saldra una cabezera informandole
	if(isset($_GET["errorusuario"])){
			if($_GET["errorusuario"]=="si")
			{
				echo "<h3 color='#aa0000'>Usuario y contraseña erroneos. Dale otra oportunidad</h3>";
			}
		}
	
	//Dependiendo el id mandado por la url se escribira una pagina u otra
	if (isset($_GET["id"])){
		switch($_GET["id"]){
		
		//Index o pagina principal
		case 1:
		$pagina = new pagina(0,0,"<div id='cont'><h1>Inicio</h1></br>Estas en la pagina de Inicio</div>","");break;
		
		//En caso de que no este autentificado y si el usuario intenta entrar en la seccion de lugares
		case 2:$pagina = new pagina(0,0,"<div id='cont'><h1>Restringido</h1></br>Inicia sesion para ver esta seccion</div>","");break;
		break;
		
		//pagina de contacto
		case 3:
		$pagina = new pagina(0,0,"<div id='cont'><h1>Contacto</h1></br><a href='mailto:mariovlbay@gmail.com'>Enviar email</a></div>","");break;
		
		default:$pagina = new pagina(0,0,"<div id='cont'><h1>Inicio</h1></br>Estas en la pagina de Inicio</div>","");
		}
		
	 //En caso de que sea la primera vez que se accede a la pagina se mostrara el inicio  
	}else{
		$pagina = new pagina(0,0,"<div id='cont'><h1>Inicio</h1></br>Estas en la pagina de Inicio</div>","");
		}
	$pagina->getPagina();
	?>
</body>
</html>