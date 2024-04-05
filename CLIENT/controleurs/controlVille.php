<?php
    //IMPORT CLASS DATABASE
    require_once("./../../Database/database2.php");
    $dbo = new Database2();
    
    require_once("./../modules/modalVille.php");
    $ville = new Ville();
        

    $resultat = $ville->getsVilles($dbo);
    echo json_encode($resultat);