<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
			/**********************************************
			VARIABLES
			***********************************************/
			//Asignar valor a variables
			$nombre="Juan";
			//Las Variables en PHP inician con el simbolo $
			echo "<p>Hola ".$nombre."</p>";
			echo "<p> Hola $nombre </p>"; //el contenido entre comillas dobles se interpreta
			echo '<p> Hola $nombre </p>'; //el contenido entre comillas simplre solo se muestra
			/*
			unset($nombre); //eliminar variables
			echo "<p>Hola ".$nombre."</p>";
			echo "<p> Hola $nombre </p>"; //el contenido entre comillas dobles se interpreta
			echo '<p> Hola $nombre </p>'; //el contenido entre comillas simplre solo se muestra*/
			$nombre="Brayhan";
			echo "<p> Hola $nombre </p>";
			$nombre=NULL;
			echo "<p> Hola $nombre </p>";
			$nombre="Juan";
			var_dump($nombre);
			$edad=18;
			var_dump($edad);
			$edad="18";
			var_dump($edad);
			var_dump(NULL);

			/*********************************************
			TIPOS DE VARIABLES
			**********************************************/
			//BOLEANO
			$esEstudiante=TRUE;
			$esVaron=FALSE;
			var_dump($esVaron);
			//ENTERO
			$edad=20;
			//PUNTO FLOTANTE
			$valor_PI=3.1416;
			//CADENA DE TEXTO
			$nombre="Jose Carlos";
			//NULO
			$semestre=null;
		?>	
	</body>
</html>