<!DOCTYPE HTML>
<html lang="fr">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rediger news</title>
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

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="administration.css">
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
		form
			{
				text-align:center;
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
		<button type="button" class="btn btn-primary"><a href="listenews.php" style="color: black;">Retour à la liste des news</a></button>
		<?php
			require_once("connexion.php");
			if (isset($_GET['modifier_news'])) // Si on demande de modifier une news.
            {  
				// On protège la variable « modifier_news » pour éviter une faille SQL.
				//$_GET['modifier_news'] = mysql_real_escape_string(htmlspecialchars($_GET['modifier_news']));
				// On récupère les informations de la news correspondante.
				$retour = 'SELECT * FROM news WHERE id=\'' .$_GET['modifier_news'] . '\'';
				foreach ($bd->query($retour) as $row) {
					// On place le titre et le contenu dans des variables simples.
					$titre = stripslashes($row['titre']);
					$contenu = stripslashes($row['contenu']);
					$id = $row['id']; // Cette variable va servir pour se souvenir que c'est une modification.
				}
			}
			else // C'est qu'on rédige une nouvelle news.
			{
				// Les variables $titre et $contenu sont vides, puisque c'est une nouvelle news.
				$titre = '';
				$contenu = '';
				$id_news = 0; // La variable vaut 0, donc on se souviendra que ce n'est pas une modification.
			}
		?>
		<form action="listenews.php" method="post">
			<p>Titre : <input type="text" size="30" name="titre" value="<?php echo $titre; ?>" /></p>
			<p>
				Contenu :<br />
				<textarea name="contenu" cols="50" rows="10">
					<?php echo $contenu; ?>
				</textarea><br />
				<input type="hidden" name="id" value="<?php echo $id;?>" />
				<input type="submit" value="Modifier" class="btn btn-primary" />
			</p>
		</form>
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

