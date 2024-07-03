<?php
    //Importation de la  Base de donnée
    require_once "./../../../Database/Database.php";
    class AddUser {

        public $db;

        public function __construct() {
            $this->db = new ConnexionDB();
        }

        public function ajouterUtilisateur($data, $file) {
            $nomU = $data['nomU'];
            $prenomU = $data['prenomU'];
            $sexeU = $data['sexeU'];
            $adresseU = $data['adresseU'];
            $emailU = $data['emailU'];
            $codeU = $data['codeU'];
            $telU = $data['telU'];

            $permet = array('jpg', 'jpeg', 'png', 'gif');
            $imgU = $file['imgU'];
            $imgU_name = $imgU['name'];
            $imgU_size = $imgU['size'];
            $imgU_temp = $imgU['tmp_name'];
            $div_imgU = explode('.', $imgU_name);
            $imgU_text = strtolower(end($div_imgU));
            $unique_imgU = substr(md5(time()), 0, 10). '.' . $imgU_text;

            $upload_imgU = "../../../Files_Images/images_utilisateur/". $unique_imgU;

            if(empty($nomU) || empty($sexeU) ||empty($adresseU) ||empty($codeU) ||empty($imgU_name) || empty($emailU)){

                $erreur = "Le champ ne doit pas etre vide";
                return $erreur;
            }

            elseif($imgU_size > 1048567){
                $erreur = "La taille de fichier ne doit pas superieur 1 Mo";
                return $erreur;
            }
            elseif(in_array($imgU_text, $permet) == false ){

                $erreur = "L'extension du fichier doit ". implode(',', $permet);
                return $erreur;
            }
            else{
                move_uploaded_file($imgU_temp, $upload_imgU);

                $query = "INSERT INTO `utilisateur`(`nomU`, `prenomU`, `emailU`, `telU`, `codeU`, `adresseU`, `photoU`) VALUES 
                                        ('$nomU', '$prenomU', '$emailU', '$telU', '$codeU', '$adresseU', '$upload_imgU')";

                $resultat = $this->db->insertUtilisateur($query);

                if ($resultat) {
                    $erreur = "L'insertion des donnees est succes ";
                    return $erreur ;

                } else {
                    $erreur = "L'insertion des donnees est en echec";
                    return $erreur;
                }
            }

        }  
    }
?>

