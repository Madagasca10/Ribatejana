<?php

	function getDestinos() 
	{
		$destinos = array ( 
						'Salvaterra de Magos',
						'Vila Franca de Xira',
						'Santarém',
						'Marinhais'
		);

		return $destinos;
	}

	function getViagens()
	{
		$viagens = array ( 
			'X4-26-39' => array ( 
				'origem' => "Salvaterra de Magos",
				'destino' => "Santarém",
				'horaPartida' => "09:00",
				'horaChegada' => "10:00"
				 ),
			'F7-BC-28' => array ( 
				'origem' => "Salvaterra de Magos",
				'destino' => "Santarém",
				'horaPartida' => "14:05",
				'horaChegada' => "15:00"
				 ),
			'GU-63-17' => array ( 
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
			'CV-2S-8B' => array ( 
				'origem' => "Salvaterra de Magos",
				'destino' => "Marinhais",
				'horaPartida' => "14:05",
				'horaChegada' => "14:20"
				 ),
			'AC-O4-02' => array ( 
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
			'LK-8I-W2' => array ( 
				'origem' => "Salvaterra de Magos",
				'destino' => "Vila Franca Xira",
				'horaPartida' => "14:15",
				'horaChegada' => "15:00"
				 ),
			'CL-6T-05' => array ( 
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
		$viagens = getViagens();

		return $viagens[$codigoViagem];
	}	



?>			