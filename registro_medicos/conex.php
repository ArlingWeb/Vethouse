<?php 
$dbHost ='gator4125.hostgator.com';
$dbName ='arling_prueba';
$dbUser ='arling_prueba';
$dbPass ='Alpina.2017';
try {
	$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
} catch (Exception $e) {
	echo " Falla la conexion"  . $e->getMessage();
	
	
}
