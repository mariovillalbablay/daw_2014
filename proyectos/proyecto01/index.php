<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Documento sin título</title>
        <style type="text/css"> 
			td, th {
    			border: 2px solid black;
			}
			#lightbox{
			background-color:#eee;
			padding: 10px;
			border-bottom: 2px solid #666;
			border-right: 2px solid #666;
			}
		    #lightboxDetails{
			font-size: 0.8em;
			padding-top: 0.4em;
			}	
			#lightboxCaption{ float: left; }
			#keyboardMsg{ float: right; }

			#lightbox img{ border: none; } 
			#overlay img{ border: none; }
			#overlay{ background-image: url(overlay.png); }

			* html #overlay{
			background-color: #000;
			back\ground-color: transparent;
			background-image: url(blank.gif);
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="overlay.png", sizingMethod="scale");
			}
		</style> 
        <script type="text/javascript" src="lightbox.js"></script>
    </head>

    <body>
         <table align="center">
           <?php
		   		echo "<tr>";
				for($foto=1;$foto<=4;$foto++){
					if($foto<3){
						echo "<td>";
						echo "<img src=\"foto_0".$foto.".jpg\" alt=\"foto_0.$foto.\" width=200 height=200>";
						echo "<br>";
						echo "<a href=\"foto_0".$foto.".jpg\" rel=\"lightbox\">foto_0".$foto."</a>";
						echo "</td>";
					}else{
						if($foto==3){
							echo "</tr>";
							echo "<tr>";
							echo "<td>";
							echo "<img src=\"foto_0".$foto.".jpg\" alt=\"foto_0.$foto.\" width=200 height=200>";
							echo "<br>";
							echo "<a href=\"foto_0".$foto.".jpg\" rel=\"lightbox\">foto_0".$foto."</a>";	
							echo "</td>";		
						}else{
							echo "<td>";
							echo "<img src=\"foto_0".$foto.".jpg\" alt=\"foto_0.$foto.\" width=200 height=200>";
							echo "<br>";
							echo "<a href=\"foto_0".$foto.".jpg\" rel=\"lightbox\">foto_0".$foto."</a>";	
							echo "</td>";
							echo "</tr>";
						}
					}
				}
			?>
         </table>  	
    </body>
</html>