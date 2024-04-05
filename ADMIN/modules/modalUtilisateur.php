<?php
    // //IMPORT CLASS DATABASE
    // require_once("./../../Database/database2.php");

    class Utilisateur{

        // public $codeA;
        //GETS DATA USER
        public function getsUtilisateur($dbo){
            $cmd = "SELECT idU, nomU, prenomU, emailU, telU, adresseU, photoU, sexeU FROM utilisateur";

            $query = $dbo->conn->prepare($cmd);
            $query->execute();
            $objdatas = $query->fetchAll(PDO::FETCH_ASSOC);
            return $objdatas;
        }

        //INSERT DATA USER
        public function insertUtilisateur($dbo, $nomU, $prenomU, $emailU, $telU, $codeU, $adresseU, $photoU, $sexeU){
            $cmd = "INSERT INTO utilisateur ( nomU, prenomU, emailU, telU, codeU, adresseU, photoU, sexeU ) 
                    VALUES( :nomU, :prenomU, :emailU, :telU, :codeU, :adresseU, :photoU, :sexeU)";

            $query = $dbo->conn->prepare($cmd);

            try {
                $query->execute(
                    [
                        ":nomU"=>$nomU, 
                        ":prenomU"=>$prenomU, 
                        ":emailU"=>$emailU, 
                        ":telU"=>$telU, 
                        ":codeU"=>$codeU, 
                        ":adresseU"=>$adresseU, 
                        ":photoU"=>$photoU, 
                        ":sexeU"=>$sexeU
                    ]);
                    
                return 1;
            } catch (Exception $ee) {
                echo $ee->getMessage();
                return 0;
            }
        }
            
        //SEARCH USER
        public function getsUtilisateurById($dbo, $id){
            $cmd = "SELECT nomU, prenomU, emailU, telU, codeU, adresseU, photoU, sexeU FROM utilisateur WHERE idU=:idU";

            $query = $dbo->conn->prepare($cmd);
            $query->execute([":idU"=>$id]);
            $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;
        }

        //MODIFY INFORMATION
        public function updateUserById($dbo, $idU, $nomU, $prenomU, $emailU, $telU, $codeU, $adresseU, $photoU, $sexeU){
            $cmd = "UPDATE utilisateur SET 
                    nomU=:nomU, 
                    prenomU=:prenomU, 
                    emailU=:emailU, 
                    telU=:telU, 
                    codeU=:codeU, 
                    adresseU=:adresseU, 
                    photoU=:photoU, 
                    sexeU=:sexeU 
                    WHERE idU=:idU";

            $query = $dbo->conn->prepare($cmd);
            try {
                $query->execute(
                    [
                    ":idU"=>$idU,
                    ":nomU"=>$nomU,
                    ":prenomU"=>$prenomU,
                    ":emailU"=>$emailU,
                    ":telU"=>$telU,
                    ":codeU"=>$codeU,
                    ":adresseU"=>$adresseU,
                    ":photoU"=>$photoU,
                    ":sexeU"=>$sexeU
                    ]);
                    
                return 1;
            } catch (Exception $ee) {
                echo "Error " . $ee->getMessage();
                return 0;
            }
        }

        //COUNT USER
        public function getnumberUser($dbo){
            $cmd = "SELECT COUNT(idU) AS numberU FROM utilisateur";
            $query = $dbo->conn->prepare($cmd);
            $query->execute();
            $number = $query->fetchAll(PDO::FETCH_ASSOC);
            return $number;
        }
 
        public function deleteUser($dbo , $idU){
            $cmd = "DELETE  FROM utilisateur WHERE idU=:idU";
            $query = $dbo->conn->prepare($cmd);


            try {
                $query->execute([":idU"=>$idU]);
                // $number = $query->fetchAll(PDO::FETCH_ASSOC);
                // return $number;

                return 1;

            } catch (Exception $e) {
                $e->getMessage();

                return 0;
            }
        }
 
        // public function authentifier( $dbo, $emailA, codeA ) {
           
        // }

        //AUTHENTIFIE USER
        public function authentifier($dbo, $emailA, $codeA){
            $cmd = "SELECT idU  AS Numero, nomU AS Nom, prenomU AS Prenom, emailU AS Email,
             telU AS Telephone, codeU AS Code, adresseU AS Adresse, photoU AS Photo,
              sexeU AS Sexe FROM utilisateur WHERE emailU=:emailU AND codeU=:codeU";

            $query = $dbo->conn->prepare($cmd);
            $query->execute(
                [
                    ":emailU"=>$emailA,
                    ":codeU"=>$codeA
                ]
            );
            $resultat = $query->fetchAll(PDO::FETCH_ASSOC);

            return $resultat;

            // if (mysqli_num_rows($resultat) > 0 ) {
            //     return 1;
            // } else {
            //     return 0;
            // }

        }

    }
?>