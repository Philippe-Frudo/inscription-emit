<?php
    //IMPORT CLASS DATABASE
    require_once("./../../Database/database2.php");
    $dbo = new Database2();
    
    require_once("./../modules/modelParcours.php");
    $parcours = new Parcours();
        
    $resultat = $parcours->getsParcours($dbo);
    echo json_encode($resultat);