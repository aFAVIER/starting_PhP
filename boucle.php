<?php
	//exo1
	$exo1=0;
	//exo2
	$exo2=0;
	$exo2_1=5;
	$resultat2=0;
	//exo3
	$exo3=100;
	$exo3_1=2;

 	//exo4
 	$exo4=1;
 	$exo4_1=0;
 	//exo5
 	$exo5=0;
 	//exo6
 	$exo6=0;
 	//exo7
 	$exo7=0;
 	//exo8
 	$exo8=0;
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
	/*		while($exo1<=10)
			echo $exo1++.'</br>';
 	*/	?>
 		</h5>
 		<h5>
 		<?php
			//exo2
 /*				while ($exo2<=20){
 					echo $resultat2=$exo2*$exo2_1.'</br>';
 					$exo2++;
 				}
*/
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo3
 /*		while ($exo3 >= 10) {
 			echo $exo3--*$exo3_1.'</br>';
 		}
 		*/
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo4
 /*			while ($exo4<=10) {
 		 echo $exo4.'</br>';
 		 $exo4=$exo4+($exo4/2);
 }*/
 		?>
 		</h5>
 		<h5>
			<!--exo5-->	
			<?php
/*			for ($exo5=1; $exo5 <=15 ; $exo5++) { 
				echo "on y arrive presque.</br>";
			}	*/
 		?>
 		</h5>
 		<h5>
 		<?php
/*			//exo6
 		for ($exo6=20; $exo6 >=0 ; $exo6--) { 
 			echo "c'est presque bon.</br>";
 		}
 */			
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo7
 		for ($exo7=1; $exo7 <=100 ; $exo7+=15) { 
 			echo "on tient le bon bout!.</br>";
 		}
 		
 			
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo8
 		for ($exo8=200; $exo8 >=0 ; $exo8-=12) { 
 			echo "test.</br>";
 		}
 		
 		?>
 		</h5>
	</main>
	<script type="text/javascript" src='js/jquery-3.1.1.slim.js'></script>
	<script type="text/javascript" src='js/parallax.min.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" src='js/script.js'></script>
</body>
</html>