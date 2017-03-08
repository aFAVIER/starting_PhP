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
		<form action="user.php" method="get" class="col-md-offset-3 col-md-6">
				<legend class="text-center">FORMULAIRE GET</legend>
			    <div class="form-group">
			      	<label for="texte"><h5>Nom et Prénom :</h5></label>
			      	<input name="nomGET" id="nom_form_get" type="text" class="form-control" placeholder="votre Nom"><br>
			      	<input name="prenomGET" id="prenom_form_get" type="text" class="form-control" placeholder="votre Prénom">
			    </div>
			    <button type="submit" class="btn btn-danger">Envoyer</button>
		</form> 
</br>
			<form action="user.php" method="post" class="col-md-offset-3 col-md-6">
				<legend class="text-center">FORMULAIRE POST</legend>
			    <div class="form-group">
			      	<label for="texte"><h5>Nom et Prénom :</h5></label>
			      	<input name="nomPOST" id="nom_form_post" type="text" class="form-control" placeholder="votre Nom"><br>
			      	<input name="prenomPOST" id="prenom_form_post" type="text" class="form-control" placeholder="votre Prénom">
			    </div>
			    <button type="submit" class="btn btn-danger">Envoyer</button>
			</form> 
			<form action="user.php" method="post" class="col-md-offset-3 col-md-6">
				<legend class="text-center">FORMULAIRE POST</legend>
			    <div class="form-group">
			    	<label>Civilité</label>
			    	<select name="genre">
			    		<option value="homme">Homme</option>
			    		<option value="femme">Femme</option>  
			    	</select>
			      	<label for="texte"><h5>Nom et Prénom :</h5></label>
			      	<input name="nom_POST" id="nom_form_post" type="text" class="form-control" placeholder="votre Nom"><br>
			      	<input name="prenom_POST" id="prenom_form_post" type="text" class="form-control" placeholder="votre Prénom">
			      	<input type="file" name="piece_jointe">
			    </div>
			    <button type="submit" class="btn btn-danger">Envoyer</button>
			</form> 
		<button class="btn btn-success"><strong><a href="index.php">Menu</a></strong></button>
	</main>
	<script type="text/javascript" src='js/jquery-3.1.1.slim.js'></script>
	<script type="text/javascript" src='js/parallax.min.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" src='js/script.js'></script>
</body>
</html>