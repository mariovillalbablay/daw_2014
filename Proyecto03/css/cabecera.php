<?php
require_once "elemento.php";


class cabecera extends elemento
{
	//En este caso no tendra titulo
	function __construct()
	{
		$this->setTitulo("");
	}
	
	//Funcion que define el menu de la cabecera
	function setMenu($numElementos)
	{	
		$str="<a href='index.php'>Home</a>&nbsp;";
		for($i=1;$i<=$numElementos;$i++)
		{
			$str="<center>".$str."<a href='pagina".$i.".php"."'>&nbsp;"."Página".$i."</a>&nbsp;";
		}
		echo "</center>";
		$this->setContenido($str);
	}
}
		
?>