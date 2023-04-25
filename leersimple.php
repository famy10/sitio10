<?php
	$fp="archivo.txt";
	/*
	$gestor=fopen($fp,"r"); //leo: r
	fpassthru($gestor); ///LEE hasta final de archivo
	fclose($gestor);
	*/
	$fp=fopen("ddata.txt","w"); //leo: r
	fwwrite($fp,"grabando");
	fclose($fp);
?>