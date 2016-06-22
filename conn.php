<?php 
	
try {
		$bdd= new PDO("mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net; dbname=basecliente","ba1613dafe1e24", "b44035a6");
		
	} catch (Exception $e) {
		die("ERROR".$e->getMesage());
	}
 ?>
