<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="estilo.css"/>
	<title>Calcular IMC</title>
</head>
<body> 
	<h2>Listagem dos produtos</h2> 
	<div style="width: 200px;">
		<?php 
		$prod = ($_GET["prod"]);
		$quat = ($_GET["quat"]);

		$prod1 = ($_GET["prod1"]);
		$quat1 = ($_GET["quat1"]);

		$prod2 = ($_GET["prod2"]);
		$quat2 = ($_GET["quat2"]);

		$prod3 = ($_GET["prod3"]);
		$quat3 = ($_GET["quat3"]);

		$prod4 = ($_GET["prod4"]);
		$quat4 = ($_GET["quat4"]);

		$val = 300 * $quat;
		$val1 = 900 * $quat1;
		$val2 = 700 * $quat2;
		$val3 = 1000 * $quat3;
		$val4 = 450 * $quat4;

		$quanval = $quat + $quat1 + $quat2 + $quat3 + $quat4;

		$varesul = $val + $val1 + $val2 + $val3 + $val4;
		?>
	</div>

	<style type="text/css">
		table{
			border: solid 1px;
		}
		table tr th {
			background-color: blue;
			padding: 10px;
			color: #fff;
			text-align: center;
		}

		table tr td {
			text-align: center;
		}

		.green{
			background-color: green;
			text-align: center;
			font-weight: bold;
			color: #fff;
		}
	</style>
	<table>
  <tr>
    <th>Categorias</th>
    <th>Nome do produto</th> 
    <th>Quantidade</th>
    <th>Valor</th>
  </tr>
  <tr>
  	<td> Celulares </td>
    <td> <?php echo $prod; ?> </td>
   	<td> <?php echo $quat; ?> </td>
   	<td> <?php echo"R$ " .  $val; ?> </td>
  </tr>
  <tr>
  	<td> Carregadores </td>
    <td> <?php echo $prod1; ?> </td>
   	<td> <?php echo $quat1; ?> </td>
   	<td> <?php echo"R$ " .  $val1; ?> </td>
  </tr>
  <tr>
  	<td> Computadores </td>
    <td> <?php echo $prod2; ?> </td>
   	<td> <?php echo $quat2; ?> </td>
   	<td> <?php echo"R$ " .  $val2; ?> </td>
  </tr>
  <tr>
  	<td> Notebooks </td>
    <td> <?php echo $prod3; ?> </td>
   	<td> <?php echo $quat3; ?> </td>
   	<td> <?php echo"R$ " .  $val3; ?> </td>
  </tr>
  <tr>
  	<td> Camisetas </td>
    <td> <?php echo $prod4; ?> </td>
   	<td> <?php echo $quat4; ?> </td>
   	<td> <?php echo"R$ " .  $val4; ?> </td>
  </tr>
  <tr class="green">
  	<td> Total </td>
    <td>  </td>
   	<td> <?php echo $quanval ?> </td>
   	<td> <?php echo"R$ " .  $varesul; ?> </td>
  </tr>
</table>
	<br>
	<a href="produtos.php">Voltar</a>
</body>
</html>