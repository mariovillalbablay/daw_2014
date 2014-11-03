<?php
	/**
	* Configuracion de usuario
	*
	* En esta clase se almacenan las configuraciones de la página
	*
	* @author Paco Gómez
	* @author http://es.linkedin.com/pub/paco-gomez-arnal/7/387/807/
	*
	* @version 1.0
	*/
	class configuracion{
		/**
		* array de configuracion de la página
		*
		* Los valores que aparecen por defecto en el array son:
		*	-"color_pagina"=>"#000000"
		*	-"color_texto"=>"#ffffff"
		*	-"color_menu"=>"#aaaaaa",
		*	-"color_submenu"=>"#aaaaaa"
		* @access private
		*/
		private $configuracion=array(
			"color_pagina"=>"#000000",
			"color_texto"=>"#ffffff",
			"color_menu"=>"#aaaaaa",
			"color_submenu"=>"#aaaaaa"
		);
		
		/**
		* Devuelve el valor de una configuracion
		*
		* @param parametro índice dentro de configuracion
		* @return devuelve el valor dentro del aray de configuración
		*/	
		function getValorConfiguracion($parametro){
			return $this->configuracion($parametro);
		}
		
		/**
		* Cambia el valor de una configuracion
		*
		* @param parametro índice dentro de configuracion
		* @valor valor valor a cambiar dentro del array de configuracion
		*/	
		function setValorConfiguracion($parametro,$valor){
			$this->configuracion($parametro)=$valor;
		}
	}
?>
