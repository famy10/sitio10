<?php
	$arhivo="algo.txt";
	//fpassthru($gestor) lee y imprime por pantal
	//fopen solo lee, pa imprimir por pantalla uso echo
	$gestor=fopen($arhivo,"r"); //escribe y bora anterior
	$contenido=fread($gestor,100); //leo hasta 100 bytes. tengo un file de 300 bytes, muestra solo los primeros cien bytres
	echo $contenido;
	fclose($gestor);
	
?>