<?php
	//copy: me permite enviar archivos adjutnos a un servidor
	/**
	 * COPI
	 * 
	 * 2 parametros:
	 * 		- origen
	 * 		- destino
	 * */
	$carpeta="imagen";
	copy($_FILES['file']['tmp_name'], $carpeta."/".$_FILES['file']['name'])
?>