<?php
	class elemento
	{
		//Variable que almacena el titulo del elemento
		public $titulo;
		//Variable que almacena el contenido del elemento
		public $contenido;
		
		//Constructor
		function __construct()
		{
			$this->titulo="";
		}
		
		//Almacenamos en el contenido el codigo html a escribir
		public function setContenido($str)
		{
			$this->contenido=$str;
		}
		
		//Almacenamos en el titulo el html a escribir
		public function setTitulo($str)
		{
			$this->titulo=$str;
		}
		
		//Devolvemos el elemento
		function __toString()
		{
			return "</br>".$this->titulo."</br>".$this->contenido."</br>";
		}
	}
			
		
?>