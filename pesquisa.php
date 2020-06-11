<?php
	
	session_start();
	
	include 'acessoDados.php';

	$destinos = getDestinos();


	if( isset($_SESSION['destino']) )
	{
		$destSelect = $_SESSION['destino'];
	} 
	else
	{
		$destSelect = "";
	}

	include 'header.php';
?>

	<main>

		

		<form id="pesquisa" action="seleccao.php">
			<label>De</label>
			<input type="text" value="Salvaterra de Magos" disabled>

			<label>Para</label>
			<select name="destino">
				<?php 
					foreach ($destinos as $destino)
					{
						$selected=($destino==$destSelect) ? 'selected':'';
						
						echo "<option value='$destino' $selected>$destino</option>";
					}

				?>
				
			</select>

			<input type="submit" value="Pesquisar" class="btn">
			
		</form>

	</main>

</body>
</html>