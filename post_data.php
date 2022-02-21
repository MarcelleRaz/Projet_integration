<?php
require_once  'appelBD.php';
require_once  'data.php';
    $connect=new appelBD();
    //$connect->getConnect($conn);
    //post_data($connect);
    post_data();
    function post_data()
    {


        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            /*$name = test_input($_POST["name"]);
            $prenom = test_input($_POST["surname"]);
            $email = test_input($_POST["email"]);
            $motpass = test_input($_POST["motpass2"]);*/

            $name = trim($_POST["name"]);
            $prenom = trim($_POST["surname"]);
            $email = trim($_POST["email"]);
            $motpass = trim($_POST["motpass2"]);





        }
        $sql = "INSERT INTO client (prenom,nomFamille,courriel,motpasse) values ($prenom,$name,$email,$motpass)";
        
        mysqli_query($connect->conn,$sql);




        /*if ($result = mysqli_query($link,$sql))
        {
            echo "Nouveau enregistrement créé avec succès";
        } else {
              echo "Erreur : " . $sql . "<br>" . mysqli_connect_error();
        }*/
    }
    
    function test_input($data) 
    {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    
?>