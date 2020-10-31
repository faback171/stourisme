<?php
		require_once("connexion.php");
		//Pour les tournées
		$reponse1 = 'SELECT * FROM Region where idRegion=1';
		$reponse2 = 'SELECT * FROM Region where idRegion=2';
		$reponse3 = 'SELECT * FROM Region where idRegion=3';
		$reponse4 = 'SELECT * FROM Region where idRegion=4';
		$reponse5 = 'SELECT * FROM Region where idRegion=5';
		$reponse6 = 'SELECT * FROM Region where idRegion=6';
		$reponse7 = 'SELECT * FROM Region where idRegion=7';
		$reponse8 = 'SELECT * FROM Region where idRegion=8';
		$reponse9 = 'SELECT * FROM Region where idRegion=9';
		$reponse10 = 'SELECT * FROM Region where idRegion=10';
		$reponse11 = 'SELECT * FROM Region where idRegion=11';
		$reponse12 = 'SELECT * FROM Region where idRegion=12';
		$reponse13 = 'SELECT * FROM Region where idRegion=13';
		$reponse14 = 'SELECT * FROM Region where idRegion=14';


?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>empreinte du sénégal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="site touristique sénégalais" />
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="empreinte du senegal,site touristique au sénégal,tourisme au sénégal" />
	<meta name="author" content="faback dieng" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content="www.empreintedusenegal.com"/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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

	</head>
	<body>
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation" style="position: fixed;">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">ES</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Accueil</a></li>
								<li class="has-dropdown">
									<a href="tours.html">Tournées</a>
									<ul class="dropdown">
										<?php foreach($bd->query($reponse1) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Dakar</a><?php } ?></li>
										<?php foreach($bd->query($reponse2) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Ziguinchor</a><?php } ?></li>
										<?php foreach($bd->query($reponse3) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Diourbel</a><?php } ?></li>
										<?php foreach($bd->query($reponse4) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Saint-Louis</a><?php } ?></li>
										<?php foreach($bd->query($reponse5) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Tambacounda</a><?php } ?></li>
										<?php foreach($bd->query($reponse6) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Kaolack</a><?php } ?></li>
										<?php foreach($bd->query($reponse7) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Thiès</a><?php } ?></li>
										<?php foreach($bd->query($reponse8) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Louga</a><?php } ?></li>
										<?php foreach($bd->query($reponse9) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Fatick</a><?php } ?></li>
										<?php foreach($bd->query($reponse10) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Kolda</a><?php } ?></li>
										<?php foreach($bd->query($reponse11) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Matam</a><?php } ?></li>
										<?php foreach($bd->query($reponse12) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Kaffrine</a><?php } ?></li>
										<?php foreach($bd->query($reponse13) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Kédougou</a><?php } ?></li>
										<?php foreach($bd->query($reponse14) as $row){?>
										<li><a href="region.php?idRegion= <?php echo($row['idRegion']);?>">Sédhiou</a><?php } ?></li>
									</ul>
								</li>
								<li class="has-dropdown"><a href="#">Locations et Immobilier</a>
									<ul class="dropdown">
										<li><a href="location.php">Locations de voitures</a></li>
										<li><a href="immobilier.php">Immobilier</a></li>
									</ul>
								</li>
								<li class="has-dropdown"><a href="#">Transport Maritimes et Croisières</a>
									<ul class="dropdown">
										<li><a href="maritime.php">Transport Maritimes</a></li>
										<li><a href="croisiere.php">Croisières</a></li>
									</ul>
								</li>
								<li><a href="voyages.php">Agences de voyages</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<?php include 'connectes.php'; ?>
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/dionewar1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>L’île de dionewar</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/goree.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>L’île de gorée</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/salouuum.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Le Sine-Saloum</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/lacrose.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Lac rose</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/saintlouis.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Saint-Louis</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/monument.jpeg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Monument de la renaissance</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hôtels</a></li>
								<li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Location de voitures</a></li>
								<li><a data-toggle="tab" href="#cruises"><i class="flaticon-boat"></i> Croisières</a></li>
							</ul>
						</div>
						<div class="tab-content">
				         <div id="hotel" class="tab-pane fade in active">
						      <form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-2">
				              	 	<div class="booknow">
				              	 		<h2>Réserve maintenant</h2>
					              	 	<span>Meilleur prix en ligne</span>
				              	 	</div>
				              	 </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Arrivé:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Départ:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="guests">Client</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5+</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Trouver un Hotel" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
						   </div>
						   <div id="car" class="tab-pane fade">
						   	<form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-4">
				              	 	<div class="form-group">
				                    <label for="date">ou:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Date de Début:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Date de Retour:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Trouver une voiture" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
						   </div>
						   <div id="cruises" class="tab-pane fade">
						      <form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-4">
				              	 	<div class="form-group">
				                    <label for="date">ou:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Date de Début:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="guests">Catégories</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="category" id="category" class="form-control">
				                        <option value="#">Suite</option>
				                        <option value="#">Super Deluxe</option>
				                        <option value="#">Balcon</option>
				                        <option value="#">Economie</option>
				                        <option value="#">Luxe</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Trouver un bateau" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
						   </div>
			         </div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-services">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-3 animate-box text-center aside-stretch">
						<div class="services">
							<span class="icon">
								<i class="flaticon-around"></i>
							</span>
							<h3>Destination Sénégal,pays de l’hospitalité</h3>
							<p>Bienvenue au Sénégal, terre d’Afrique où l’hospitalité se vit au quotidien. L’accueil des habitants, notre « teranga », est un atout majeur. Nos richesses artistiques et culturelles, la diversité de nos écosystèmes, notre stabilité politique et socio-économique font aussi le charme et l’intérêt de notre pays.</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<h4>Un peuple accueillant et tolérant</h4>
							<p>La célèbre « teranga » sénégalaise, l’hospitalité, n’est pas un vain mot. Ici on vous accueille avec le sourire, on aime parler même à ceux que l’on ne connaît pas,on dit bonjour, on vous invite à boire le thé. Toutes les religions et les croyances se côtoient en bonne intelligence, les musulmans, les chrétiens et ceux qui croient à des choses un peu mystiques font souvent partie de la même famille. S’il ne vous reste qu’un souvenir du Sénégal, c’est sans doute la qualité des relations humaines.</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<h4>Tourisme pour tous</h4>
							<p>Le Sénégal en vacances, ce n’est pas seulement le farniente sur une plage sous les cocotiers : vous promener en pirogue dans la labyrinthe des bolongs du Saloum, pêcher au gros ou à la palangrotte, faire du vélo dans les rizières de Casamance, circuler en calèche dans la vieille ville de Saint-Louis, remonter le fleuve Sénégal jusqu’à Podor sur un bateau, faire du quad sur la plage du Lac rose, une balade en dromadaire dans le désert de Loumpoul, de l’accrobranche dans les baobabs à Sindia, observer les hyènes à Palmarin, les hippopotames sur le fleuve Gambie, des milliers d’oiseaux au Djoudj ou découvrir des villages perdus au pays Bassari. Dépaysement garanti.</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<h4>Nature et écotourisme</h4>
							<p>Du Nord au Sud du pays, les parcs et réserves du Sénégal, qui s’étendent sur environ 8 % du territoire,offrent des paysages et des animaux encore sauvages qui forment aujourd’hui un réseau complet représentatif des différents écosystèmes naturels de l’Afrique de l’Ouest : des milliers d’oiseaux dans le parc national du Djoudj au Nord du pays, de grands mammifères au Niokolo Koba, des promenades ornithologiques extraordinaires dans le Sine Saloum. De nombreux campements vous permettront d’être au plus près des populations et de faire des rencontres que vous n’oublierez pas.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Sites touristiques</h2>
						<p>Sénégal découverte.</p>
					</div>
				</div>
			</div>
			<div class="tour-wrap">
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/dionewar.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Ile de dionewar</h2>
						<span class="city">Fatick, Sénégal</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/monument.jpeg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Monument de la Renaissance</h2>
						<span class="city">Dakar, Sénégal</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/goree.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Ile de Gorée</h2>
						<span class="city">Dakar, Sénégal</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/djoudj.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Parc National de Djoudj</h2>
						<span class="city">Saint-Louis, Sénégal</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/esclave.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Maison des esclaves</h2>
						<span class="city">Dakar, Sénégal</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/parchann.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-7.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-8.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
				</a>
			</div>
		</div>

		<div id="colorlib-hotel">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Hôtels recommandés</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel">
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-1.jpg);">
										<p class="price"><span>$120</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3><a href="#">Hotel Edison</a></h3>
										<span class="place">New York, USA</span>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-2.jpg);">
										<p class="price"><span>$120</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3><a href="#">Hotel Edison</a></h3>
										<span class="place">New York, USA</span>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-3.jpg);">
										<p class="price"><span>$120</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3><a href="#">Hotel Edison</a></h3>
										<span class="place">New York, USA</span>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(images/hotel-4.jpg);">
										<p class="price"><span>$120</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3><a href="#">Hotel Edison</a></h3>
										<span class="place">New York, USA</span>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="slider-text-inner text-center">
				<h1>Derniers infos</h1>
		</div>
		<?php  
			// On récupère les cinq dernières news.
			$retour = 'SELECT * FROM news ORDER BY id DESC LIMIT 0,6';
			foreach ($bd->query($retour) as $row) {
			?>
			<div class="col-md-4 col-sm-6 animate-box">
				<h3>
					<?php echo $row['titre']; ?>
				</h3>
				<p>
					<?php
						// On enlève les éventuels antislashs, PUIS on crée les entrées en HTML (<br />).
						$contenu = nl2br(stripslashes($row['contenu']));
						echo $contenu;
					?>
				</p>
				<h3><em>le <?php echo date('d/m/Y à H\hi',$row['timestamp']); ?></em></h3>
			</div>
		<?php
		} // Fin de la boucle des <italique>news</italique>.
		?>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Empreinte du sénégal</h4>
						<p>Destination sénégal, un autre regard.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Book Now</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Flight</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Tour</a></li>
								<li><a href="#">Car Rent</a></li>
								<li><a href="#">Beach &amp; Resorts</a></li>
								<li><a href="#">Cruises</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Hotels partenaires</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Edina Hotel</a></li>
								<li><a href="#">Quality Suites</a></li>
								<li><a href="#">The Hotel Zephyr</a></li>
								<li><a href="#">Da Vinci Villa</a></li>
								<li><a href="#">Hotel Epikk</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>Villa 365 unité 24 Parcelles assainies, <br>Dakar,Sénégal</li>
							<li><a href="tel://+221783031652">+221 783031652</a></li>
							<li><a href="mailto:fabacklevrai16@gmail.com">fabacklevrai16@gmail.com</a></li>
							<li><a href="https://empreintedusenegal.com/">empreinte du senegal</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://lifescode.000webhostapp.com/" target="_blank">Life's Code</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
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

