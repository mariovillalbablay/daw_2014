<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reto01</title>
<script type="text/javascript" src="lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="lightbox.css" media="screen" />

	<style type="text/css">
	
	/* Establecemos el css que pondrá bordes a la tabla, 
	la alineará al centro de la página y fijará
	 un tamaño de 300*300px a las imágenes*/
	
		table{
			text-align:center;
			margin: auto;}
			
        td, th {
            border: 1px solid black; }
			
		#foto {
			width: 300px;
			height: 300px;}
			
				
    </style>
    
</head>

<body>
	<table><tr>
	<?php 
	
	//Bucle for preparado unicamente para colocar 4 imágenes en una tabla
	
		for($i=1;$i<=4;$i++){
			
			//Bucle if para que cuando tengamos 2 imágenes en una fila a la 3ª imágen crea una nueva fila
	           if($i==3){
				   echo "</tr><tr>";
			   }
			   
			//Escribimos las celdas con la imágen, y un link a la misma con su nombre
				echo "<td><img src='foto_0$i.jpg' id='foto'></img></br><a href='foto_0$i.jpg' rel='lightbox'>foto_0$i</a></td>";
			
			}
	
	
	?>
    </tr></table>
</body>
</html>