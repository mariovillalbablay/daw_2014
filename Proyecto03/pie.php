<?php
require_once "elemento.php";

class pie extends elemento
{
	function __construct()
	{
		$this->setTitulo("");
	}
	
	//Funcion que crea el pie de pagina
	function setPie()
	{
		$str="";
		$str="<hr><center> Creado por Mario Villalba </center></hr>";
		$this->setContenido($str);
	}
}
		
?>