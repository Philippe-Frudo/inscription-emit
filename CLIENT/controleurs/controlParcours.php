<?php
    //IMPORT CLASS DATABASE
    require_once("./../../Database/database.php");
    $dbo = new Database();
    
    require_once("./../modules/modelParcours.php");
    $parcours = new Parcours();
        
    $resultat = $parcours->getsParcours($dbo);
    echo json_encode($resultat);