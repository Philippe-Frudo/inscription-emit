<?php
    // ===========COTE CLIENT==============

    //IMPORT CLASS DATABASE
    require_once("./../../Database/database2.php");
    $dbo = new Database2();
    
    require_once("./../modules/modalCandidat.php");
    $candidat = new Candidat();


    print_r($resultat);

?>