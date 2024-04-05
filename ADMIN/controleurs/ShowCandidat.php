<?php

    //IMPORT CLASS DATABASE
    require_once "./../../../Database/Database.php";

    class printsData {

        public $db;

        public function __construct() {
            $this->db = new ConnexionDB();
        }

        //AFFICHER TOUT LES CANDIDATS
        public function showAllCandidat(){
            $query = "SELECT * FROM `candidat` ORDER BY dateEnvoie ASC";
            $resultat = $this->db->selectCandidat($query);
            return $resultat;

        }

        //AUTRE FORMATION CANDIDAT
        public function getOtherInfoCand($id){
            $query = "SELECT * FROM `candidat` WHERE id_cand = '$id' ";
            $resultat = $this->db->selectUser($query);
            return $resultat;
        }

        //AFFICHER TOUS LES UTILISATEURS
        public function showUser(){
            $query = "SELECT * FROM `utilisateur` ORDER BY idU ASC";
            $resultat = $this->db->selectUser($query);
            return $resultat;
        }

    }

?>