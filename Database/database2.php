<?php

class Database2
{
    private $serverName = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "inscription_concours_emit";

    public $conn = '';

    public function __construct() {
        try {
            
            $this->conn = new PDO("mysql:host=$this->serverName;dbname=$this->dbname", $this->user, $this->password);

            //Set the PDO error to exceptiom
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "done"
        } catch (PDOException $e) {
            echo "Erreur de connexion Base de donnee" . $e->getMessage();
        }
    }
}

?>