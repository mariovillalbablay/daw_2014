<?php
require_once("db.php");
//Objeto base de datos
$db= new db("root","mariete13","Lugares");
//Conexion con la base de datos
$db->conectar_base_datos();
//vemos si el usuario y contrase�a es v�ildo
if ($db->autenticar($_POST["usuario"],$_POST["contrasena"])) {
    //si no existe, envio a la p�gina de autentificacion
	session_start();
    $_SESSION["autentificado"]= "SI";
    header ("Location:aplicacion.php");
}else {
    //si no existe le mando otra vez a la portada
    header("Location:index.php?errorusuario=s5i");
}
?> 