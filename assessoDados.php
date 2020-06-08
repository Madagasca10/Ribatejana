<?php

	function getDestinos() 
	{
		$destinos = array ( 
						'Salvaterra de Magos',
						'Vila Franca de Xira',
						'Santarém'
						'Marinhais'
		);

		return $destinos;
	}

	function getViagem()
	{
		$viagens = array ( 
			'XO-8E-24' => array ( 
				'origem' => "Salvaterra de Magos",
				'destino' => "Santarém",
				'horaPartida' => "09:00",
				'horaChegada' => "10:00"
				 ),
			'XO-8E-24' => array ( 
				'origem' => "Salvaterra de Magos",
				'destino' => "Santarém",
				'horaPartida' => "14:05",
				'horaChegada' => "15:00"
				 ),
			'XO-8E-24' => array ( 
				'origem' => "Salvaterra de Magos",
				'destino' => "Santarém",
				'horaPartida' => "18:55",
				'horaChegada' => "20:00"
				 ),
			'TS-78-BS' => array ( 
				'origem' => "Salvaterra de Magos",
				'destino' => "Marinhais",
				'horaPartida' => "07:45",
				'horaChegada' => "08:20"
				 ),
			'TS-78-BS' => array ( 
				'origem' => "Salvaterra de Magos",
				'destino' => "Marinhais",
				'horaPartida' => "14:05",
				'horaChegada' => "14:20"
				 ),
			'TS-78-BS' => array ( 
				'origem' => "Salvaterra de Magos",
				'destino' => "Marinhais",
				'horaPartida' => "19:40",
				'horaChegada' => "20:00"
				 ),
			'CL-97-VS' => array ( 
				'origem' => "Salvaterra de Magos",
				'destino' => "Vila Franca Xira",
				'horaPartida' => "10:00",
				'horaChegada' => "10:30"
				 ),
			'CL-97-VS' => array ( 
				'origem' => "Salvaterra de Magos",
				'destino' => "Vila Franca Xira",
				'horaPartida' => "14:15",
				'horaChegada' => "15:00"
				 ),
			'CL-97-VS' => array ( 
				'origem' => "Salvaterra de Magos",
				'destino' => "Vila Franca Xira",
				'horaPartida' => "20:35",
				'horaChegada' => "21:00"
				 ),

			);

		return $viagens;

	}


	function getViagensPara( $destino )
	{
		$viagens = getViagens();

		$resultados = array();
		foreach ($viagens as $codigoViagem => $viagem)
		{
			if( $viagem['destino'] == $destino )
			{
				$resultados[$codigoViagem]=$viagem;
			}	
		}
		
		return $resultados;
	}

	function getViagem($codigoViagem)
	{
		$viagens = getViagem();

		return $viagens[$codigoViagem];
	}	



?>			