<?php

class Client {

    // GET DATA
    public function getsClient($dbo, $nom, $prenom, $CIN, $tel){
        $cmd = "SELECT * FROM client WHERE LIKE '%:nomCli%', LIKE '%:prenomCli%' LIKE '%:prenomCli%' LIKE ':telCli' ";

        $query = $dbo->conn->prepare($cmd);
        $query->execute(
            [
                ":nomCli"=>$nom,
                ":prenomCli"=>$prenom,
                ":CINCli"=>$CIN,
                ":telCli"=>$tel
            ]
        );
        $datas = $query->fetchAll(PDO::FETCH_ASSOC);

        return json_encode($datas);
    }

    //AJOUTER UN NOUVEAU CLIENT
    public function addClient($dbo, $nom, $prenom, $CIN, $sexe, $profession, $adresse, $tel){
        $cmd = "INSERT INTO client (nomCli, adrsCli, prenomCli, CINCli, sexeCli, professionCli, telCli) VALUES 
                (:nomCli, :adrsCli, :prenomCli, :CINCli, :sexeCli, :professionCli, :telCli)";

        $query = $dbo->conn->prepare($cmd);

        try {
            $query->execute(
            [
                ":nomCli"=>$nom,
                ":adrsCli"=>$adresse,
                ":prenomCli"=>$prenom,
                ":CINCli"=>$CIN,
                ":sexeCli"=>$sexe,
                ":professionCli"=>$profession,
                ":telCli"=>$tel
            ]);

            return "Enregistrement succes";
            
        } catch (Exception $e) {

            return "Echec d'enregistrement" . $e->getMessage();
        }

    }

    //MODIFIER UN CLIENT
    public function updateClient($dbo, $id, $nom, $prenom, $CIN, $sexe, $profession, $adresse, $tel){
        $cmd = "UPDATE client SET 
                nomCli=:nomCli, 
                prenomCli=:prenomCli, 
                CINCli=:CINCli, 
                sexeCli=:sexeCli, 
                professionCli=:professionCli, 
                adrsCli=:adrsCli, 
                telCli=:telCli 
                WHERE codeCli=:codeCli";

        $query = $dbo->conn->prepare($cmd);

        try {
            $query->execute(
                [
                    ":codeCli"=>$id,
                    ":nomCli"=>$nom,
                    ":prenomCli"=>$prenom,
                    ":CINCli"=>$CIN,
                    ":sexeCli"=>$sexe,
                    ":professionCli"=>$profession,
                    ":adresseCli"=>$adresse,
                    ":telCli"=>$tel
                ]);
            
            return "La modification du client a reussi";

        } catch (Exception $e) {
            return "Echec de la modification du client" . $e->getMessage();
        }
    }

    //SUPPRIMER UN CLIENT
    public function deleteClient($dbo, $id){
        $cmd = "DELETE FROM client WHERE codeCli=:codeCli";

        $query = $dbo->conn->prepare($cmd);
        try {
            $query->execute([":codeCli"=>$id]);
            return "Client" . $id . "a ete supprime";
        } catch (Exception $e) {
            return "Erreur de la suppression";
        }
    }


}

?>