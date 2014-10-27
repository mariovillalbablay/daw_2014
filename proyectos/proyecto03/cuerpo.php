<?php
require_once "elemento.php";
	/**
	* cuerpo
	*
	* El objetivo de esta clase es encargarse de la parte central de la página correspondiente al contenido
	* @author Paco Gómez
	* @author http://es.linkedin.com/pub/paco-gomez-arnal/7/387/807/
	*
	* @version 1.0
	*/
	class cuerpo extends elemento
	{
		
		/**
		* Constructor
		*
		*/
		function __construct()
		{
		}
		
		/**
		* Construye el cuerpo a partir de un número de fotos
		*
		* @param tit Título del cuerpo
		* @param filas número de filas de la tabla de fotos
		* @param columnas número de columnas de la tabla de fotos
		*/
		function setTablaFotos($tit,$filas,$columnas)
		{
			$this->setTitulo($tit);	
			
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
		
		/**
		* Construye el cuerpo a partir de un texto simple
		*
		* @param tit Título del cuerpo
		* @param str Contenido del cuerpo
		*/
		function setContenidoSimple($tit,$str){
			$this->setTitulo($tit);	
			$this->setContenido($str);
		}
		
	}
?>