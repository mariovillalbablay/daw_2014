<?php 
include ("class.TemplatePower.inc.php"); 
$t = new TemplatePower('cat_productos.htm'); 
$t->prepare(); 
//Asignamos el valor “Material de cocina a la variable nombrecategoria en //el template
$t->assign(array('nombrecategoria' => 'Material de cocina'));
//Preparamos la parte de productos 
 $t->assign(array('nombreproducto' => 'sarten','sarten','horno'));
 $idproducto=range(0,3);
$t->assign(array('descripcionproducto' => 'sarten 22cm','sarten 29cm','horno pirolitico'));
$t->assign(array('i' , '0'));
	for ('i';'i'<count('nombreproducto');'i++') {
        $t->newBlock('productos');
        $t->assign(array( 
              nombreproducto => $nombreproducto[$i], 
              idproducto => $idproducto[$i], 
              descripcionproducto => $descripcionproducto[$i]
              )); 
	}
$t->printToScreen(); 
?>
