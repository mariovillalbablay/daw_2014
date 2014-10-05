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
		$lnkBase="<td><a href=\"pagina";
		$lnkFin="</a></td>";
		$str="<center><table><tr>";
		$str=$str."<td><a href=\"index.php\">Home".$lnkFin;
		for($i=1;$i<=$numElementos;$i++)
		{
			$str=$str.$lnkBase.$i.".php\">Pagina".$i.$lnkFin;
		}
		$str=$str."</tr></table></center>";
		$this->setContenido($str);
	}
	
}
?>