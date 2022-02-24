<?php
    
    require_once  'appelBD.php';
    $err_inscription = array();
    $connect= new appelBD();
    $link=$connect->getConnect();
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name = trim($_POST["name"]);
        $prenom = trim($_POST["surname"]);
        $email = trim($_POST["email"]);
        $motpass = trim($_POST["motpass"]);
        $motpass2 = trim($_POST["motpass2"]);
    }
    //$sql = "INSERT INTO client (prenom,nomFamille,courriel,motpasse) values ('$prenom','$name','$email','$motpass2')";
        //mysqli_query($link,$sql); // cette partie est déjà executée dans ligne 19
        $erreur=veriferreur();
        if (empty($erreur))
    {
        if( !empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["motpass"]) && !empty($_POST["motpass2"]))
        {
            // INSERT en bdd
            $sql = "INSERT INTO client (prenom,nomFamille,courriel,motpasse) values ('$prenom','$name','$email','$motpass2')";
            mysqli_query($link,$sql);
            //echo "Nouveau enregistrement créé avec succès";
            header('location:compte.php');
            exit();
            // ou mysqli_close($link); 
            // ATTENTION ! ON NE MET JAMAIS LE MOT DE PASSE EN SESSION !!
            // on redirige vers l'espace membre
        }
    } else
    {
        header('location:inscription.php');
    }
    

    /*function erreur(){
        $err_inscription =veriferreur();
        echo(empty($err_inscription));
        if(!empty($err_inscription))
        {
            echo implode('<br/>', $err_inscription);
            echo nl2br('je suis dans affichage erreur');
        }
        return $err_inscription;
    }*/
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
?>