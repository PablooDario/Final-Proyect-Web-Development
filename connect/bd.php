<?php
$server = '127.0.0.1';
$user = 'root';
$pass = '';
$database = 'escomwd';

$mysqli = new mysqli($server, $user, $pass, $database);    
if ($mysqli->connect_errno) {
	$Error = "Fallo al conectar con la BD";
}
?>