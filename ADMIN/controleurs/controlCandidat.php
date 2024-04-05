<?php
    //IMPORT CLASS DATABASE
    require_once("./../../Database/database2.php");
    $dbo = new Database2();
    
    require_once("./../modules/modalCandidat.php");
    $candidat = new Candidat();

    require_once("./../rootFiles/rootFiles.php");

    //ACTION REQUETE
    $action1 = $_GET['action'] ?? $_POST['action'];

    // $dataInsert = json_decode($_POST[]);


    function getsData(){
        $candidat = new Candidat();
        $dbo = new Database2();
        
        $resultat = $candidat->getsAllCandidats($dbo);
        print_r(json_encode($resultat));
   }

    function insertData(){
        $candidat = new Candidat();
        $dbo = new Database2();

        $adresPostal = $_POST['adresPostal'];
        $centerExam = $_POST['centerExam'];
        // $centreBacc = $_POST['$centreBacc'];
        $dateNaissance = $_POST['dateNaissance'];
        $email = $_POST['email'];
        $lieuNaissance = $_POST['lieuNaissance'];
        $mentionBacc = $_POST['mentionBacc'];
        $nationalite = $_POST['nationalite'];
        $nom = $_POST['nom'];
        $numIncsriptionBacc = $_POST['numIncsriptionBacc'];
        $parcours = $_POST['parcours'];
        $prenom = $_POST['prenom'];
        $serieBacc = $_POST['serieBacc'];
        $sexe = $_POST['sexe'];
        $situationMatrimonial = $_POST['situationMatrimonial'];
        $tel = $_POST['tel'];
        $imgAEC = $_FILES['imgAEC'];
        $imgDemande = $_FILES['imgDemande'];
        $imgDiplome = $_FILES['imgDiplome'];
        $imgFiche = $_FILES['imgFiche'];
        $imgIdentite = $_FILES['imgIdentite'];
        $imgPayment = $_FILES['imgPayment'];

        $permet = array('jpg', 'jpeg', 'png', 'gif');

        $file_name_imgPayment = $imgPayment['name'];
        $file_size_imgPayment = $imgPayment['size'];
        $file_temp_imgPayment = $imgPayment['tmp_name'];
        $div_imgPayment = explode('.', $file_name_imgPayment);
        $file_text_imgPayment = strtolower(end($div_imgPayment));
        $unique_image_imgPayment = substr(md5(time()), 0, 10). '.'.$file_text_imgPayment;
        $upload_image_imgPayment = IMG_FOLDER_payement. $unique_image_imgPayment;


        $file_name_imgFiche = $imgFiche['name'];
        $file_size_imgFiche = $imgFiche['size'];
        $file_temp_imgFiche = $imgFiche['tmp_name'];
        $div_imgFiche = explode('.', $file_name_imgFiche);
        $file_text_imgFiche = strtolower(end($div_imgFiche));
        $unique_image_imgFiche = substr(md5(time()), 0, 10). '.'.$file_text_imgFiche;
        $upload_image_imgFiche = IMG_FOLDER_fiche . $unique_image_imgFiche;

        $file_name_imgDemande = $imgDemande['name'];
        $file_size_imgDemande = $imgDemande['size'];
        $file_temp_imgDemande = $imgDemande['tmp_name'];
        $div_imgDemande = explode('.', $file_name_imgDemande);
        $file_text_imgDemande = strtolower(end($div_imgDemande));
        $unique_image_imgDemande = substr(md5(time()), 0, 10). '.'.$file_text_imgDemande;
        $upload_image_imgDemande = IMG_FOLDER_demande . $unique_image_imgDemande;

        $file_name_imgDiplome = $imgDiplome['name'];
        $file_size_imgDiplome = $imgDiplome['size'];
        $file_temp_imgDiplome = $imgDiplome['tmp_name'];
        $div_imgDiplome = explode('.', $file_name_imgDiplome);
        $file_text_imgDiplome = strtolower(end($div_imgDiplome));
        $unique_image_imgDiplome = substr(md5(time()), 0, 10). '.'.$file_text_imgDiplome;
        $upload_image_imgDiplome = IMG_FOLDER_diplome . $unique_image_imgDiplome;
        
        $file_name_imgAEC = $imgAEC['name'];
        $file_size_imgAEC = $imgAEC['size'];
        $file_temp_imgAEC = $imgAEC['tmp_name'];
        $div_imgAEC = explode('.', $file_name_imgAEC);
        $file_text_imgAEC = strtolower(end($div_imgAEC));
        $unique_image_imgAEC = substr(md5(time()), 0, 10). '.'.$file_text_imgAEC;
        $upload_image_imgAEC = IMG_FOLDER_AEC. $unique_image_imgAEC;
        
        $file_name_imgIdentite = $imgIdentite['name'];
        $file_size_imgIdentite = $imgIdentite['size'];
        $file_temp_imgIdentite = $imgIdentite['tmp_name'];
        $div_imgIdentite = explode('.', $file_name_imgIdentite);
        $file_text_imgIdentite = strtolower(end($div_imgIdentite));
        $unique_image_imgIdentite = substr(md5(time()), 0, 10). '.'.$file_text_imgIdentite;
        $upload_image_imgIdentite = IMG_FOLDER_identity . $unique_image_imgIdentite;
        
        move_uploaded_file($file_temp_imgPayment, $upload_image_imgPayment);
        move_uploaded_file($file_temp_imgFiche, $upload_image_imgFiche);
        move_uploaded_file($file_temp_imgDemande, $upload_image_imgDemande);
        move_uploaded_file($file_temp_imgDiplome, $upload_image_imgDiplome);
        move_uploaded_file($file_temp_imgAEC, $upload_image_imgAEC);
        move_uploaded_file($file_temp_imgIdentite, $upload_image_imgIdentite);


        $rv = $candidat->insertCandidat($dbo, 
            $nom,
            $prenom, 
            $dateNaissance , 
            $lieuNaissance, 
            $sexe , 
            $nationalite, 
            $situationMatrimonial, 
            $adresPostal, 
            $email, 
            $tel, 
            $numIncsriptionBacc, 
            $serieBacc, 
            $mentionBacc, 
            $upload_image_imgFiche, 
            $upload_image_imgDemande, 
            $upload_image_imgDiplome , 
            $upload_image_imgAEC, 
            $upload_image_imgIdentite, 
            $centerExam , 
            $parcours, 
            $upload_image_imgPayment
        );
        $resultat = json_encode($rv);
        print_r($resultat);
        header("ContentType: application/json");
        getsData();
        exit();
    }

    //GETS CANDIDATS
    if($action1 == "getsAllData"){
       getsData();
    }
    
    //INSERER DATA
    elseif($action1 == "insertData"){     
        insertData();
    }

    //UPDATE STATUS CANDIDAT (ACCEPT)
    elseif($action1 == "accepter"){
        $idA = $_POST['id'];
        $resultat = $candidat->updateStatusaccepter($dbo, $id, 1);
        echo json_encode(['status' => $resultat]);
    }

    //UPDATE STATUS CANDIDAT (REJETER)
    elseif($action1 == "rejeter"){
        $idR = $_POST['id'];
        $resultat = $candidat->updateStatusRejeter($dbo, $idR, 1);
        echo json_encode(['status' => $resultat]);
    }
    
    //DELETE CANDIDAT (REJETER)
    elseif($action1 == "delete"){
        $id = $_POST['id'];
        $resultat = $candidat->deleteCandidat($dbo, $id);
        echo json_encode(['candidatDelete' => $resultat]);
    }

    //GET CANDIDAT BY ID
    elseif($action1 == "detailId"){
        $id = $_POST['id'];
        $resultat = $candidat->getCandidatsById($dbo, $id);
        echo json_encode($resultat);
    }

    elseif($action1 =="compteCandidat"){
            $resultat = $candidat->getsNumberCandidat($dbo);
            echo json_encode($resultat);
    }

    elseif($action1 =="getNumberCandidatAccepter"){
        $resultat = $candidat->getsNumberCandidatAccept($dbo);
        echo json_encode($resultat);
    }

    elseif($action1 =="compteCandidatDAII"){
        $resultat = $candidat->getsNumberCandidatDAII($dbo);
        echo json_encode($resultat);
    }

    elseif($action1 =="compteCandidatAES"){
        $resultat = $candidat->getsNumberCandidatAES($dbo);
        echo json_encode($resultat);
    }

    elseif($action1 =="compteCandidatRPM"){
        $resultat = $candidat->getsNumberCandidatRPM($dbo);
        echo json_encode($resultat);
    }

?>