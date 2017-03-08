<?php
	//exo1
	function exo1(){
		return 'true';
	};
	//exo2
	function exo2($e){
		return $e;
	};
	//exo3
	function exo3($a,$b){
		return $a.$b;
	};
 	//exo4
 	function exo4($c,$d){
 		if ($c<$d) {
 			return 'le premier est le plus petit ';
 		}
 		else if ($c>$d){
 			return ' le premier est le plus grand';
 		}
 		else{ return 'Les 2 nombre sont égaux';}
 	};
 	//exo5
 	function exo5($e=2,$f=''){
 		return $e.$f;
 	};
 	//exo6
 	function exo6($nom='', $prenom='', $age=12){
 		return 'bonjour '.$nom.' '.$prenom.', tu as '.$age.' ans.';
 	};
 	//exo7
 	function exo7($genre, $age){
 		if($genre=='homme')
	 				if ($age>=18) echo 'vous êtes un homme majeur';
	 				else echo 'vous êtes un homme mineur';
	 			else if($genre=='femme')
	 				if($age>=18) echo 'vous êtes une femme majeure';
	 				else echo 'vous êtes une femme mineure';
	 			else echo 'renseignez par homme ou femme';
 	};
 	//exo8
 	function exo8($g=2,$h=2,$j=2){
 		return $g+$h+$j;
 	};


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
			echo exo1();
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo2
			echo exo2('fini aussi');
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo3
 			echo exo3('test', 'prout');
	 			
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo4
 			echo exo4(4,4);
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo5
 		echo exo5(5,' test');
	 		?>
 		</h5>
 		<h5>
 		<?php
			//exo6
 		echo exo6('IOU', 'aghj', 45);
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo7
 			echo exo7('homme', 45);
 		?>
 		</h5>
 		<h5>
 		<?php
			//exo8
 			echo exo8();

 		?>
 		</h5>
	
	</main>
	<script type="text/javascript" src='js/jquery-3.1.1.slim.js'></script>
	<script type="text/javascript" src='js/parallax.min.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" src='js/script.js'></script>
</body>
</html>