<!DOCTYPE html>
<html lang="es">
	<head>
		<title>bucles</title>
	</head>
	<body>
		<p>Primer Script</p>
		<?php
			echo "<ul>";
				for ($i=1; $i <= 5 ; $i++) { 
					echo "<li><h3>".$i."</li></h3>";
				}
			echo "</ul>";
		?>
		<p>Segundo Script</p>
		<?php 
			echo "<ul>";
				for ($i=1; $i <= 6 ; $i++) { 
					echo "<li><h".$i.">"."Encabezado ".$i."</li></h".$i.">";
				}
			echo "</ul>";
		?>
	</body>
</html>