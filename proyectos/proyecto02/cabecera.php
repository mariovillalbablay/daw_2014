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
	function setMenuGoogle($numElementos)
	{
		//Construyendo menu
		$cssFich="<link rel=\"stylesheet\" type=\"text/css\" href=\"css/estilos.css\" media=\"screen\" />";
		$divMenu="<div id=\"hdtb_msb\">";
		$divMenuFin="</div>";
		//Elemento de menu
		$divElemento="<div class=\"hdtb_mitem hdtb_imb\">";
		$divdivElementoFin="</div>";
		//Elemento enlace menu
		$aElementoinicial="<a class=\"q qs\" href=\"pagina";
		$aElementoMedio=".php\">Pagina";
		$aElementoFinal="</a>";
		//Montamos el str de salida
		$str=$cssFich.$divMenu;
		
		for($i=1;$i<=$numElementos;$i++)
		{
			$str=$str.$divElemento;
			$str=$str.$aElementoinicial.$i;
			$str=$str.$aElementoMedio.$i;
			$str=$str.$aElementoFinal.$divdivElementoFin;
		}		
		
		$str=$str.$divMenuFin;
		
		//Sacnadolo por pantalla
		$this->setContenido($str);
	}
	
}
?>