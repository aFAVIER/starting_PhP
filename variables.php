<?php
	//exo1
	$nom='Anthony <br>';

	//exo2
	$prenom='Patate';
	$age= 30;

	//exo3
	$kilometre=1;
	$kilometre2=3;
	$kilometre1=125;
	//exo4
	$string='texte';
	$entier=5;
	$boloean=true;
	$float=10.25;

	//exo5
	
	//exo6
	$nom6='Emilie';
	//exo7
	$nom7='TUC';
	$prenom7='Alain';
	$age7=30;
	//exo8
	$add=3+4;
	$multi=5*20;
	$divi=45/5;
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
			</h5>
			<h5>
			<?php
				//exo4
				echo $kilometre2.' ';
				echo $kilometre1;
			?>
			</h5>
			<h5>
			<?php
				echo $string .'</br>'. $entier .'</br>'. $boloean .'</br>'. $float;
			?>
			</h5>
			<h5>
				<?php
				//exo5
				$int=(int)NULL;
				echo $int.'</br>';
				$int=48;
				echo $int;
				?>
			</h5>
			<h5>
				<?php
					//exo6
					echo 'bonjour '.$nom6.', comment vas-tu?';
				?>
			</h5>
			<h5>
				<?php
				//exo7
				echo 'Bonjour '.$nom7.' '.$prenom7.', tu as '.$age7.' ans.';
				?>
			</h5>
			<h5>
				<?php
				//exo8
				echo 'le résultat de 3+4 est '.$add.', le résultat de 5x20 est '.$multi.', le résultat de 45/5 est '.$divi;
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