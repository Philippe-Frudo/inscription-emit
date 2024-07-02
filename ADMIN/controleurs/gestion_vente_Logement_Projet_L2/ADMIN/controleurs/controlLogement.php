<?php
require_once("../../Roote/roote.php");

require_once("../../Database/database.php");
$dbo = new Database();
// echo $dbo;

require_once("../modules/modalLogement.php");
$log = new Logement();


$action = $_POST["action"] ?? $_GET["action"];


if ($action == "getData") {
    $result = $log->getData($dbo);
    return $result;

} 

elseif($action == "addData") {
    $prixLog = $_POST["prixLog"];
    $codeCite = $_POST["codeCite"];
    $numTer = $_POST["numTer"];

    $result = $log->addLog($dbo, $prixLog, $codeCite, $numTer);

    return $result;
}

elseif ($action == "update") {
    $status = $_POST["status"];

    $result = $log->updateLog($dbo, $status);

    return $result;
}

elseif($action == "delete"){
    $id = $_POST["numLog"];

    $result = $log->deleteLog($dbo, $id);
    return $result;
}


?>