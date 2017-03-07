<?php
	//exo1
	$age=30;
	//exo2
	$is_easy=true;
	//exo3
	$age=15;	
 	$genre='femme';
 	//exo4
 	$magnetude=10;
 	//exo5
 	$maVariable='Homme';
 	//exo6
 	$maVariable1=true;
 	//exo7
 	$monAge =15;
 	//exo8
 	$maVariable2=true;


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
 		<?php
			//exo1
			if ($age>=18)
				echo 'vous êtes majeur';
			else
				echo 'vous êtes mineur';
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo2
			if($is_easy=true)
				echo 'c\'est facile';
			else 
				echo 'c\'est difficile';
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo3
 			
	 			if($genre=='homme')
	 				if ($age>=18) echo 'vous êtes un homme majeur';
	 				else echo 'vous êtes un homme mineur';
	 			else if($genre=='femme')
	 				if($age>=18) echo 'vous êtes une femme majeure';
	 				else echo 'vous êtes une femme mineure';
	 			else echo 'renseignez par homme ou femme';
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo4

 			switch ($magnetude){

 				case 1 :
 					echo "Micro-séisme impossible à ressentir.";
 					break;
 				case 2:
 					echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
 					break;
 				case 3:
 					echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
 					break;
 				case 4:
 					echo " Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
 					break;
 				case 5:
 					echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
 					break;
 				case 6:
 					echo " Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
 					break;
 				case 7:
 					echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
 					break;
 				case 8:
 					echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
 					break;
 				case 9:
 					echo "Séisme capable de tout détruire sur une très vaste zone.";
 					break;
 				default: echo "rentrer une valeur entre 1 et 9.";
 			}
 		?>
 		</h5>
 		<h5>
			<!--exo5-->
				<p> 		Traduire ce code avec des if et des else :
					‘‘‘
						<?php
						 echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
						?>‘‘‘</p>
			<?php
				if ($maVariable!='Homme') 
					echo 'C\'est une développeuse !!!';
				else echo  'C\'est un développeur !!!';
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo6
 			if($maVariable1==false) echo 'c\'est pas bon !!!';
 			else echo 'c\'est ok !!';

 		?>
 		</h5>
 		<h5>
 		<?php
			//exo7
 			if ($monAge>=18) echo "tu es majeur";
 			else echo "Tu n'es pas majeur";
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo8
 			if($maVariable2==true) echo  'c\'est ok !!';
 			else echo  'c\'est pas bon !!!';
 		?>
 		</h5>
	


	</main>
	<script type="text/javascript" src='js/jquery-3.1.1.slim.js'></script>
	<script type="text/javascript" src='js/parallax.min.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" src='js/script.js'></script>
</body>
</html>