<?php
		
class ciudades
{

	public $comunidades;	   
						   
	
	function __construct()
	{
		//Inicializamos el array multidimensional de comunidades con todas las comunidades, sus provincias y la capital de cada provincia
		$this->comunidades =array("Cataluña"=>array("Barcelona"=>"Barcelona","Lérida"=>"Lérida","Tarragona"=>"Tarragona","Gerona"=>"Gerona"),
						   "Comunidad Valenciana"=>array("Valencia"=>"Valencia","Castellón"=>"Castellón de la Plana","Alicante"=>"Alicante"),
				"Castilla-La Mancha"=>array("Albacete"=>"Albacete","Ciudad Real"=>"Ciudad Real","Cuenca"=>"Cuenca","Guadalajara"=>"Guadalajara","Toledo"=>"Toledo"),
				"Aragón"=>array("Huesca"=>"Huesca","Teruel"=>"Teruel","Zaragoza"=>"Zaragoza"),
				"Comunidad de Madrid"=>array("Madrid"=>"Madrid"),
				"Región de Murcia"=>array("Región de Murcia"=>"Murcia"),
				"Comunidad Foral de Navarra"=>array("Comunidad Foral de Navarra"=>"Pamplona"),
				"Andalucía"=>array("Almería"=>"Almería","Cádiz"=>"Cádiz","Córdoba"=>"Córdoba","Granada"=>"Granada","Huelva"=>"Huelva","Jaén"=>"Jaén","Málaga"=>"Málaga","Sevilla"=>"Sevilla"),
				"Principado de Asturias"=>array("Principado de Asturias"=>"Oviedo"),
				"Cantabria"=>array("Cantabria"=>"Santander"),
				"Castilla y León"=>array("Ávila"=>"Ávila","Burgos"=>"Burgos","León"=>"León","Palencia"=>"Palencia","Salamanca"=>"Salamanca","Segovia"=>"Segovia","Soria"=>"Soria","Valladolid"=>"Valladolid","Zamora"=>"Zamora"),
				"Extremadura"=>array("Badajoz"=>"Badajoz","Cáceres"=>"Cáceres"),
				"Galicia"=>array("La Coruña"=>"La Coruña","Lugo"=>"Lugo","Orense"=>"Orense","Pontevedra"=>"Pontevedra"),
				"La Rioja"=>array("La Rioja"=>"Logroño"),
				"Islas Baleares"=>array("Islas Baleares"=>"Palma de Mallorca"),
				"País Vasco"=>array("Álava"=>"Vitoria","Guipúzcoa"=>"San Sebastián","Vizcaya"=>"Bilbao"),
				"Islas Canarias"=>array("Las Palmas"=>"Las Palmas de Gran Canaria","Santa Cruz de Tenerife"=>"Santa Cruz de Tenerife"));
	}
	
	
	
	//Función que imprimirá todas las comunidades autónomas de España
	function imprimirComunidades()
	{
		//Usamos un foreach para recorrer todo el array y sacar los valores de las comunidades para mostrar el nombre de cada comunidad
		foreach ($this->comunidades as $valor=>$indice) {
			echo ("Una comunidad es $valor</br>");}
	}
	
	
	
	
	//Función que imprimirá todas las ciudades de la comunidad que se le pase como argumento
	function devuelveProvincias($comunidad)
	{
		//Usamos un foreach doble y un if para recorrer todo el array y cuando coincida la comunidad del array con la comunidad introducida por el 			          usuario mostraremos todas sus provincias
		foreach ($this->comunidades as $comunidades2 => $provincia) {
			foreach ($provincia as $provincia2=>$capital) {
				if ($comunidades2==$comunidad){
			 echo ("Una provincia de $comunidad es $provincia2 </br>");}}	}	
	}
	
	
	
	
	//Función que imprimirá la cápital de la provincia que se le pase como argumento
	function devuelveCapital($provincia)
	{
			//Usamos un foreach doble y un if para recorrer todo el array y cuando coincida la provincia del array con la provincia introducida por el 			          usuario mostraremos su capital
				foreach ($this->comunidades as $comunidades2 => $provincia2) {
			foreach ($provincia2 as $provincia3=>$capital) {
				if ($provincia3==$provincia){
			 echo ("Una capital de $provincia es $capital </br>");}}	}	
	}
}
						
?>