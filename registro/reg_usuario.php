<?php

require_once 'conex.php';

$result = false;

if (!empty($_POST)){

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$tipodocumento = $_POST['tipodocumento'];
	$numerodoc = $_POST['numerodoc'];
	$genero = $_POST['genero'];
	$email = $_POST['email'];
	$celular = $_POST['celular'];
	$password = $_POST['password'];
	$password1 = $_POST['password1'];
	$direccion = $_POST['direccion'];	
	$ciudad = $_POST['ciudad'];
	
	

	$sql= "INSERT INTO registro(nombre, apellido, tipodocumento, numerodoc, genero, email, celular, password, password1, direccion, ciudad) VALUES (:nombre, :apellido, :tipodocumento, :numerodoc, :genero, :email, :celular, :password. :password1, :direccion, :ciudad)";
	$query = $pdo->prepare($sql);

	$result = $query->execute([
		'nombre' => $nombre,
		'apellido' => $apellido,
		'tipodocumento' => $tipodocumento,
		'numerodoc' => $numerodoc,
		'genero' => $genero,
		'email' => $email,
		'celular' => $celular,
		'password' => $password,
		'password1' => $password1,
		'direccion' => $direccion,
		'ciudad' => $ciudad,
		
	]);

	

}




if ($result) {
	header( "Location:  https://www.colombiawebstudio.com/agradecimiento/");
}


?>

