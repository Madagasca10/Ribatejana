<?php
	session_start();
	
	if( ! ( isset( $_SESSION['destino']) || isset( $_GET['destino']) ))
	{
		// redirect to pesquisa.php
    	http_response_code(303);
    	header("Location: pesquisa.php");
	}
	else
	{
		if( isset($_GET['destino']))
		{
			$destino = $_GET['destino'];
			$_SESSION['destino'] = $destino;
		}
		else
		{
			$destino = $_SESSION['destino']; 
		}	
			

		if( isset($_SESSION['codigoViagem']))
		{
			$viagemSeleccionado = $_SESSION['codigoViagem'];
		}
		else
		{
			$viagemSeleccionado = "";
		}
	}

	include 'acessoDados.php';
	$viagens = getViagensPara($destino);

	include 'header.php';

?>
	<main>

	
		<h2>Lista de viagens de Salvaterra de Magos para 
		    <?php echo $destino; ?>
		</h2>

		<form action="passageiro.php">
			<dl>
			<?php 

				foreach ($viagens as $codigoViagem => $viagem)
				{

					$destinoViagem = $viagem['destino'];	
					$partida = $viagem['horaPartida'];
					$chegada = $viagem['horaChegada'];
		
					if( $codigoViagem == $viagemSeleccionado )
					 	$checked = 'checked';
					else
					 	$checked = '';
					  		
					$htmlViagem = <<<VIAGEM
						<dt>$codigoViagem</dt>
						<dd>
						<label>$partida - $chegada</label>
						<input type="radio" name="codigoViagem" value="$codigoViagem" $checked>
						</dd>
VIAGEM;
					echo $htmlViagem;
				}
					

			?>

			</dl>
			
			<input type="submit" value="Seleccionar" class="btn">
			
		</form>

	</main>

</body>
</html>