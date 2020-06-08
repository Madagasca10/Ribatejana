<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ribatejana</title>
	<link rel="stylesheet" href="ribatejana.css">

</head>
<body>

	<h1>RIBATEJANA</h1>
	<nav>
		<?php 
			$scriptName = basename($_SERVER['PHP_SELF']);
		 ?>
		<a href="pesquisa.php"
		   <?php echo $scriptName == 'pesquisa.php' ? "class='corrente'" : '' ?>
		>Pesquisa</a>
		<a href="seleccao.php"
		   <?php echo $scriptName == 'seleccao.php' ? "class='corrente'" : '' ?>
	
		>Selecção</a>
		<a href="passageiro.php"
		   <?php echo $scriptName == 'passageiro.php' ? "class='corrente'" : '' ?>
		>Passageiro</a>
		<a href="pagamento.php"
		      <?php echo $scriptName == 'pagamento.php' ? "class='corrente'" : '' ?>
		>Pagamento</a>
	</nav>
