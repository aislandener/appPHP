<?php

	$USERNAME = 'root';
	$PASSWORD = 'Screamo@1994';
	$HOST = '127.0.0.1';
	$PORT = 3306;
	$DATABASE = 'appPHP';
	

	$db = mysqli_connect($HOST." ".$PORT,$USERNAME,$PASSWORD,$DATABASE);
	
	if (!$db){
		die('erro de conexao');
	}
?>