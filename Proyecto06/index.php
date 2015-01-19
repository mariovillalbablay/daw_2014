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
	//En caso de que el usuario se autentifique mal saldra una cabezera informandole
	
	
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
		
		
		case 4:
		if(isset($_GET["errorusuario"])){
			if($_GET["errorusuario"]=="si")
			{
				if(!isset($_COOKIE["errores"])){
					
					$pagina = new pagina(0,0,"<h3 color='#aa0000'>Usuario y contraseña erroneos. Te has equivocado 1 vez </h3>","");}
				else{	
				if($_COOKIE["errores"]>3){$pagina = new pagina(0,0,"<h3 color='#aa0000'>Te has equivocado 4 veces, Tendrás que esperar 30 segundos </h3>","");
					?>
						<style type="text/css">.navbar-form.navbar-right {
							display: none;}
                        </style>
                        <?php }
				
				else{$pagina = new pagina(0,0,"<h3 color='#aa0000'>Usuario y contraseña erroneos. Te has equivocado ".$_COOKIE["errores"]." veces </h3>","");}}
				
			}
		}
		;break;
		
		case 5:
		$pagina = new pagina(0,0,"<div id='cont'><h1>Perfil</h1><h2>Foto</h2><img  width='200px' height='200px' src='sin.jpg'></img></br><h2>Cambiar Foto</h2><form class='form-signin' role='form' 				 action='up.php' method='post' enctype='multipart/form-data'>
        <input  type='file' name='archivo' id='archivo'></input></br>
		 Nombre:<input name='nombre' type='text' placeholder='Paco' readonly = 'readonly'></br>
		 Apellidos:<input name='apellidos' type='text' placeholder='Gomez Arnal' readonly = 'readonly'></br></br>
        <button  type='submit'>Enviar</button>
      </form></div>","");break;
		
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