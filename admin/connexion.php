<?php
	$source = "mysql:host=localhost;dbname=tourisme";
	$login = "root";
	$mdp = "";
	try{
		$bd = new PDO($source,$login,$mdp);
	}
	catch(PDOException $e){
		$error_message = $e->getMessage();
		echo $error_message;
		exit();
	}
	
?>
