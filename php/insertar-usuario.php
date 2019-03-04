<?php

	error_reporting(0);
	header('Content-type: application/json; charset=utf-8');

	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$pais = $_POST['pais'];
	$correo = $_POST['correo'];

	function validarDatos($nombre, $edad, $pais, $correo){
		if ($nombre == '') {
			return false;
		} elseif ($edad == '' || is_int($edad)) {
			return false;
		} elseif ($pais == '') {
			return false;
		} elseif ($correo == '') {
			return false;
		}
		return true;
	}

	if (validarDatos($nombre, $edad, $pais, $correo)) {
		$conn = new mysqli( 'localhost', 'root', '#velMax.MyS84', 'curso_php_ajax' );
		$conn->set_charset('utf8');

		if ($conn->connect_errno) {
			$respuesta = ['error' => true];
		} else {
			$statement = $conn->prepare("INSERT INTO usuarios(nombre, edad, pais, correo) VALUES(?,?,?,?)");
			$statement->bind_param("siss", $nombre, $edad, $pais, $correo);
			$statement->execute();

			if ($conn->affected_rows <= 0) {
				$respuesta = ['error' => true];
			}

			// $respuesta = [];
		}
	} else {
		$respuesta = ['error' => true];
	}
	$respuesta = [];
	echo json_encode($respuesta);

?>