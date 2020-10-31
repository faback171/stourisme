<?php 
	require_once 'connexion.php';

	$req = $bd->prepare('INSERT INTO news VALUES(NULL,:titre,:contenu,:timestamp)');

	$req->bindValue(':titre',$_POST['titre'],PDO::PARAM_STR);
	$req->bindValue(':contenu',$_POST['contenu'],PDO::PARAM_STR);
	$req->bindValue(':timestamp',time(),PDO::PARAM_INT);

	$insert = $req->execute();

	if ($insert) {
		header("location:listenews.php");
	}
	else{
		echo "Echec de l'insertion";
	}
 ?>