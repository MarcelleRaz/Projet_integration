<?php
session_start();
if (!isset($_SESSION['email'])) {
	header ('Location: acceuil.php');
	exit();
}
?>
<html>
<head>
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