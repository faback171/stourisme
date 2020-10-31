<?php
	require_once 'connexion.php';
	// -------
	// ÉTAPE 1 : on vérifie si l'IP se trouve déjà dans la table.
	// Pour faire ça, on n'a qu'à compter le nombre d'entrées dont le champ "ip" est l'adresse IP du visiteur.
$retour = 'SELECT COUNT(*) AS nbre_entrees FROM Connectes WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'';
		foreach ($bd->query($retour) as $row) {
			# code...
		};
		if ($row['nbre_entrees'] == 0) // L'IP ne se trouve pas dans la table, on va l'ajouter.
		{
			$insert = 'INSERT INTO Connectes VALUES(\'' .$_SERVER['REMOTE_ADDR'] . '\', ' . time() . ')';
			$bd->query($insert);
		}
		else // L'IP se trouve déjà dans la table, on met juste à jour le timestamp.
		{
			$update = 'UPDATE Connectes SET timestamp=' . time() . ' WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'';
			$bd->query($update);
		}
		// -------
	// ÉTAPE 2 : on supprime toutes les entrées dont le timestamp est plus vieux que 5 minutes.
	// On stocke dans une variable le timestamp qu'il était il y a 5 minutes :
	$timestamp_5min = time() - (60 * 5); // 60 * 5 = nombre de secondes écoulées en 5 minutes
	$delete = 'DELETE FROM Connectes WHERE timestamp < ' .$timestamp_5min;
	$bd->query($delete);
	// -------
	// ÉTAPE 3 : on compte le nombre d'IP stockées dans la table. C'est le nombre de visiteurs connectés.
	$retour = 'SELECT COUNT(*) AS nbre_entrees FROM Connectes';
	$bd->query($retour);
	// Ouf ! On n'a plus qu'à afficher le nombre de connectés !
	echo '<marquee>Il y a actuellement ' . $row['nbre_entrees'] . ' visiteurs connectés sur mon site !</marquee>';
  ?>