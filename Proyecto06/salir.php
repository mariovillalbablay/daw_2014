<?php

//Limpiamos la sesion de usuario y la destruimos y redirigimos a index
	session_start();
	session_unset(); 
	session_destroy();
	header("Location: index.php");
?>
