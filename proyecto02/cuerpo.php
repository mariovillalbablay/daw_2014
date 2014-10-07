<?php
require_once "elemento.php";

class cuerpo extends elemento
{
	
	//En este caso no tendrá titulo
	function __construct()
	{
		$this->setTitulo("FOTOGRAFIAS");	
	}
	
	//Funcion que define la tabla
	function setTabla($filas,$columnas)
	{
		$str="";
		$contador=1;
		$strFoto01="<img src=\"img/";
		$strFoto02=".jpg\" height=150 width=150>";
		
		$str="<table>";
		for($i=1;$i<=$filas;$i++)
		{
			$str=$str."<tr>";
			for($j=1;$j<=$columnas;$j++)
			{
				$str=$str."<td>".$strFoto01."foto".$contador++.$strFoto02."</td>";
			}
			$str=$str."</tr>";
		}
		$str=$str."</table>";
		
		$this->setContenido($str);
	}
	
}
?>