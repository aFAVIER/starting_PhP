<?php
	//exo1
	$tab_moi= array('janvier','fevrier','mars', 'avril', 'mai','juin', 'juillet','aout','septembre','octobre','novembre','decembre');
	//exo2
	
	//exo3
	
 	//exo4
 	
 	//exo5
 	$Haut2france=array(02=>'Aisne', 59=>'Nord',60=>'Oise', 62=>'Pas_de_Calais', 80=>'Somme');
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
			foreach ($tab_moi as $value) {
				echo $value.' ';
			}
				
			
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo2
			echo $tab_moi[3];
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo3
 			echo $tab_moi[6];
	 		
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo4
 		$tab_moi[3]='Julien';
 		echo $tab_moi[3];
 			
 		?>
 		</h5>
 		<h5>
			<!--exo5-->
				
			<?php

			foreach ($Haut2france as $key => $value) {
				echo $value.$key.' ';
			}
				
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo6
 			echo $Haut2france[59];

 		?>
 		</h5>
 		<h5>
 		<?php
			//exo7
 			$Haut2france+=array(51=>'Marne');
 			foreach ($Haut2france as $key => $value) {
				echo $value.$key.' ';
			}
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo8
 			foreach ($tab_moi as $value) {
				echo $value.' ';
			}
 		?>
 		</h5>
 		<h5>
		<?php
			//exo9
 			foreach ($Haut2france as $key => $value) {
				echo $value.$key.' ';}
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo10
 			
 		?>
 		</h5>


	</main>
	<script type="text/javascript" src='js/jquery-3.1.1.slim.js'></script>
	<script type="text/javascript" src='js/parallax.min.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" src='js/script.js'></script>
</body>
</html>