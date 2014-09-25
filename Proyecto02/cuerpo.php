<?php
require_once "elemento.php";

class cuerpo extends elemento
{
	function __construct()
	{
		$this->setTitulo("FOTOGRAFÍAS");
	}
	
	//funcion para crear la tabla
	function setTabla($filas,$columnas)
	{
		$str="";
		$contador=1;
		
		$str="<table>";
		for ($i=1;$i<=$filas;$i++)
		{
			$str=$str."<tr>";
			for ($j=1;$j<=$columnas;$j++)
			{
				$str=$str."<td><img src='foto_".$contador++.".jpg'></img></td>";
			}
			$str=$str."</tr>";
		}
		$str=$str."</table>";
			
			$this->setContenido($str);
		}
	}
	
		
?>