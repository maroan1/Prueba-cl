<!DOCTYPE html>
<html>
<head>
	<title>
		prueba 2
	</title>
</head>
<body>
	<?php 
		function factorial($numero) {
			$fac=1;
			for ($i=2; $i < $numero ; $i++) { 
				$fac=$fac*$numero;
			}
			return $fac;
		}

		$num1 = 5;
		$num2 = 7;
		$num3 = 3;
		$max=$num1;
		$min=$num1;
		if ($num2>$max) {
			$max=$num2;
		}
		if ($num3>$max) {
			$max=$num3;
		}

		if ($num2>$min) {
			$min=$num2;
		}
		if ($num3>$min) {
			$min=$num3;
		}
		echo "El máximo es: $max"."<br>";
		echo "El mínimo es: $min"."<br>";
		echo "El factorial de $num1 es: ".factorial($num1)."<br>";
		echo "El factorial de $num2 es: ".factorial($num2)."<br>";
		echo "El factorial de $num3 es: ".factorial($num3)."<br>";
	 ?>

</body>
</html>