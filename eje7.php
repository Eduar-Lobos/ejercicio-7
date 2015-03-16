<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8"/>
	<title> ejercicio 7</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="problema">
	<h1>Ejercicio #7</h1>
	<p>	
		cree un script en php que calcule el teorema de pitágoras investigue la formula.
	</p>
	</div>
	<div class="solucion">
	<?php
	{
	$a=3;
	$b=4;
	$c=0;
	}
	?>
	<h4>Solucion: formula c^2=a^2+b^2</h4>

	<?php
print("c^2=".$a."^2+".$b."^2 <br>");
print("c^2".(pow($a,2))."+".(pow($b,2)))."<br>";
print("c^2=".($a*$a+$b*$b))." <-- resultado";
?>
	</div>
	<footer class="alumno">
		<p>Nelson Eduardo Rodriguez Lobos SIS 21B </p>
	</footer>
</body>
</html>