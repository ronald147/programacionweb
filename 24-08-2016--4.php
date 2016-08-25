<!DOCTYPE html>
<html lang="es">
	<head>
		<title></title>
	</head>
	<body>
		<?php
			echo $_POST['textNombre'];
			echo "<br>";
			echo $_POST['submitHola'];
			var_dump($_POST);
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
		?>
	</body>
</html>