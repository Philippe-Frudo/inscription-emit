<?php
    // require_once "./rootDatabase.php";
    
    class ConnexionDB 
    {
        public $host = "localhost";
        public $user = "root";
        public $password = "";
        public $database = "inscription_concours_emit";
    
        public $link;
        public $error;
        // public $succes;
      
        public function __construct() {
            $this->dbConnect();
        }
    
        public function dbConnect() 
        {
            $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    
            if (!$this->link) 
            {
                $this->error = "Erreur de connexion DB";
                return false; 
            }
        }

        //INSERTION DONNEES CANDIDAT (CLIENT)
        public function insertCandidat($query)
        {
            $resultat = mysqli_query($this->link, $query) ; //or die($this->link->error . __LINE__)
            if($resultat){
                return $resultat;
            }else{
                return false;
            }
        }

        //INSERTION DONNEES UTILISATEUR (ADMIN)
        public function insertUtilisateur($query)
        {
            $resultat = mysqli_query($this->link, $query) ; //or die($this->link->error . __LINE__)
            if($resultat){
                return $resultat;
            }else{
                return false;
            }
        }
        
        //AFFICHER CANDIDAT (ADMIN)
        public function selectCandidat($query)
        {
            $resultat = mysqli_query($this->link, $query) ; //or die($this->link->error . __LINE__)
            if( mysqli_num_rows($resultat) > 0){
                return $resultat;
            }else{
                return false;
            }
        }
        
        //SELECT UTILISATEUR
        public function selectUser($query)
        {
            $resultat = mysqli_query($this->link, $query) ; //or die($this->link->error . __LINE__)
            if( mysqli_num_rows($resultat) > 0){
                return $resultat;
            }else{
                return false;
            }
        }



    
    }



?>


