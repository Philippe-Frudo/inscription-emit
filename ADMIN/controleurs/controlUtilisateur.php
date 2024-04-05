<?php
    //IMPORT CLASS DATABASE
    require_once("./../../Database/database2.php");
    $dbo = new Database2();
    
    require_once("./../modules/modalUtilisateur.php");
    $objUser = new Utilisateur();

    require_once("./../rootFiles/rootFiles.php");
    require_once("./../default/variable.php");

       $actionU = $_GET['actionU'] ??  $_POST['actionU'];


    //GETS DATAS USER
    function getsUser(){
        $dbo = new Database2();
        $objUser = new Utilisateur();

        $resultat = $objUser->getsUtilisateur($dbo);
        $rv = json_encode($resultat);
        print_r($rv);
    }

    //Add User
    function addUser(){
        $dbo = new Database2();
        $objUser = new Utilisateur();

        
        if ($_FILES["imgU"]['error'] === UPLOAD_ERR_OK) {

            $nomU = $_POST["nomU"];
            $prenomU = $_POST["prenomU"];
            $emailU = $_POST["emailU"];
            $telU = $_POST["telU"];
            $codeU = $_POST["codeU"];
            $adresseU = $_POST["adresseU"];
            $imgU = $_FILES["imgU"];
            $sexeU = $_POST["sexeU"];

            $imgU_name = $imgU['name'];
            $imgU_temp = $imgU['tmp_name'];
            $div_imgU = explode('.', $imgU_name);
            $imgU_text = strtolower(end($div_imgU));
            $unique_imgU = substr(md5(time()), 0, 10). '.' . $imgU_text;
            $upload_imgU = IMG_FOLDER_User . $unique_imgU;
            
            move_uploaded_file($imgU_temp, $upload_imgU);

            $resultat = $objUser->insertUtilisateur($dbo, $nomU , $prenomU, $emailU, $telU,  $codeU,  $adresseU, $upload_imgU , $sexeU);
            echo json_encode($resultat);
            header("Content-Type: apliccation/json");
            getsUser();

        }

    }

    if($actionU == "getsAllDataUser") {
        getsUser();
        exit();
    }
    // elseif ($actionU == "searchUser") {
    //     //FILTER USER 
    //     $resultat = $objUser->getsUtilisateurById($dbo, 3);
    //     $rv = json_encode($resultat);
    //     print_r($rv);
    //     exit();
    // }
    // elseif($actionU == "updateUser") {
    //     //UPDATE USER
    //     $resultat = $objUser->updateUserById($dbo, 3, "Mayah", "Honorine", "mayah@gmail.com", "0342106811", "1123456789",  "Andarainjato", "../../../Files_Images/images_utilisateur/71698f2c1", "F");
    //     print_r($resultat);
    //     echo "<br>";
    //     exit();
    // }
    elseif($actionU == "delete"){
        $id = $_POST["id"];
        $res = $objUser->deleteUser($dbo, $id);
        return $res;
    }


    elseif($actionU == "addUser") {
        addUser();
        exit();
    }

    elseif($actionU == "compteUSER"){
        $resultat = $objUser->getnumberUser($dbo);
        echo json_encode($resultat);
    }



    // elseif($actionU == "getUserConnect"){
    //     function getUserConnect($data){
    //         echo $data
    //     }
    // }

    elseif($actionU == "connexionA"){
        $emailA = $_POST["emailConnection"];
        $codeA = $_POST["codeConnexion"];

        $resultat = $objUser->authentifier($dbo, $emailA, $codeA);

        $rv = json_encode($resultat);

        CurrentUser::$currentUser = $rv;
        
        echo $rv;
        
        // getUserConnect($rv);
        // header("location:http://localhost/PROJET_JS_L2/ADMIN/vues/dashboard/index.php");  
    }
    
    
    elseif($actionU == "getCurrentUser"){
        // echo $currentUser;
        echo json_encode(CurrentUser::$currentUser);
    }







?>