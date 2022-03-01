<?php
    class appelBD
    {
            private $servername;
            private $username;
            private $motpass;
            private $dbname;
            private $conn;
            
        public function __construct()
        {
            $this->servername='localhost';
            $this->username='root';
            $this->motpass='';
            $this->dbname='magasin';
            try
            {
                $this->conn = new mysqli($this->servername,$this->username ,$this->motpass);
                $this->conn->set_charset("utf8mb4");
                if (!$this->conn)
                {
                    echo'Erreur de connexion à la base de données';
                    /* ou
                    if ($conn->connect_error) {
                    echo('Erreur de connexion à la base de données'.$conn->connect_error);
                    }*/          
                }
                else
                {
                    $select_db = mysqli_select_db($this->conn,$this->dbname);
                    if(!$select_db)
                    {
                        die("La sélection de la base de données a échoué " . mysql_error());
                    }
                }
                //echo"Connexion réussie!\n";
           }
            catch(mysqliException $e)
            {
                echo ($e->getMessage());
            }
        }
        public function selection($data)
        {
            $sql="SELECT courriel from client where courriel='$data'";
            $result=$this->conn->query($sql);
            return $result;
        }
        public function insertion($prenom,$name,$email,$motpass2)
        {
            $sql="INSERT INTO client (prenom,nomFamille,courriel,motpasse) values ('$prenom','$name','$email','$motpass2')";
            $req=$this->conn->query($sql);
            
        }
        public function entercompte($email, $mdp){
            $sql="SELECT id, nomFamille, prenom from client where courriel='$email' and motPasse='$mdp'";
            $result=$this->conn->query($sql);
            return $result;
        }
        public function closeConnection()
        {
            if(isset($this->conn))
            {
                mysqli_close($this->conn);
                unset($this->conn);
            }
        }
    }
    
?>
