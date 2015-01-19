<?php
require_once "elemento.php";


class cabecera extends elemento
{
	
	private $menu=array(
		"home"=>array(
				"txt"=>"Inicio",
				"url"=> "index.php?id=1"),
		"lugares"=>array(
				"txt"=>"Lugares",
				"url"=> "aplicacion.php"),
		"contacto"=>array(
				"txt"=>"Contacto",
				"url"=> "index.php?id=3"),
		"facebook"=>array(
				"txt"=>"Facebook",
				"url"=> "http://www.facebook.es"));
				
				
	//En este caso no tendra titulo
	function __construct()
	{
		$this->setTitulo("");
	}
	
	function setDireccion ($elementoMenu, $direccionWeb){
		$elemento=$this->menu($elementoMenu);
		$elemento["url"]=$direccionWeb;
	}
	
	
	//Funcion que define el menu de la cabecera
	function construirMenu()
	{	
		$menu="  <nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
      <div class='container'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>";
         
      
		foreach($this->menu as $elementos)
		{
			$menu=$menu."<a  class='navbar-brand' href=".$elementos["url"].">".$elementos["txt"]."</a>";}
		//Inicio la sesión

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if (isset($_SESSION['autentificado'])){

if ($_SESSION["autentificado"] != "SI") {
    $menu=$menu." </div>
        <div id='navbar' class='navbar-collapse collapse'>
          <form class='navbar-form navbar-right' role='form' action='control.php' method='POST'>
            <div class='form-group'>
              <input name='usuario' type='text' placeholder='Email' class='form-control'>
            </div>
            <div class='form-group'>
              <input name='contrasena' type='password' placeholder='Password' class='form-control'>
            </div>
            <button type='submit' class='btn btn-success'>Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>";
		
}


//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ($_SESSION["autentificado"] == "SI") {
    $menu=$menu." </div>
        <div id='navbar' class='navbar-collapse collapse'>
          <form class='navbar-form navbar-right' role='form' action='salir.php' method='POST'>
    
            <button type='submit' class='btn btn-success'>Cerrar Sesion</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>";
}
		
	}
else{   $menu=$menu." </div>
        <div id='navbar' class='navbar-collapse collapse'>
          <form class='navbar-form navbar-right' role='form' action='control.php' method='POST'>
            <div class='form-group'>
              <input name='usuario' type='text' placeholder='Email' class='form-control'>
            </div>
            <div class='form-group'>
              <input name='contrasena' type='password' placeholder='Password' class='form-control'>
            </div>
            <button type='submit' class='btn btn-success'>Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>";}	
	$this->setContenido($menu);
	}
}
		
?>