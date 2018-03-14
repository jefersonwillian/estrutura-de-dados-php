<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="estilo.css"/>
	<title>Prova Estruturas de Dados</title>
</head>
<body> 
	<h2>Resultado: </h2> 

	<div style="width: 1000px;">
		<?php 
		$hora = ($_GET["hora"]);
		$minuto = ($_GET["minuto"]);
		$inter = ($_GET["inter"]);

		$result1 = $minuto + $inter;

		if (($hora == 23) and ($inter <= 60)) {
			$hora = 23;
			$resultHora = $hora;
			$result2 = $result1 - 60;

			echo "O retorno do intervalo é as " . $resultHora . "h " . $result2;
		}elseif(($hora == 23) and ($inter > 60)){
			$hora = 00;
			$resultHora = $hora;
			$result2 = $result1 - 60;

			echo "O retorno do intervalo é as " . $resultHora . "h " . $result2;
		}

		elseif ($result1 < 59) {
			echo "O retorno do intervalo é as " . $hora . "h " . $result1;
		}elseif(($result1 >= 60) and ($result1 < 119)){
			$result2 = $result1 - 60;
			$result3  = $hora + 1;

			echo "O retorno do intervalo é as " . $result3 . "h " . $result2;
		}elseif(($result1 >= 120) and ($result1 < 179)){
			$result2 = $result1 - 120;
			$result3  = $hora + 2;

			echo "O retorno do intervalo é as " . $result3 . "h " . $result2;
		}elseif(($result1 >= 180) and ($result1 < 239)){
			$result2 = $result1 - 180;
			$result3  = $hora + 3;

			echo "O retorno do intervalo é as " . $result3 . "h " . $result2;
		}elseif(($result1 >= 240) and ($result1 < 299)){
			$result2 = $result1 - 240;
			$result3  = $hora + 4;

			echo "O retorno do intervalo é as " . $result3 . "h " . $result2;
		}elseif(($result1 >= 300) and ($result1 < 359)){
			$result2 = $result1 - 300;
			$result3  = $hora + 5;

			echo "O retorno do intervalo é as " . $result3 . "h " . $result2;
		}elseif(($result1 >= 360) and ($result1 < 419)){
			$result2 = $result1 - 360;
			$result3  = $hora + 6;

			echo "O retorno do intervalo é as " . $result3 . "h " . $result2;
		}elseif($result1 >= 420){
			echo "Tudo tem limite nessa vida, você acabou de atingir o seu, forte abraço!!";
		}

		?>
	</div>
	<br>
	<a href="1.php">Voltar</a>
</body>
</html>
