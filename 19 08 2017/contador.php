<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="estilo.css"/>
	<title>Contar</title>
</head>
<body> 
	<h2>Contador</h2> <a href="contador.html">Voltar</a>
	<div id="interface">
		<?php 
			$i = ($_GET["i"]);
			$f = ($_GET["f"]);

			for ($i=0; $i < $f; $i++) { 
				echo $i ."<br>";
			}
		?>
	</div>
	<br>
	
</body>
</html>
