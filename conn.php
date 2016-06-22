<?php 
	
	$username = 'diego';
	$password = '17907660*+24D';
	$server = 'diego9309.database.windows.net'; 
	$database = 'basecliente';
	$info = [ 'Database'=>$database, 'UID'=>$username, 'PWD'=>$password, 'CharacterSet' => 'UTF-8' ]; 
	$conexion = sqlsrv_connect($server, $info);  
	if (! $conexion)
		die( print_r(sqlsrv_errors(), true) );
 ?>
