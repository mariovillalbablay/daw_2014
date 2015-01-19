<?php
	/**
	* db
	*
	* Gestor de Bases de datos utilizando la nueva api mejorada de php mysqli orientada a objetos
	*
	*
	* @version 1.0
	*/
class db
{
	/**
	* string del servidor
	*/
	private $servidor="localhost";
	/**
	* string del usuario
	*/
	private $usuario="root";
	/**
	* string del password
	*/
	private $pass="mariete13";
	/**
	* string de la base de datos
	*/
	private $base_datos="Tarea18";
	/**
	* descriptor a la conexión con la base de datos
	*/
	private $descriptor;
	/**
	* boolean que nos indica si ha habido exito al conectar o no
	*/
	private $conectado;
	/**
	* información del error o conexión habilitada
	*/
	private $info;
	function __construct()
	{
		
		if(func_num_args()==1){
			$this->usuario = func_get_arg(0);
			$this->conectado=false;
			$this->info="";
		}elseif(func_num_args()==2){
			$this->usuario = func_get_arg(0);
			$this->pass = func_get_arg(1);
			$this->conectado=false;
			$this->info="";			
		}
	}
	
	/**
		* Realiza la conexión con la base de datos devolviendo el estado de la misma
		*
		* @return conectado boolean
	*/	
	public function conectar_base_datos()
	{
		$this->descriptor = new mysqli($this->servidor, $this->usuario, $this->pass, $this->base_datos);
		if ($this->descriptor->connect_errno) {
    		$this->$info="Fallo al contenctar a MySQL: (" . $this->descriptor->connect_errno . ") " . $this->descriptor->connect_error;
			$this->conectado=false;
		}else{
			$this->info="Conectado al servidor MySQL: " .$this->descriptor->host_info;
			$this->conectado=true;
		}
		
		return $this->conectado;
	}
	
	/**
		* Devuelve el estado de la conexión actual
		*
		* @return info string
	*/	
	public function getInfo(){
		return $this->info;
	}
	/**
		* Devuelve una tabla con todos los lugares almacenados en la tabla de la base de datos lugares
		*
		* @return str string
	*/	
	public function getLugares(){
		$str="";
		if($resultado = $this->descriptor->query("SELECT * FROM Lugares")){
			$str=$str."<center><table border=1><tr bgcolor='#dddddd'><td><b>ID</td><td><b>lugar</b></td><td><b>Descripción</b></td><td><b>fecha</b></td></tr>";
			for ($num_fila = 0; $num_fila < $resultado->num_rows; $num_fila++) {
				$resultado->data_seek($num_fila);
				$fila = $resultado->fetch_assoc();
				$str=$str."<tr>";
				$str=$str."<td><a name='id' href='aplicacion.php?lugar=".$fila['id_lugar']."'>".$fila['id_lugar']."</a></td>";
				$str=$str."<td>".$fila['nombre']."</td>";
				$str=$str."<td>".$fila['descripcion']."</td>";
				$str=$str."<td>".$fila['fecha']."</td>";
				$str=$str."</tr>";
			}
			$str=$str."</table></center>";
		}else{
			 printf("Error: %s\n", $this->descriptor->error);
		}
		return $str;
	}
	
	//Funcion para añadir nuevo lugar a la base de datos
	public function setLugar($lugar,$descripcion,$fecha){
		if($resultado = $this->descriptor->query("INSERT INTO Lugares (nombre,descripcion,fecha) VALUES ('$lugar','$descripcion','$fecha')")){
			echo "OK<br>";
		}else{
			echo "ERROR<br>";
			 printf("Error: %s\n", $this->descriptor->error);
		}
	}
	
	//Funcion que devuelve un formulario con los datos de un lugar para poder modificarlos
	public function getLugar($id){
		$str="";
		
		//Realizamos la sentencia sql para extraer de la bd los datos del id elegido
		$resultado = $this->descriptor->query("SELECT * FROM Lugares where id_lugar=$id");
		$fila = $resultado->fetch_assoc();
		
		//Escribimos el formulario y lo delvovemos con return
		$str=$str."<center><form method='POST' action='aplicacion.php'>ID:     <input type='text' ReadOnly = true maxlength='3'  name='id' value='".$id."'><br/><br/>Nombre:        <input type='text' name='nombre' value='".$fila['nombre']."'><br/><br/>Descripcion:     <input type='text' name='descripcion' value='".$fila['descripcion']."'><br/><br/>Fecha:     <input type='text' name='fecha' value='".$fila['fecha']."'><br/><br/><button type='submit' class='btn btn-success'>Modificar Datos</button></form></center>";
		return $str;
	
	
	
		}
		
		
	//Funcion que actualiza los datos el id seleccionado con la informacion introducida
	public function updateLugar($id,$nombre,$descripcion,$fecha){
		
		//Se realiza la actualizacion
		if($resultado = $this->descriptor->query("UPDATE Lugares SET nombre='$nombre',fecha='$fecha',descripcion='$descripcion' WHERE id_lugar=$id")){
		
		//En caso de error actualizando	
		}else{
			echo "ERROR<br>";
			 printf("Error: %s\n", $this->descriptor->error);
		}
	}
	
}