<?php
    //IMPORT CLASS DATABASE
    require_once("./../../Database/database2.php");

    class Candidat {

        //SELECT ALL STUDENTS
        // , $nom, $prenom, $sexe, $nation, $mention
        // WHERE  
        // nom_cand= regexp(':nom') || 
        // prenom_cand= regexp(':prenom') ||
        // sexe= regexp(':sexe') || 
        // nationalite=regexp(':nation')|| 
        // mention_BACC=regexp(':mention') ||
        // num_inscript_BACC=regexp(':n_inscri')
        // [        
        //     ":nom"=>$nom,
        //     ":prenom"=>$prenom,
        //     ":sexe"=>$sexe,
        //     ":nation"=>$nation,
        //     ":mention_BACC"=>$mention
        // ]
        public function getsAllCandidats($dbo){
            $cmd = "SELECT 
                id_cand as idC,
                nom_cand as nomC, 
                prenom_cand as prenomC, 
                date_naissance as NC, 
                lieu_naissance as LN, 
                sexe as SC, 
                nationalite as nationC, 
                situation_matri as SMC, 
                adrs_post as adrsC, 
                email as emailC, 
                tel as telC, 
                num_inscript_BACC as numBaccC, 
                serie_BACC as serieBacc,  
                mention_BACC as MBaccC, 
                img_fiche_rens as ficheC, 
                img_dem_inscription as demendeC, 
                img_copieDiplome_ou_releveNote as diplomeReleveC, 
                img_copie_AEC as copieNC, 
                img_photo as photoC, 
                nom_ville as centreExamC, 
                lib_parcours as parcoursC, 
                imgPayement as payerC, 
                dateEnvoie as dateEC,
                statusCA as statusCA,
                statusCR as statusCR
                FROM candidat";

                $query = $dbo->conn->prepare($cmd);
                $query->execute();
                $datas = $query->fetchAll(PDO::FETCH_ASSOC);
                return $datas;
        }

        //SELECT BY ID
        public function getCandidatsById($dbo, $idC){
            $cmd = "SELECT 
                nom_cand as nomC, 
                prenom_cand as prenomC, 
                date_naissance as NC, 
                lieu_naissance as LN, 
                sexe as SC, 
                nationalite as nationC, 
                situation_matri as SMC, 
                adrs_post as adrsC, 
                email as emailC, 
                tel as telC, 
                num_inscript_BACC as numBaccC, 
                serie_BACC as serieBacc,  
                mention_BACC as MBaccC, 
                img_fiche_rens as ficheC, 
                img_dem_inscription as demendeC, 
                img_copieDiplome_ou_releveNote as diplomeReleveC, 
                img_copie_AEC as copieNC, 
                img_photo as photoC, 
                nom_ville as centreExamC, 
                lib_parcours as parcoursC, 
                imgPayement as payerC, 
                dateEnvoie as dateEC,
                statusCA as statusCA,
                statusCR as statusCR
                FROM candidat
                WHERE id_cand=:id_cand";

                $query = $dbo->conn->prepare($cmd);
                $query->execute([":id_cand"=>$idC]);
                $datas = $query->fetchAll(PDO::FETCH_ASSOC);
                return  $datas;
        }

        public function getsAllCandidatsByStatus($dbo, $statusCA){
            $cmd = "SELECT 
                id_cand as idC,
                nom_cand as nomC, 
                prenom_cand as prenomC, 
                date_naissance as NC, 
                lieu_naissance as LN, 
                sexe as SC, 
                nationalite as nationC, 
                situation_matri as SMC, 
                adrs_post as adrsC, 
                email as emailC, 
                tel as telC, 
                num_inscript_BACC as numBaccC, 
                serie_BACC as serieBacc,  
                mention_BACC as MBaccC, 
                img_fiche_rens as ficheC, 
                img_dem_inscription as demendeC, 
                img_copieDiplome_ou_releveNote as diplomeReleveC, 
                img_copie_AEC as copieNC, 
                img_photo as photoC, 
                nom_ville as centreExamC, 
                lib_parcours as parcoursC, 
                imgPayement as payerC, 
                dateEnvoie as dateEC
                FROM candidat
                WHERE statusCA=:statusCA";

                $query = $dbo->conn->prepare($cmd);
                $query->execute([":statusCA"=>$statusCA]);
                $datas = $query->fetchAll(PDO::FETCH_ASSOC);
                return  $datas;
        }

        //INSERER DATAT
        public function insertCandidat($dbo,  
                $nom, 
                $prenom, 
                $dateNaissance, 
                $lieuNaissance, 
                $sexe,
                $nationalite, 
                $situationMatrimonial, 
                $adresse, 
                $email, 
                $tel, 
                $numIncsriptionBacc, 
                $serieBacc, 
                $mentionBacc, 
                $imgFiche, 
                $imgDemande, 
                $imgDiplome, 
                $imgAEC, $imgIdentite, 
                $centreExamenConcours, 
                $parcours, 
                $imgPayment
            ){
                $cmd = "INSERT INTO candidat
                (
                    nom_cand, 
                    prenom_cand, 
                    date_naissance, 
                    lieu_naissance, 
                    sexe, 
                    nationalite, 
                    situation_matri, 
                    adrs_post, 
                    email, 
                    tel, 
                    num_inscript_BACC, 
                    serie_BACC, 
                    mention_BACC, 
                    img_fiche_rens, 
                    img_dem_inscription, 
                    img_copieDiplome_ou_releveNote, 
                    img_copie_AEC, 
                    img_photo, 
                    nom_ville, 
                    lib_parcours, 
                    imgPayement 
                ) VALUES(
                    :nom_cand, 
                    :prenom_cand, 
                    :date_naissance, 
                    :lieu_naissance, 
                    :sexe, :nationalite, 
                    :situation_matri, 
                    :adrs_post, 
                    :email, 
                    :tel, 
                    :num_inscript_BACC, 
                    :serie_BACC, 
                    :mention_BACC, 
                    :img_fiche_rens, 
                    :img_dem_inscription, 
                    :img_copieDiplome_ou_releveNote, 
                    :img_copie_AEC, 
                    :img_photo, 
                    :nom_ville, 
                    :lib_parcours, 
                    :imgPayement 
                )";

                $query = $dbo->conn->prepare($cmd);
                try {
                    $query->execute(
                        [
                            ":nom_cand"=>$nom, 
                            ":prenom_cand"=>$prenom, 
                            ":date_naissance"=>$dateNaissance, 
                            ":lieu_naissance"=>$lieuNaissance, 
                            ":sexe"=>$sexe, 
                            ":nationalite"=>$nationalite, 
                            ":situation_matri"=>$situationMatrimonial, 
                            ":adrs_post"=>$adresse, 
                            ":email"=>$email, 
                            ":tel"=>$tel, 
                            ":num_inscript_BACC"=>$numIncsriptionBacc, 
                            ":serie_BACC"=>$serieBacc, 
                            ":mention_BACC"=>$mentionBacc, 
                            ":img_fiche_rens"=>$imgFiche, 
                            ":img_dem_inscription"=>$imgDemande, 
                            ":img_copieDiplome_ou_releveNote"=>$imgDiplome, 
                            ":img_copie_AEC"=>$imgAEC, 
                            ":img_photo"=>$imgIdentite, 
                            ":nom_ville"=>$centreExamenConcours, 
                            ":lib_parcours"=>$parcours, 
                            ":imgPayement"=>$imgPayment
                        ]);

                    return 1;
                } catch (Exception $ee) {
                    return 0;
                }

        }

        //UPDATE STATUS (VALIDE CANDIDAT)
        public function updateStatusRejeter($dbo, $idC, $statusCR){
            $cmd = "UPDATE candidat SET statusCR=:statusCR WHERE id_cand=:id_cand";
            $query = $dbo->conn->prepare($cmd);
            try {
                $query->execute([
                    ":id_cand"=>$idC,
                    ":statusCR"=>$statusCR
                ]);
                return 1;
            } catch (Exception $ee) {
                echo "Error " . $ee->getMessage();
                return 0;
            }
        }

        //UPDATE STATUS (INVALID CANDIDAT)
        public function updateStatusaccepter($dbo, $idC, $statusCA){
            $cmd = "UPDATE candidat SET statusCA=:statusCA WHERE id_cand=:id_cand";
            $query = $dbo->conn->prepare($cmd);
            try {
                $query->execute([
                    ":id_cand"=>$idC,
                    ":statusCA"=>$statusCA
                ]);
                return 1;

            } catch (Exception $ee) {
                echo "Error " . $ee->getMessage();
                return 0;
            }
        }

        public function getsNumberCandidatAccept($dbo){
            $cmd = "SELECT COUNT(id_cand) AS numberC_Accept FROM candidat WHERE statusCA = 1 ";

            $query = $dbo->conn->prepare($cmd);
            $query->execute();
            $number = $query->fetchAll(PDO::FETCH_ASSOC);
            return $number;

        }

        public function getsNumberCandidat($dbo){
            $cmd = "SELECT COUNT(id_cand) as numberC FROM candidat";

            $query = $dbo->conn->prepare($cmd);
            $query->execute();
            $number = $query->fetchAll(PDO::FETCH_ASSOC);

            return $number;

        }

        public function getsNumberCandidatDAII($dbo){
            $cmd = "SELECT COUNT(id_cand) as numberC_DAII FROM candidat WHERE lib_parcours = \"DAII\"" ;

            $query = $dbo->conn->prepare($cmd);
            $query->execute();
            $number = $query->fetchAll(PDO::FETCH_ASSOC);
            return $number;

        }

        public function getsNumberCandidatAES($dbo){
            $cmd = "SELECT COUNT(id_cand) as numberC_AES FROM candidat WHERE lib_parcours = \"AES\"" ;

            $query = $dbo->conn->prepare($cmd);
            $query->execute();
            $number = $query->fetchAll(PDO::FETCH_ASSOC);
            return $number;

        }

        public function getsNumberCandidatRPM($dbo){
            $cmd = "SELECT COUNT(id_cand) as numberC_RPM FROM candidat WHERE lib_parcours = \"RPM\"" ;

            $query = $dbo->conn->prepare($cmd);
            $query->execute();
            $number = $query->fetchAll(PDO::FETCH_ASSOC);
            return $number;

        }

        public function deleteCandidat($dbo, $id){
            $cmd = "DELETE FROM candidat WHERE id_cand =:id_cand";
            $query = $dbo->conn->prepare($cmd);

            try {
                $query->execute(["id_cand"=>$id]);

                return 1;
            } catch (Exception $e) {
                $e->getMessage();

                return 0;
            }

            
        }
            
    }


?>