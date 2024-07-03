<?php
    //Importation de la  Base de donnée
    require_once("./../../Database/database2.php");
    $dbo = new Database2();
    
    require_once("./../modules/modalUtilisateur.php");
    $objUser = new Utilisateur();

    require_once("./../rootFiles/rootFiles.php");
    require_once("./../default/variable.php");

    $actionU = $_GET['actionU'] ??  $_POST['actionU'];

if ($actionU == "getCurrentUser") {
    
    $emailA = $_POST["emailConnection"];
    $codeA = $_POST["codeConnexion"];

    $resultat = $objUser->authentifier($dbo, $emailA, $codeA);

    $rv = json_encode($resultat);

    CurrentUser::$currentUser = $rv;
    
    echo $rv;
}





