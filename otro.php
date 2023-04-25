<?php
	$mensaje=$_POST['mensaje'];
	$mensaje.="<br>";
	$mensaje.="<br>";
	$mensaje.=date("Y-m-d");
	$mensaje.="<br>";
	$fp=fopen('data.html','a'); //append: anexar
	fwrite($fp,$mensaje);
	fclose($fp);
	header("location:data.html");
?>