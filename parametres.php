<?php


?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title></title>
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
				<!--Mon fichier css pour quelques modif-->
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
</head>
<body>
	<header></header>
	<main class="container">
 		<h5>
 		<a href="parametre/exercice1.php?nom=Nemare&prenom=Jean">lien exercice 1</a>
 		<?php
			

			
 		?>
 		</h5>
 		<h5>
 		<a href="parametre/exercice2.php?nom=Nemare&prenom=Jean">lien exercice 2</a>
 		<?php
			//exo2


 		?>
 		</h5>
 		<h5>
 		<a href="parametre/exercice3.php?dateDebut=2/05/2016&dateFin=27/11/2016">lien exercice 3</a>
 		<?php
			//exo3

 		?>
 		</h5>
 		<h5>
 		<a href="parametre/exercice4.php?langage=PHP&serveur=LAMP">lien exercice 4</a>
 		<?php
			//exo4

 		?>
 		</h5>
 		<h5>
			<!--exo5-->
			<a href="parametre/exercice5.php?semaine=12">lien exercice 5</a>
			<?php

				
 		?>
 		</h5>
 		<h5>
 		<a href="parametre/exercice6.php?batiment=<script>alert(‘lol’)</script>&salle=101">lien exercice 6</a>
 		<?php
			//exo6

 		?>
 		</h5>
 		<h5>
 		<?php
			//exo7

 		?>
 		</h5>
 		<h5>
 		<?php
			//exo8

 		?>
 		</h5>
 		<h5>
		<?php
			//exo9

 		?>
 		</h5>
 		<h5>
 		<?php
			//exo10
 
 		?>
 		</h5>
	<button class="btn btn-success"><strong><a href="index.php">Menu</a></strong></button>

	</main>
	<script type="text/javascript" src='js/jquery-3.1.1.slim.js'></script>
	<script type="text/javascript" src='js/parallax.min.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" src='js/script.js'></script>
</body>
</html>