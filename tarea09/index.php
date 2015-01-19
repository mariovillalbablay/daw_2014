<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	$diaSemana=date("w");
	$diaMes=date("d");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<h1>DIA MES</h1>
    <?=$diaMes;?>
    <?php
		if($diaMes<=15){
			echo "Primera quincena";
		}else{
			echo "Segunda quincena";
		}
	?>
	<h3>DIA SEMANA</h3>
    <?=$diaSemana;?>
	<?php
	if ($diaSemana == 1) {
		echo "El día es Lunes";
	} elseif ($diaSemana == 2) {
		echo "El día es Martes";
	} elseif ($diaSemana == 3) {
		echo "El día es Miércoles";
	} elseif ($diaSemana == 4) {
		echo "El día es Jueves";	
	}
	?>
</body>
</html>