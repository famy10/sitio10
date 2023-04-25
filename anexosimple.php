<?php

	$fp=fopen('ddata.txt','a'); //append: anexar
	fwrite($fp,'anexandos');
	fclose($fp);
	header("location:data.html");
?>