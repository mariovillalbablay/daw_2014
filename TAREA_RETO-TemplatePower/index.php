<? 
require "TemplatePower.inc.php"; 
$t = new TemplatePower("plantillas/cat_productos.tpl"); 
$t->prepare(); 
//Asignamos el valor “Material de cocina a la variable nombrecategoria en //el template
$t->assign(array(nombrecategoria => 'Material de cocina'));
//Preparamos la parte de productos 
 $nombreproducto=array("sarten","sarten","horno");
 $idproducto=range(0,3);
 $descripcionproducto=array("sarten 22cm","sarten 29cm","horno pirolitico");
	for ($i=0;i<count($nombreproducto);$i++) {
        $t->newBlock("productos");
        $t->assign(array( 
              nombreproducto => $nombreproducto[$i], 
              idproducto => $idproducto[$i], 
              descripcionproducto => $descripcionproducto[$i]
              )); 
	}
$t->printToScreen(); 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align=center>{nombrecategoria}</div> 
<hr align="center"> 
<table width="300" cellpadding="2" cellspacing="2" align=center> 
<!-- START BLOCK : productos--> 
<tr><td> 
<b><a href="ficha_producto.php?id={idproducto}">{nombreproducto}</a></b><br> 
{descripcionproducto} 
</td></tr> 
<!-- END BLOCK : productos --> 
</table>

</body>
</html>