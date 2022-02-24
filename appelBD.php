<?php
    class appelBD
    {
            private $servername;
            private $username;
            private $motpass;
            private $dbname;
            private $conn;
            private $req;
        public function __construct()
        {
            $this->servername='localhost';
            $this->username='root';
            $this->motpass='';
            $this->dbname='magasin';
            try
            {
                $_conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username ,$this->motpass ,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $_conn->exec("set names utf8mb4");
                if (!$_conn)
                {
                    echo'Erreur de connexion à la base de données';
                    /* ou
                    if ($conn->connect_error) {
                    echo('Erreur de connexion à la base de données'.$conn->connect_error);
                    }*/          
                }
                echo"Connexion réussie!\n";

           }
            catch(PDOException $e)
            {
                echo ($e->getMessage());
            }
        }
        public function getConnect()
        {
            $this->conn;
        }
        public function insertion($sql,$data=array())
        {
            $req=$this->conn->prepare($sql);
            $req->execute($data);
        }
        public function selection($sql,$data=array())
        {
            $req=$this->conn->prepare($sql);
            //$req->execute($data);
            return $this->req=$req;
        }

    }
    
?>
