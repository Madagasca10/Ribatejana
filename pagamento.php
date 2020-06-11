<?php
	
	session_start();

	if( !( isset( $_SESSION['primeiroNome'], $_SESSION['ultimoNome'])
	       || isset($_GET['primeiroNome'], $_GET['ultimoNome']) ) )
	{
		// redirect to passageiro.php
    	http_response_code(303);
    	header("Location: passageiro.php");
	}
	else
	{
		if( isset($_GET['primeiroNome'], $_GET['ultimoNome']) )
		{
			$primeiroNome = $_GET['primeiroNome'];
			$ultimoNome = $_GET['ultimoNome'];
			$_SESSION['primeiroNome'] = $primeiroNome;
			$_SESSION['ultimoNome']= $ultimoNome;
		}
		else
		{
			$primeiroNome = $_SESSION['primeiroNome'];
			$ultimoNome = $_SESSION['ultimoNome'];	
		}

		$codigoViagem = $_SESSION['codigoViagem']; 
		
	}

	include 'acessoDados.php';

	$viagem = getViagem($codigoViagem);

	$origem = $viagem['origem'];
	$destino = $viagem['destino'];
	$horaPartida = $viagem['horaPartida'];
	$horaChegada = $viagem['horaChegada'];

	include 'header.php';

?>
	<main>

		<section>
			<h2>Dados do Passageiro Titular da Reserva</h2>

			<form id="passageiro" action="pagar.php">
				
				<label>Primeiro Nome</label>
				<input type="text"  
				       value="<?php echo htmlspecialchars($primeiroNome); ?>"
				       disabled
				>
			
				<label>Último Nome</label>
				<input type="text"  
					   value="<?php echo htmlspecialchars($ultimoNome); ?>"
				       disabled	
				>
				
				<input type="submit" value="Pagar" class="btn">

			</form>	

		</section>

		<aside>
			<h2>A sua reserva</h2>
			<ul>
				<li><?php echo "$origem-$destino"; ?></li>
				<li><?php echo $codigoViagem; ?></li>
				<li><?php echo "$horaPartida - $horaChegada"; ?></li>

			</ul>

		</aside>

	</main>

</body>
</html>