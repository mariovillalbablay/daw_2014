<?php
class layout{
	 public $titulo= "TITULO DE LA PAGINA";
	 private $server;
	  //Los cnstructores se ponen siempre el mismo nombre
	 function __construct()
	 {
		 //la variable server devolvera el tipo de navegador que tenemos instalado
		 $this->server=$_SERVER['HTTP_USER_AGENT'];
		 
	 }
	 
	  function getCabecera()
	 {
		return $this->titulo;
		 
	 }
	
		 function getPie()
	 {
		
		 return $this->server;
		 
		 
	 }
	
	}


?>