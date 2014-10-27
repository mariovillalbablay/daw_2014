<?php
require_once "cabecera.php";
require_once "cuerpo.php";
require_once "pie.php";
	/**
	* Pagina
	*
	* Pagina compone una página web como composición de una cabecera, un cuerpo y un pie
	*
	* @author Paco Gómez
	* @author http://es.linkedin.com/pub/paco-gomez-arnal/7/387/807/
	*
	* @version 1.0
	*/
	class pagina
	{
		/**
		* variables de las tres partes de una página
		*
		* cabecera,cuerpo,pie
		* @access private
		*/
		private $cabecera,$cuerpo,$pie;
		
		/**
		* Constructor
		*
		*/
		function __construct()
		{
			$this->cabecera = new cabecera();
			$this->cuerpo = new cuerpo();
			$this->pie = new pie;
		}
		
		/**
		* Construye la cabecera con el menu
		*
		*/
		function setCabecera(){
			$this->cabecera->construirMenu();
		}
		
		/**
		* Construye el cuerpo a partir de un número de fotos
		*
		* @param titulo Título del cuerpo
		* @param numFilas número de filas de la tabla de fotos
		* @param numColumnas número de columnas de la tabla de fotos
		*/
		function setCuerpoFotos($titulo,$numFilas,$numColumnas){
			$this->cuerpo->setTablaFotos($titulo,$numFilas,$numColumnas);
		}

		/**
		* Construye el cuerpo con un str
		*
		* @param titulo Título del cuerpo
		* @param str texto de contenido
		*/		
		function setCuerpoContenido($titulo,$str){
			$this->cuerpo->setContenidoSimple($titulo,$str);
		}
		
		/**
		* Construye el pie
		*
		*/		
		function setPie(){
			$this->pie->setPie();
		}
		
		/**
		* Devuelve el contenido total de toda la página
		*
		* @return string con el html del contenido de cabecera, contenido y pie
		*/
		function getPagina()
		{
			return $this->cabecera.$this->cuerpo.$this->pie;
		}
		
		
	}
?>