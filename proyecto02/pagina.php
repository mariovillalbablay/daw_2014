<?php
require_once "cabecera.php";
require_once "cuerpo.php";
require_once "pie.php";

class pagina
{
	public $titulo="TITULO DE LA PAGINA";
	private $cabecera,$cuerpo,$pie;
	
	function __construct($numFilas,$numColumnas)
	{
		$this->cabecera = new cabecera();
<<<<<<< HEAD
		$this->cabecera->setMenuGoogle(5);
=======
		$this->cabecera->setMenu(5);
>>>>>>> 05e694f882ef6f1bbdec615978d763496cad7c31
		$this->cuerpo = new cuerpo;
		$this->cuerpo->setTabla($numFilas,$numColumnas);
		$this->pie = new pie;
		$this->pie->setPie();
	}
	
	function getPagina()
	{
		echo $this->cabecera.$this->cuerpo.$this->pie;
	}
	
<<<<<<< HEAD
	
=======
>>>>>>> 05e694f882ef6f1bbdec615978d763496cad7c31
}
?>