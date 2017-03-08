<?php


$ok='';
if (ISSET($_POST['nom_POST'])AND ISSET($_POST['prenom_POST'])){
			$ok= htmlspecialchars($_POST['nom_POST']).' '.htmlspecialchars($_POST['prenom_POST']); 
		}
		else{
			$ok=0;
			header('location:http://localhost/php/formulaire.php');
}

$info = new SplFileInfo($_POST['piece_jointe']);
	if ($info->getExtension()=="pdf") {
	echo '<script>alert("ok");</script>';
	}else {
	echo '<script>alert("nope");</script>';
	}
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
		<h1>Traitement GET</h1>
	<h5>
		Bonjour <?php 
			echo htmlspecialchars($_GET['nomGET']).' '.htmlspecialchars($_GET['prenomGET']);
		?>
	</h5>
		<h1>Traitement POST</h1>
	<h5>
		Bonjour <?php 
			echo htmlspecialchars($_GET['nomPOST']).' '.htmlspecialchars($_GET['prenomPOST']);
		?>
	</h5>
	<h1>Traitement POST _ 1</h1>
	<h5>
		Bonjour <?php 
		
			
		?>
		
	</h5>
	<button class="btn btn-success"><strong><a href="index.php">Menu</a></strong></button>
	<button class="btn btn-success"><strong><a href="formulaire.php">Retour</a></strong></button>
	</main>
	<script type="text/javascript" src='js/jquery-3.1.1.slim.js'></script>
	<script type="text/javascript" src='js/parallax.min.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" src='js/script.js'></script>
</body>
</html>