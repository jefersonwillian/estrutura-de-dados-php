<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="estilo.css"/>
	<title>Calcular IMC</title>
</head>
<body> 
	<h2>Resultado do Calculo</h2> 
	<div style="width: 200px;">
		<?php 
		$velo = ($_GET["velo"]);
		$via = ($_GET["via"]);

		
		switch ($via) {
			case 1:
			$multa = $velo;
			if ($multa <= 48) { 				
				echo "Via 1 <br>";
				echo $velo . "Km/h <br>";
				echo "Alerta mas não multa<br>";
			}elseif($multa >= 56){ 
				echo "Via 1<br>";
				echo $velo . "Km/h<br>";				
				echo "Multa de R$ 300, 00<br>";
			}elseif(($multa > 49) or ($multa <= 55)){				
				echo "Via 1<br>";
				echo $velo . "Km/h<br>";
				echo "Multa de R$ 120, 00<br>";
			}
			else{
				echo "erro";
			}
			break;
			case 2:
			$multa = $velo;
			if ($multa <= 72) { 				
				echo "Via 1 <br>";
				echo $velo . "Km/h <br>";
				echo "Alerta mas não multa<br>";
			}elseif($multa >= 84){ 
				echo "Via 1<br>";
				echo $velo . "Km/h<br>";				
				echo "Multa de R$ 300, 00<br>";
			}elseif(($multa > 73) or ($multa <= 83)){				
				echo "Via 1<br>";
				echo $velo . "Km/h<br>";
				echo "Multa de R$ 120, 00<br>";
			}
			else{
				echo "erro";
			}
			break;
			case 3:
			$multa = $velo;
			if ($multa <= 108) { 				
				echo "Via 1 <br>";
				echo $velo . "Km/h <br>";
				echo "Alerta mas não multa<br>";
			}elseif($multa >= 126){ 
				echo "Via 1<br>";
				echo $velo . "Km/h<br>";				
				echo "Multa de R$ 300, 00<br>";
			}elseif(($multa > 109) or ($multa <= 125)){				
				echo "Via 1<br>";
				echo $velo . "Km/h<br>";
				echo "Multa de R$ 120, 00<br>";
			}
			else{
				echo "erro";
			}
			break;
			case 4:
			$multa = $velo;
			if ($multa <= 144) { 				
				echo "Via 1 <br>";
				echo $velo . "Km/h <br>";
				echo "Alerta mas não multa<br>";
			}elseif($multa >= 168){ 
				echo "Via 1<br>";
				echo $velo . "Km/h<br>";				
				echo "Multa de R$ 300, 00<br>";
			}elseif(($multa > 145) or ($multa <= 167)){				
				echo "Via 1<br>";
				echo $velo . "Km/h<br>";
				echo "Multa de R$ 120, 00<br>";
			}
			else{
				echo "erro";
			}
			break;
			case 5:
			$multa = $velo;
			if ($multa <= 96) { 				
				echo "Via 1 <br>";
				echo $velo . "Km/h <br>";
				echo "Alerta mas não multa<br>";
			}elseif($multa >= 112){ 
				echo "Via 1<br>";
				echo $velo . "Km/h<br>";				
				echo "Multa de R$ 300, 00<br>";
			}elseif(($multa > 97) or ($multa <= 111)){				
				echo "Via 1<br>";
				echo $velo . "Km/h<br>";
				echo "Multa de R$ 120, 00<br>";
			}
			else{
				echo "erro";
			}
			break;

			
			default:
				# code...
			break;
		}

		?>
	</div>
	<br>
	<a href="velocidade.html">Voltar</a>
</body>
</html>
