<?php
	require_once "elemento.php";
	/**
	* Cabecera
	*
	* El objetivo de esta clase es encargarse de la parte superior de la página a representar
	* siendo el elemento más importante a representar el menu
	*
	* @author Paco Gómez
	* @author http://es.linkedin.com/pub/paco-gomez-arnal/7/387/807/
	*
	* @version 1.0
	*/
	class cabecera extends elemento
	{
		/**
		* menu del site
		*
		* Almacena el menu del site con la siguientes elementos
		*	"home"=>array(
						"txt"=>"Inicio",
						"url"=>"http://192.168.56.1/daw/proyecto03/"
					)
		* @access private
		*/
		private $menu=array(
			"home"=>array(
						"txt"=>"Inicio",
						"url"=>"http://192.168.56.1/daw/proyecto03_Reto/"
					),
			"fotos"=>array(
						"txt"=>"submenu",
						"titulo"=>"Paises",
						"url"=>"#",
						"submenu"=>array(
							"Africa"=>array("txt"=>"Africa",
											"url"=>"http://192.168.56.1/daw/proyecto03_Reto/fotos.php"),
							"Europa"=>array("txt"=>"Europa",
											"url"=>"http://192.168.56.1/daw/proyecto03_Reto/fotos.php")
							)
					),
			"contacto"=>array(
						"txt"=>"Contacto",
						"url"=>"http://192.168.56.1/daw/proyecto03_Reto/contacto.php"
					),
			"facebook"=>array(
						"txt"=>"Facebook",
						"url"=>"http://facebook.es"
					)
		);
		
		/**
		* direccion del logo del site
		*
		* @access private
		*/
		private $logo="";
		
		/**
		* Constructor
		*
		*/
		function __construct()
		{
			$this->setTitulo($this->logo);	
		}
		
		/**
		* Cambia la direccion http de un enlace del menu
		*
		* @param elementoMenu elemento a modificar
		* @param direccionWeb direccion web nueva
		*/	
		function setDireccion($elementoMenu,$direccionWeb){
			$elemento=$this->menu[$elementoMenu];
			$elemento["url"]=$direccionWeb;
		}
		
		/**
		* Muestra el menu a partir del array
		*
		*/	
		function construirMenu()
		{
			$menu="<div id='cssmenu'><ul>";
			foreach ($this->menu as $elementos) {
				if(strcmp($elementos["txt"],"submenu")==0)
				{
					$menu=$menu."<li><a href=".$elementos["url"].">".$elementos["titulo"]."</a>";
					$menu=$menu."<ul>";
					foreach ($elementos["submenu"] as $submenu)
					{
						$menu=$menu."<li><a href=".$submenu["url"].">".$submenu["txt"]."</a></li>";
					}
					$menu=$menu."</ul></li>";
					//$submenu=$elementos["submenu"];
					//$menu=$menu."<li><a href=".$elementos["url"].">".$elementos["titulo"]."</a>";
					//$menu=$menu."<ul>";

					//for($contador=1;$contador<=(count($submenu)/2);$contador++){
						//$menu=$menu."<li><a href=".$submenu["url".$contador].">".$submenu["txt".$contador]."</a></li>";
					//}
					//$menu=$menu."</ul></li>";
				}else{
					$menu=$menu."<li><a href=".$elementos["url"].">".$elementos["txt"]."</a></li>";
				}
			}
			$menu=$menu."</ul></div>";
			$this->setContenido($menu);
		}

		
	}
?>