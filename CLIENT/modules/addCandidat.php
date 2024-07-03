<?php

    require_once "./../../Database/Database.php";   
    
    // echo var_dump('email' . FILTER_VALIDATE_EMAIL);
    class Ajouter
    {
        public $db;

        public function __construct() 
        {
            $this->db = new ConnexionDB();
        }
        
        //AJOUT CANDIDAT
        public function ajoutClients($data, $file)
        {
            $parcours = $data['parcours'];
            $centreExamenConcours = $data['centerExam'];
            $nom = $data['nom'];
            $prenom = $data['prenom'];
            $dateNaissance = $data['dateNaissance'];
            $lieuNaissance = $data['lieuNaissance'];
            $sexe = $data['sexe'];
            $situationMatrimonial = $data['situationMatrimonial'];
            $nationalite = $data['nationalite'];
            $tel = $data['tel'];
            $adresse = $data['adresPostal'];
            $email = $data['email'];
            
            $numIncsriptionBacc = $data['numIncsriptionBacc'];
            $centreBacc = $data['centreBacc'];
            $serieBacc = $data['serieBacc'];
            $mentionBacc = $data['mentionBacc'];

            $permet = array('jpg', 'jpeg', 'png', 'gif');

            $imgPayment = $file['imgPayment'];
            $file_name_imgPayment = $imgPayment['name'];
            $file_size_imgPayment = $imgPayment['size'];
            $file_temp_imgPayment = $imgPayment['tmp_name'];
            $div_imgPayment = explode('.', $file_name_imgPayment);
            $file_text_imgPayment = strtolower(end($div_imgPayment));
            $unique_image_imgPayment = substr(md5(time()), 0, 10). '.'.$file_text_imgPayment;
            $upload_image_imgPayment = "../../../Files_Images/Images_Bordereau_Payement/". $unique_image_imgPayment;
    

            $imgFiche = $file['imgFiche'];
            $file_name_imgFiche = $imgFiche['name'];
            $file_size_imgFiche = $imgFiche['size'];
            $file_temp_imgFiche = $imgFiche['tmp_name'];
            $div_imgFiche = explode('.', $file_name_imgFiche);
            $file_text_imgFiche = strtolower(end($div_imgFiche));
            $unique_image_imgFiche = substr(md5(time()), 0, 10). '.'.$file_text_imgFiche;
            $upload_image_imgFiche = "../../../Files_Images/Images_Fiche_Renseignement/". $unique_image_imgFiche;
    

            $imgDemande = $file['imgDemande'];
            $file_name_imgDemande = $imgDemande['name'];
            $file_size_imgDemande = $imgDemande['size'];
            $file_temp_imgDemande = $imgDemande['tmp_name'];
            $div_imgDemande = explode('.', $file_name_imgDemande);
            $file_text_imgDemande = strtolower(end($div_imgDemande));
            $unique_image_imgDemande = substr(md5(time()), 0, 10). '.'.$file_text_imgDemande;
            $upload_image_imgDemande = "../../../Files_Images/Images_Demande_Manuscrite/". $unique_image_imgDemande;
    

            $imgDiplome = $file['imgDiplome'];
            $file_name_imgDiplome = $imgDiplome['name'];
            $file_size_imgDiplome = $imgDiplome['size'];
            $file_temp_imgDiplome = $imgDiplome['tmp_name'];
            $div_imgDiplome = explode('.', $file_name_imgDiplome);
            $file_text_imgDiplome = strtolower(end($div_imgDiplome));
            $unique_image_imgDiplome = substr(md5(time()), 0, 10). '.'.$file_text_imgDiplome;
            $upload_image_imgDiplome = "../../../Files_Images/Images_Diplome/". $unique_image_imgDiplome;
            
        
            $imgAEC = $file['imgAEC'];
            $file_name_imgAEC = $imgAEC['name'];
            $file_size_imgAEC = $imgAEC['size'];
            $file_temp_imgAEC = $imgAEC['tmp_name'];
            $div_imgAEC = explode('.', $file_name_imgAEC);
            $file_text_imgAEC = strtolower(end($div_imgAEC));
            $unique_image_imgAEC = substr(md5(time()), 0, 10). '.'.$file_text_imgAEC;
            $upload_image_imgAEC = "../../../Files_Images/Images_Copie_AEC/". $unique_image_imgAEC;
            

            $imgIdentite = $file['imgIdentite'];
            $file_name_imgIdentite = $imgIdentite['name'];
            $file_size_imgIdentite = $imgIdentite['size'];
            $file_temp_imgIdentite = $imgIdentite['tmp_name'];
            $div_imgIdentite = explode('.', $file_name_imgIdentite);
            $file_text_imgIdentite = strtolower(end($div_imgIdentite));
            $unique_image_imgIdentite = substr(md5(time()), 0, 10). '.'.$file_text_imgIdentite;
            $upload_image_imgIdentite = "../../../Files_Images/Images_Photo_Identite/". $unique_image_imgIdentite;
    
            if(empty($email) || empty($parcours) || empty($centreExamenConcours) ||empty($nom) ||empty($dateNaissance) ||empty($lieuNaissance) ||
               empty($sexe) ||empty($situationMatrimonial) ||empty($nationalite) ||empty($tel) ||empty($adresse) || 
               empty($numIncsriptionBacc) ||empty($centreBacc) ||empty($serieBacc) ||empty($file_name_imgPayment) ||empty($file_name_imgFiche)
               ||empty($file_name_imgDemande)||empty($file_name_imgAEC)||empty($file_name_imgDiplome)||empty($file_name_imgIdentite)){

                $erreur = "Le champs ne doit pas etre vide";
                return $erreur;
            }
            elseif($file_size_imgPayment > 1048567 ||
                    $file_size_imgFiche > 1048567 ||
                    $file_size_imgDemande > 1048567 ||
                    $file_size_imgDiplome > 1048567 ||
                    $file_size_imgAEC > 1048567 ||
                    $file_size_imgIdentite > 1048567
                    ){
                
                        $erreur = "La taille de fichier ne doit pas superieur 1 Mo";
                        return $erreur;
            }
            elseif(in_array($file_text_imgPayment, $permet) == false ||
                    in_array($file_text_imgFiche, $permet) == false ||
                    in_array($file_text_imgDemande, $permet) == false ||
                    in_array($file_text_imgDiplome, $permet) == false ||
                    in_array($file_text_imgAEC, $permet) == false ||
                    in_array($file_text_imgIdentite, $permet) == false
                    ){
                
                        $erreur = "L'extension du fichier doit ". implode(',', $permet);
                        return $erreur;
            }
            else{
                move_uploaded_file($file_temp_imgPayment, $upload_image_imgPayment);
                move_uploaded_file($file_temp_imgFiche, $upload_image_imgFiche);
                move_uploaded_file($file_temp_imgDemande, $upload_image_imgDemande);
                move_uploaded_file($file_temp_imgDiplome, $upload_image_imgDiplome);
                move_uploaded_file($file_temp_imgAEC, $upload_image_imgAEC);
                move_uploaded_file($file_temp_imgIdentite, $upload_image_imgIdentite);


                $query = "INSERT INTO `candidat`(`nom_cand`, `prenom_cand`, `date_naissance`, `lieu_naissance`, `sexe`, `nationalite`, `situation_matri`, `adrs_post`, `email`, `tel`, `num_inscript_BACC`, `serie_BACC`, `mention_BACC`, `img_fiche_rens`, `img_dem_inscription`, `img_copieDiplome_ou_releveNote`, `img_copie_AEC`, `imgPayement`, `img_photo`, `nom_ville`, `lib_parcours`) 
                VALUES ('$nom','$prenom','$dateNaissance','$lieuNaissance','$sexe','$nationalite','$situationMatrimonial','$adresse','$email','$tel','$numIncsriptionBacc','$serieBacc', '$mentionBacc','$upload_image_imgFiche','$upload_image_imgDemande','$upload_image_imgDiplome','$upload_image_imgAEC','$upload_image_imgPayment','$upload_image_imgIdentite','$centreExamenConcours','$parcours')";

                $resultat = $this->db->insertCandidat($query);
                
                if ($resultat) {

                    $erreur = "L'insertion des donnees est succes ";
                    return $erreur;

                } else {
                    $erreur = "L'insertion des donnees est en echec";
                    return $erreur;
                }
        
            }
        }

    }