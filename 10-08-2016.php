<!DOCTYPE html>
	<html lang="es">
	<head>
		<title>10-08-2016</title>
	</head>
	<body>
		<?php 
			//date_default_timezone_set('America/Los_Angeles');
			date_default_timezone_set('America/Los_Angeles');
			echo date("H_i_S");	
		?>
		<?php 
			echo "Hola";
		?>
		<?php 
			date_default_timezone_set('America/Lima');
			$hora_lima=date("H:i:S");
			date_default_timezone_set('Europe/Paris');
			$hora_paris=date("H:i:S");
			echo "<p> La hora en Lima es: ".$hora_lima."</p>";
			echo "<p> La hora en Paris es: ".$hora_paris."</p>";
		?>
	</body>
</html>