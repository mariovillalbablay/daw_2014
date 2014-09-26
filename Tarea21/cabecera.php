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
				"url"=> "index.php?id=2"),
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
		$menu="<div class='menu'><ul  class=\"nav\">";
		foreach($this->menu as $elementos)
		{
			$menu=$menu."<li><a href=".$elementos["url"].">".$elementos["txt"]."</a></li>";}
		$menu=$menu."</ul></div>";
		$this->setContenido($menu);
		
	}
}
		
?>