<?php
	//exo1
	$nom='Anthony <br>';

	//exo2
	$prenom='Patate';
	$age= 30;

	//exo3
	$kilometre=1;

	//exo4
	$string='texte';
	$entier=5;
	$boloean=true;
	$float=10.25;

	//exo5
	$int;

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
		<header>
			<h4>
			<?php
				//exo1
				echo $nom;	
				//exo2
				$nom='Robert';
				echo $nom.' '.$prenom.' '.$age;
			?>
			</h4>
			<h5>
			<?php
				//exo3
				echo $kilometre;
			?>
			</h5><br>
			<h5>
			<?php
				//exo4
				$kilometre=3;
				echo $kilometre;
				$kilometre=125;
				echo $kilometre;
			?>
			</h5><br>
			<h5>
			<?php
				echo $string .'</br>'. $entier .'</br>'. $boloean .'</br>'. $float;
			?>
			</h5>
			<h5>
				<?php
				//exo5
				echo $int;
				$int=48;
				echo $int;
				?>
			</h5>
			<h5>
				<?php
					//exo6
					$nom='Emilie';
					echo 'bonjour '.$nom.', comment vas-tu?';

				?>
			</h5>
			<h5>
				<?php
				$nom='TUC';
				$prenom='Alain';
				$age=30;
				echo 'Bonjour '.$nom.' '.$prenom.', tu as '.$age.' ans.';
				?>
			</h5>
			<h5>
				<?php
				?>
			</h5>
		</header>
	</main>
	<script type="text/javascript" src='js/jquery-3.1.1.slim.js'></script>
	<script type="text/javascript" src='js/parallax.min.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" src='js/script.js'></script>
</body>
</html>