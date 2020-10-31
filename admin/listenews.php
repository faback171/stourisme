<!DOCTYPE HTML>
<html lang="fr">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Liste news</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<meta name="robots" content="noindex,nofollow" />

	<link rel="stylesheet" type="text/css" href="administration.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		h1, th, td
				{
					text-align:center;
				}
		table
			{
				border-collapse:collapse;
				border:2px solid black;
				margin:auto;
			}
		th, td
			{
				border:1px solid black;
			}
	</style>

	</head>
	<body>
		<h1>PAGE d'ADMINISTRATION</h1>
		<div class="gauche">
			<ul>
				<li><a href="info.php">CONTACT</a></li>
				<li><a href="listenews.php">NEWS</a></li>
			</ul>
		</div>
	<div class="contenu">
		<button type="button" class="btn btn-primary"><a href="rediger.php" style="color: black;">Ajouter une news</a></button>
		<?php
			require_once("connexion.php");
			//-----------------------------------------------------
			// Vérification 1 : est-ce qu'on veut poster une news ?
			//-----------------------------------------------------
			if (isset($_POST['titre']) AND isset($_POST['contenu']))
			{
				$titre = addslashes($_POST['titre']);
				$contenu = addslashes($_POST['contenu']);
				// On vérifie si c'est une modification de news ou non.
				if ($_POST['id'] != 0)
				{
					// On protège la variable "id_news" pour éviter une faille SQL.
					$_POST['id'] = addslashes($_POST['id']);
					// C'est une modification, on met juste à jour le titre et le contenu.
					$update = "UPDATE news SET titre='" . $titre . "',contenu='" . $contenu . "' WHERE id='" . $_POST['id'] . "'";
					$bd->query($update);
				}
			}
			//--------------------------------------------------------
			// Vérification 2 : est-ce qu'on veut supprimer une news ?
			//--------------------------------------------------------
			if (isset($_GET['supprimer_news'])) // Si l'on demande de supprimer une news.
			{
				// Alors on supprime la news correspondante.
				// On protège la variable « id_news » pour éviter une faille SQL.
				$_GET['supprimer_news'] = addslashes($_GET['supprimer_news']);
				$delete = 'DELETE FROM news WHERE id=\'' .$_GET['supprimer_news'] . '\'';
				$bd->query($delete);
			}
		?>

		<table>
			<tr>
				<th>Modifier</th>
				<th>Supprimer</th>
				<th>Contenu</th>
				<th>Titre</th>
				<th>Date</th>
			</tr>
			<?php
			$retour = 'SELECT * FROM news ORDER BY id DESC';
			foreach ($bd->query($retour) as $row) {
			  // On fait une boucle pour lister les news.
			?>
			<tr>
				<td><?php echo '<a href="redigernews.php?modifier_news=' .$row['id'] . '">'; ?>Modifier</a></td>
				<td><?php echo '<a href="listenews.php?supprimer_news=' .$row['id'] . '">'; ?>Supprimer</a></td>
				<td><?php echo stripslashes($row['titre']); ?></td>
				<td><?php echo stripslashes($row['contenu']); ?></td>
				<td><?php echo date('d/m/Y', $row['timestamp']); ?></td>
			</tr>
			<?php
			} // Fin de la boucle qui liste les news.
			?>
		</table>
	</div>

		<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	</body>
</html>

