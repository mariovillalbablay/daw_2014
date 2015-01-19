
<?php
//Inicio la sesión
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ($_SESSION["autentificado"] != "SI") {
    //si no existe, envio a la página de autentificacion
    header("Location: index.php?id=2");
    //ademas salgo de este script
    exit();
}
?> 