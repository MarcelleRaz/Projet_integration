<?php
session_start();
if (!isset($_SESSION['login'])) {
	header ('Location: acceuil.php');
	exit();
}
?>
<html>
<head>
<title>Espace membre</title>
</head>
<body>
Votre courriel <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br />
<a href="deconnexion.php">Déconnexion</a>
</body>
</html>