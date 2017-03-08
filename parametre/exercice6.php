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
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
				<!--Mon fichier css pour quelques modif-->
	<link rel="stylesheet" type="text/css" href="../style/css/style.css">
</head>
<body>
	<header></header>
	<main class="container">
		<h5>
		<?php
		if (ISSET($_GET['batiment']) && ISSET($_GET['salle'])) {
		
			echo 'num. du batiment : '.htmlspecialChars($_GET['batiment']).'</br>';
			echo 'num. de la salle : '.htmlspecialChars($_GET['salle']);
		}
			else{
				echo 'l\un des parametres n\'existe pas!!!!';
			}
		
		?>
		</h5>	
	<button class="btn btn-success"><strong><a href="../parametres.php">retour</a></strong></button>
	<button class="btn btn-success"><strong><a href="../index.php">Menu</a></strong></button>
	</main>
	<script type="text/javascript" src='js/jquery-3.1.1.slim.js'></script>
	<script type="text/javascript" src='js/parallax.min.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" src='js/script.js'></script>
</body>
</html>