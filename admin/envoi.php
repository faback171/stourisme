<?php 
	require_once 'connexion.php';

	$req = $bd->prepare('INSERT INTO contact VALUES(NULL,:prenom,:nom,:email,:message)');

	$req->bindValue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
	$req->bindValue(':nom',$_POST['nom'],PDO::PARAM_STR);
	$req->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
	$req->bindValue(':message',$_POST['message'],PDO::PARAM_STR);

	$insert = $req->execute();

	if ($insert) {
		echo "Méssage envoyé avec succés";
		header("location:contact.php");
	}
	else{
		echo "Echec de l'envoi du Méssage";
	}
 ?>