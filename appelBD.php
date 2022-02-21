<?php
    class appelBD
    {
            private $servername;
            private $username;
            private $motpass;
            private $dbname;
            private $conn;
        public function __construct(){
            $this->servername='localhost';
            $this->username='root';
            $this->motpass='';
            $this->dbname='magasin';
            $this->conn='';
        }
        public function getConnect($conn){
            
            try{
                $conn = new mysqli($this->servername, $this->username ,$this->motpass,$this->dbname);
                $conn->set_charset("utf8");
                if (!$conn) {
                    echo'Erreur de connexion à la base de données';
                    /* ou
                    if ($conn->connect_error) {
                    echo('Erreur de connexion à la base de données'.$conn->connect_error);
                    }*/          
                }
                echo('Eokkkkkkkkkkkkkkkkkk');

            }
            catch(mysqliException $e){
                echo ($e->getMessage());
            }
            var_dump($conn);
            //$this->conn=$connect;
            return $conn;
        }
        

    }
?>
