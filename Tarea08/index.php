<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	//Definiendo variables
		$color_R=0;
		$color_G=0;
		$color_B=0;
?>

<body>
	<table>
		<?php
            for ($color_R;$color_R<=255;$color_R=$color_R+5){ ?>
                <tr>
                		<td bgcolor="# <?php echo dechex($color_R)?>0000"># <?php echo dechex($color_R)?>0000</td>
                </tr>
         <?php       }
        ?>
    </table>
    
</body>
</html>