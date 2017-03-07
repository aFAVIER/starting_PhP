<?php
	//exo1
	$age=30;
	//exo2
	$is_easy=true;
	//exo3
	$age=15;	
 	$genre='femme';
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

 		?>
 		</h5>
	</main>
	<script type="text/javascript" src='js/jquery-3.1.1.slim.js'></script>
	<script type="text/javascript" src='js/parallax.min.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" src='js/script.js'></script>
</body>
</html>