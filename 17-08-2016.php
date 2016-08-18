<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
			$esEstudiante=false;
			$edad=true;
			$valor_pi=3.1416;
			$nombre="Jose Carlos";
			$semestre=null;
			
			echo '<p>El Tipo de $esEstudiante es:'.gettype($esEstudiante).'</p>';
			echo "<p style='color:blue'>El tipo de $esEstudiante es:".gettype($esEstudiante)."</p>";
			echo '<p>El tipo de $edad es:'. gettype($edad).'</p>';
			echo "<p style='color:blue'>El tipo de $edad es: ". gettype($edad).'</p>'; //ojo con las comillas
			echo '<p>El tipo de $valor_pi es: '.gettype($valor_pi).'</p>';
			echo "<p style='color:blue'>El tipo de $valor_pi es: ".gettype($valor_pi)."</p>";
			echo '<p>El tipo de $nombre es: '.gettype($nombre).'</p>';
			echo "<p style='color:blue'> El tipo de $nombre es: ".gettype($nombre)."</p>";
			echo '<p>El tipo de $semestre es: '.gettype($semestre).'</p>';
			echo "<p style='color:blue'> El tipo de dato de $semestre es: ".gettype($semestre)."</p>";
			error_reporting(0);
			unset($edad);
			echo '<p>El tipo de $edad es:'.gettype($edad).'</p>';
			unset($valor_pi);
			echo '<p>El tipo de $valor_pi es: '.gettype($valor_pi).'</p>';
			/*******************OPERADOR TERNARIO*************************/
			echo $esEstudiante ? "Hola Estudiante":"Quien eres"."<br>";
			echo $valor_pi==3.1413 ? "cierto":"no es cierto"."<br>";
			echo 3>4 ? "<p>incorrecto</p>":"<p>correcto</p>";  
			/********************CONSTANTES************************/
			#Una constante en PHP se define usando la funcion define(); y puede ser definido una sola ves, y nunca mas
			define("MI_NUMERO_TELEFONICO","987654321");
			echo "<p> Mi número telefonico es: ",MI_NUMERO_TELEFONICO,"</p>";
			echo "<p> Mi número telefonico es: ".MI_NUMERO_TELEFONICO."</p>";
			define("MI_NUMERO_TELEFONICO","912345678");
			echo "<p> Mi número telefonico es: ".MI_NUMERO_TELEFONICO."</p>";
			error_reporting(-1);
			/********************CONSTANTES PREDEFINIDADAS************************/
			echo __FILE__,"<br>";
			echo __DIR__,"<br>";
		?>	
	</body>
</html>