<?php

class Logement {

    public function getData($dbo){

        $cmd = "SELECT * FROM longement";

        $query = $dbo->conn->prepare($cmd);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return json_encode($result);
        
    }


    public function addLog($dbo, $prixLog, $codeCite, $numTer){
        $cmd = "INSERT INTO logement (prixLog, codeCite, numTer) VALUES (:prixLog, :codeCite, :numTer)";

        $query = $dbo->conn->prepare($cmd);
        try {
            $query->execute(
                [
                    ":prixLog"=>$prixLog,
                    ":codeCite"=>$codeCite,
                    ":numTer"=>$numTer
                ]);

            return "Un nouveau logement a ete enregistre";
            
        } catch (Exception $e) {
            return "Echec de l'ergistrement";
        }
    }


    public function updateLog($dbo, $status){
        $cmd = "UPDATE logement SET status=:status";

        $query = $dbo->conn->prepare($cmd);
        try {
            $query->execute([":status"=>$status]);
            return "Modification succes";
            
        } catch (Exception $e) {
            return "Erreur lors de la modification" . $e->getMessage();
        }

    }


    public function deleteLog($dbo, $numLog){
        $cmd = "DELETE FROM logemnt WHERE numLog=:numLog";

        $query = $dbo->conn->prepare($cmd);
        try {
            
            $query->execute([":numLog"=>$numLog]);

            return "Suppression logement succes";

        } catch (Exception $e) {
            return "Erreur lors de la modification" . $e->getMessage();
        }

    }

}


?>