<?php

include 'appelBD.php';
$connect= new appelBD();
if (isset($_SESSION['id']))
{
    header('location:compte.php');
    exit();
}
if(!empty($_POST))
{
    extract($_POST);
    $valid=true;
}
if (isset($_POST['connexion']))
{
    $name;
    $prenom;
    $email = htmlspecialchars(strtolower(trim($_POST["email"])));
    $motpass = trim($_POST["motpass"]);
    $hashed_pass=crypt($motpass,'_J9..rasm');

    if(empty($email)){
        $valid=false;
        $er_mail='Il faut entrer votre adresse courriel';
    }
    if(empty($motpass)){
        $valid=false;
        $er_code='Il faut enter votre mot de passe';
    }
    if ($valid){
        $user=array($email,$hashed_pass);
        $foundRows=array();
        //$sql="SELECT * FROM client WHERE courriel='$email' and motPass='$motpass'";
        $req=$connect->entercompte($email,$hashed_pass);
        //$result=mysqli_affected_rows($req);
        if(mysqli_num_rows($req)>0)
        {
            session_start();
            $_SESSION['login']=$_POST['email'];
            //header('location:espace-membre.php');
            echo'Bienvenu!';
            $connect->closeConnection();
            exit();
        }else{
            echo 'erreur de courriel ou de mot de passe!';
        }
    }
}
 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>B_system</title>
        <link rel="stylesheet" href="styles.css" type="text/css">
        <link rel="shortcut icon" href="icones/Favicon.png" type="image/x-icon">
    </head>
    
<body>
    <header>
            <h1>CONNEXION</h1>
        </header>
    <form action="compte.php" method="post">
        <label for="email"> E-mail:  </label>
        <?php
        if(isset($er_email))
        {
            ?>
                <div>
                <?=$er_mail?>
                </div>
            <?php
        }
        ?>
        <input type="email" placeholder="Email" name="email" required><br>
        <label for="motpass"> Mot de passe: </label>
        <?php
            if(isset($er_code))
            {
                ?>
                    <div>
                    <?=$er_code?>
                    </div>
                <?php
            }
        ?>
        <input type="password" placeholder="Mot de passe" name="motpass" required><br>
        <input type="submit" name="connexion">
    </form>
</body>
</html>
   