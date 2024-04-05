<?php
    //IMPORT CLASS DATABASE
    require_once("./../../Database/database2.php");

    class Parcours {
        //SELECT  PARCOURS
        public function getsParcours($dbo){
            $cmd = "SELECT lib_parcours FROM parcours";

            $query = $dbo->conn->prepare($cmd);
            $query->execute();
            $datas = $query->fetchAll(PDO::FETCH_ASSOC);
            return $datas;
        }
}
