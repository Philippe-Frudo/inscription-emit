<?php

class Database {

    private $serverName = HOST;
    private $dbName = dbName;
    private $user = USER;
    private $password = PASSWORD;

    public $conn = ""; 
    public function __construct()
    {
        try {

            $this->conn = new PDO("mysql:host=$this->serverName;dbname=$this->dbName", $this->user, $this->password); 
    
            //Modification  l'erreur de PDO en mode Exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Base de donnee connecte";

        } 
        catch (Exception $e) {

            echo "Erreur de connexion de la base de donnee, cause:", $e->getMessage();

        }    
    }

    
}



?>
