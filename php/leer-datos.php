<?php
	
	error_reporting(0);

	header('Content-type: application/json; charset=utf-8');
	
	// require '../config/dbconfig.php';
	$conn = new mysqli('localhost', 'root', '#velMax.MyS84', 'curso_php_ajax');
	
	// var_dump($conn);

	if ($conn->connect_errno) {
		$respuesta = [
			'error' => true
		];
	} else {
		$conn->set_charset("utf8");
		$statement = $conn->prepare("SELECT * FROM usuarios");
		$statement->execute();
		$resultados = $statement->get_result();
			
		$respuesta = [];

		while ($row = $resultados->FETCH_ASSOC()) {
				$usuario = [
					'id_usuario'	=> $row['id_usuario'],
					'nombre'		=> $row['nombre'],
					'edad'			=> $row['edad'],
					'pais'			=> $row['pais'],
					'correo'		=> $row['correo']
				];
				array_push($respuesta, $usuario);
			}
		}


	
	// var_dump($usuario);
	echo json_encode($respuesta);
	
?>