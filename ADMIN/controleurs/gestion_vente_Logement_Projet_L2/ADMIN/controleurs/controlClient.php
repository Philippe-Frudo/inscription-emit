<?php

require_once("../../Roote/roote.php");

require_once("../../Database/database.php");
$dbo = new Database();

require_once("../modules/modalClient.php");
$client = new Client();


$action = $_POST["action"] ?? $_GET["action"];


//RETOURNER UN OBJET
if($action == "getData")
{
    $nom = $_POST["nomCli"];
    $prenom = $_POST["prenomCli"];
    $CIN = $_POST["CINCli"];
    $tel = $_POST["telCli"];

    $result = $client->getsClient($dbo, $nom, $prenom, $CIN, $tel);

    $data = $result;
    return $data;
}

//AJOUTER CLIENT
elseif($action == "addData")
{
    $nom = $_POST["nomCli"];
    $prenom = $_POST["prenomCli"];
    $CIN = $_POST["CIN"];
    $sexe = $_POST["sexeCli"];
    $prof = $_POST["professionCli"];
    $adrs = $_POST["adrsCli"];
    $tel = $_POST["telCli"];

    $result = $client->addClient($dbo, $nom, $prenom, $CIN, $sexe, $prof, $adrs,  $tel);

    return $result;
}

//MODIFIER CLIENT
elseif($action == "update")
{
    $id = $_POST["idCli"];
    $nom = $_POST["nomCli"];
    $prenom = $_POST["prenomCli"];
    $CIN = $_POST["CIN"];
    $sexe = $_POST["sexeCli"];
    $prof = $_POST["professionCli"];
    $adrs = $_POST["adrsCli"];
    $tel = $_POST["telCli"];

    $result = $client->updateClient($dbo, $id, $nom, $prenom, $CIN, $sexe, $prof, $adrs,  $tel);
    return $result;
}

//SUPPRIMER CLIENT
elseif($action == "delete")
{
    $id = $_POST["idCli"];

    $result = $client->deleteClient($dbo, $id);

    return $result;
}

?>