<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>B_system</title>
        <link rel="stylesheet" href="styles.css" type="text/css">
        <link rel="shortcut icon" href="icones/Favicon.png" type="image/x-icon">
    </head>
    <body>
    <html>
<body>
    <h2>FORMULAIRE D'INSCRIPTION</h2>
    <?php
    $motpass=$motpass2="";
    ?>
    <form action="post_data.php" method="post">
        <label for="name">Nom: </label>
        <input type="text" name="name"><br>
        <label for="name">Prénom: </label>
        <input type="text" name="surname"><br>
        <label for="email"> E-mail:  </label>
        <input type="email" name="email"><br>
        <label for="text"> Mot de passe: </label>
        <input type="text" name="motpass"><br>
        <label for="text"> Ressaisir votre mot de passe: </label>
        <input type="text" name="motpass2"><br>
        <?php
            if ($motpass!== $motpass2)
            echo "Il y a une erreur,\n veuillez saisir le même mot de passe.";
        ?>
        <input type="submit">
    </form>
    
</body>
</html>