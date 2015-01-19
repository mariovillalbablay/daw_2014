<?php
require_once "cabecera.php";
require_once "cuerpo.php";
require_once "pie.php";
		
class pagina
{
	public $titulo="TITULO DE LA PAGINA";
	private $cabecera, $cuerpo, $pie;
	
	function __construct($filas,$columnas,$tit,$str)
	{
		$this->cabecera = new cabecera();
		$this->cabecera -> construirMenu();
		$this->cuerpo = new cuerpo;	
		$this->cuerpo -> setContenidoSimple($tit,$str);
		$this->cuerpo -> setTabla($filas,$columnas);
		
		$this->pie = new pie;	
		$this->pie->setPie();
	}
	
	function getPagina()
	{
	
		echo $this->cabecera.$this->cuerpo.$this->pie;
	}
}
						
?>