<?php
	//exo1
	$exo1=0;
	//exo2
	$exo2=0;
	$exo2_1=12;
	$resultat2=0;
	//exo3
	$exo3=100;
	$exo3_1=5;

 	//exo4
 	
 	//exo5
 	
 	//exo6
 	
 	//exo7
 	
 	//exo8
 
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
			while($exo1<=10)
			echo $exo1++.'</br>';
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo2
 				while ($exo2<=20){
 					echo $resultat2=$exo2*$exo2_1.'</br>';
 					$exo2++;
 				}

 		?>
 		</h5>
 		<h5>
 		<?php
			//exo3
 		while ($exo3 >= 10) {
 			echo $exo3--*$exo3_1.'</br>';
 		}
 		
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo4

 			echo "";
 			
 		?>
 		</h5>
 		<h5>
			<!--exo5-->
				
			<?php

			echo "";	
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo6

 			echo "";
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo7

 			echo "";
 			
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo8

 			echo "";
 		?>
 		</h5>
	</main>
	<script type="text/javascript" src='js/jquery-3.1.1.slim.js'></script>
	<script type="text/javascript" src='js/parallax.min.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" src='js/script.js'></script>
</body>
</html>