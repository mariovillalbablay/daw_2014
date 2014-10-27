<?php
	/**
	* Elemento base
	*
	* Esta clase es la encargada de escribir un trozo de página en código html
	* dicho código consiste en un título y en un contenido
	*
	* @author Paco Gómez
	* @author http://es.linkedin.com/pub/paco-gomez-arnal/7/387/807/
	*
	* @version 1.0
	*/
	class elemento
	{
		/**
		* titulo del elemento
		*
		* @access private
		*/
		public $titulo;
		/**
		* contenido del elemento
		*
		* @access private
		*/
		public $contenido;
		
		/**
		* Constructor
		*
		*/
		function __construct()
		{
			$this->titulo = "" ;
		}
		
		/**
		* Almacena el string del contenido a mostrar
		*
		* @param str html a mostrar en contenido
		*/
		public function setContenido($str)
		{
			$this->contenido=$str;
		}
		/**
		* Almacena el string del titulo a mostrar
		*
		* @param str html a mostrar en titulo
		*/
		public function setTitulo($str)
		{
			$this->titulo="<h1>".$str."</h1>";
		}	
		
		/**
		* Escribe el elemento en formato html
		*
		* El código se muestra de la siguiente forma:
		* </br>.$this->titulo.</br>.$this->contenido.</br>
		*
		* @return str html montado
		*/
		function __toString(){
			return "</br>".$this->titulo."</br>".$this->contenido."</br>";
		}
	}
?>