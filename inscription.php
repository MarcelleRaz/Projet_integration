<?php 
    session_start();
    include 'appelBD.php';
    $connect= new appelBD();
    $connect= $connect->getConnect();
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
    $err_inscription = array();
    if (isset($_POST['inscription']))
    {
        $name = trim($_POST["name"]);
        $prenom = trim($_POST["surname"]);
        $email = strtolower(trim($_POST["email"]));
        $motpass = trim($_POST["motpass"]);
        $motpass2 = trim($_POST["motpass2"]);
        
        if(empty($name))
        {
            $valid=false;
            $er_nom=("Veuillez entrer votre nom.");
        }
        if(empty($prenom))
        {
            $valid=false;
            $er_prenom=("Veuillez entrer votre prénom.");
        }
        if(empty($email))
        {
            $valid=false;
            $er_email=("Veuillez entrer votre adresse courriel.");
        } else
        {
            $req_mail=$connect->selection("SELECT courriel from client where courriel=?",array($email));
            
            //$req_mail=$req_mail->fetch();
            if($req_mail['courriel']<> "")
            {
                $valid=false;
                $er_mail="Cet adresse courriel existe déjà!";
            }
        } 
        if(empty($motpass))
        {
            $valid=false;
            $er_mdp="Le mot de passe ne peut être vide";
        }  elseif(strcmp($motpass,$motpass2)!=0)
        {
            $valid=false;
            $er_mdp= 'La confirmation de mot de passe ne correspond pas!';       
            echo nl2br('je suis dans verification mdp');
        }
        if($valid){
            $motpass=crypt($motpass,'$6$rounds=5000$usesomesillystringforsalt$');
            $connect->insertion("INSERT INTO client (prenom,nomFamille,courriel,motpasse) values (?,?,?,?)",array($prenom,$name,$email,$motpass2));
            echo "Nouveau enregistrement créé avec succès";
            //header('location:compte.php');
            //exit();
        }
    }
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);    
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>B_system</title>
        <link rel="stylesheet" href="styles.css" type="text/css">
        <link rel="shortcut icon" href="icones/Favicon.png" type="image/x-icon">
        <title>FORMULAIRE D'INSCRIPTION</title>
    </head>
    <body>
        <header>
            <h1>FORMULAIRE D'INSCRIPTION</h1>
        </header>
        <form action="inscription.php" method="post">
            <label for="name">Nom: </label>
            <?php
            if(isset($er_nom))
            {
                ?>
                    <div>
                    <?=$er_name?>
                    </div>
                <?php
            }
            ?>
            <input type="text" name="name" value="<?php if(isset($name)){ echo $name; }?>"><br>
            <label for="name">Prénom: </label>
            <?php
            if(isset($er_prenom))
            {
                ?>
                    <div>
                    <?=$er_prenom?>
                    </div>
                <?php
            }
            ?>
            <input type="text" name="surname" value="<?php if(isset($prenom)){ echo $prenom; }?>"><br>
            <label for="email"> E-mail:  </label>
            <?php
            if(isset($er_email))
            {
                ?>
                    <div>
                    <?=$er_email?>
                    </div>
                <?php
            }
            ?>
            <input type="email" name="email" value="<?php if(isset($email)){ echo $email; }?>"><br>
            <label for="text"> Mot de passe: </label>
            <?php
            if(isset($er_mdp))
            {
                ?>
                    <div>
                    <?=$er_mdp?>
                    </div>
                <?php
            }
            ?>
            <input type="text" name="motpass" value="<?php if(isset($motpass)){ echo $motpass; }?>"><br>
            <label for="text"> Ressaisir votre mot de passe: </label>
            <input type="text" name="motpass2"><br>
            <input type="submit" name="inscription">
        </form>
    </body>
</html>