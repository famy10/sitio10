<?php
	$carpeta=opendir("imagen");

	while ( ($file_name = readdir($carpeta)) !== false)  { //distinto estricto (tmn llamado  'distinto de': distinto con doble igual: comparo 1 con "1", o sea comapra sin importar q sea disnto tipos de datos
		if ($file_name != '.' && $file_name != '..' ) {
			// code...
		
		echo( "<img src=imagen/" . $file_name. " width='24px' height='24px'" . ">");
		echo "<br>";
	  }	
	}
	closedir()
?>
