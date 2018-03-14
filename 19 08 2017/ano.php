

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="estilo.css"/>
	<title>Calcular Area de um Retangulo	</title>
</head>
<body> 
	<h2>Calcular Area de um Retangulo</h2>
	<div id="interface">
		<?php 

		$alt = ($_GET["alt"]);
		$lar = ($_GET["lar"]);
		$reslt = $alt * $lar;
		echo "O calculo da área do retangulo é: ". $reslt . " cm²";
		?>
	</div>
	<br>
	<a href="index.html">Voltar</a>
</body>
</html>

