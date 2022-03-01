<?php
session_start();
if (!isset($_SESSION['email'])) {
	header ('Location: acceuil.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>	
		<meta charset="utf-8">
		<title>B_system</title>
		<link rel="stylesheet" href="formulaire.css" type="text/css">
		<link rel="shortcut icon" href="icones/Favicon.png" type="image/x-icon">
		<title>Espace membre</title>
	</head>
<body>
	<h1>ESPACE MEMBRE</h1>
<?php
	echo('Bienvenu '. $_SESSION['prenom'].'! <br>');
	printf("Voici vos informations:<br> ID : %s  Nom : %s Prenom :%s <br> Courriel: %s.<br>", $_SESSION['id'], $_SESSION['nom'],$_SESSION['prenom'], htmlentities(trim($_SESSION['email'])));
?>
<a href="deconnexion.php">Déconnexion</a>
</body>
</html>