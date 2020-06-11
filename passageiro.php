<?php
	session_start();
    
	if( !(isset( $_SESSION['codigoViagem']) || isset($_GET['codigoViagem']) ))
	{
		// redirect to seleccao.php
    	http_response_code(303);
    	header("Location: seleccao.php");
	}
	else
	{
		if( isset($_GET['codigoViagem']))
		{
			$codigoViagem = $_GET['codigoViagem'];
            $_SESSION['codigoViagem'] = $codigoViagem;
		}
		else
			$codigoViagem = $_SESSION['codigoViagem']; 
	

		if( isset($_SESSION['primeiroNome'] , $_SESSION['ultimoNome'] ))
		{ 
			$primeiroNome = $_SESSION['primeiroNome'];
			$ultimoNome = $_SESSION['ultimoNome'];
		} 
		else
		{
			$primeiroNome = '';
			$ultimoNome = '';
		}
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

		<!-- 
			O conteúdo deste elemento varia 
			consoante a View em que estamos  
		-->

		<section>
			<h2>Dados do Passageiro Titular da Reserva</h2>

			<form id="passageiro" action="pagamento.php">
				
				<label>Primeiro Nome</label>
				<input type="text" name="primeiroNome" 
					   value="<?php echo htmlspecialchars($primeiroNome); ?>"	
				>
			
				<label>Último Nome</label>
				<input type="text" name="ultimoNome"
					   value="<?php echo htmlspecialchars($ultimoNome); ?>"	
				>
				
				<input type="submit" value="Continuar" class="btn">

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