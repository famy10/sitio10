<?php

	$fp=fopen('ddata.txt','w'); //escribe y bora anterior
	fwrite($fp,'grabando');
	fclose($fp);
	header("location:data.html")
?>