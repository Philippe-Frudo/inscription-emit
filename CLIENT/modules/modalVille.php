<?php
    //Importation de la  Base de donnée
    require_once("./../../Database/database2.php");
    class Ville{

        public function getsVilles($dbo){
            $cmd = "SELECT nom_ville FROM ville";

            $query = $dbo->conn->prepare($cmd);
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            return $data;

        }
    }