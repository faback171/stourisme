<!DOCTYPE html>
<html>
<head>
	<title>INFO CONTACT</title>
	<link rel="stylesheet" type="text/css" href="administration.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

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
		 h1,h3,th, td
				{
					text-align:center;
					color: gray;
				}
		table
			{
				border-collapse:collapse;
				border:2px solid black;
				margin:auto;
			}
		th, td
			{
				border:1px solid gray;
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
		<h3>CONTACT</h3>
		<table>
				<tr>
					<th>PRENOM</th>
					<th>NOM</th>
					<th>E-MAIL</th>
					<th>MESSAGE</th>
				</tr>
				<tr>
					<?php 
						require_once 'connexion.php';

						$req = 'SELECT * FROM contact ORDER BY id DESC';
						foreach ($bd->query($req) as $row) {	
					 ?>
					<td><?php echo $row['prenom']; ?></td>
					<td><?php echo $row['nom']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['message']; ?></td>
				<?php } ?>
				</tr>
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