<?php
	class pagina{
		
		private $paginaAPintar="";
		function __construct($numElementos)
		{
			$this->paginaAPintar="<div class=\"menu\">";
			$this->paginaAPintar=$this->paginaAPintar."<ul class=\"nav\">";
			
			for ($i=1;$i<=$numElementos;$i++){
				$this->paginaAPintar=$this->paginaAPintar."<li><a href=\"index".$i.".php\">Pagina".$i."</a></li>";
			}
			$this->paginaAPintar=$this->paginaAPintar."</ul></div>";
		}
		
		//Funcion que pinta la página
		function __toString(){
			return $this->paginaAPintar;
		}
		
		
   }

?>