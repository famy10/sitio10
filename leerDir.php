<?php
	$carpeta=opendir("imagen");

	while ( ($file_name = readdir($carpeta)) !== false)  {
		echo ("nombre del file: " . $file_name);
		echo "<br>";
	}
	closedir()
?>
