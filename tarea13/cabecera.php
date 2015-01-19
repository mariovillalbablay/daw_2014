<?php
require_once "elemento.php";

class cabecera extends elemento
{
	
	//En este caso no tendrá titulo
	function __construct()
	{
		$this->setTitulo("");	
	}
	
	//Funcion que define el menu de la cabecera
	function setMenu($numElementos)
	{
		$str="";
		for($i=0;$i<=$numElementos;$i++)
		{
			$str=$str."&nbsp;"."Enlace".$i;
		}
		$this->setContenido($str);
	}
	
}
?>