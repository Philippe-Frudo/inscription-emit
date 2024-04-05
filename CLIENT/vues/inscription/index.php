<?php 
    // IMPORTER CHEMIN DOSSIER
    include_once "../../rootFiles/rootFiles.php";
    require_once "./../../controleurs/AddCandidat.php";

    // $aj = new AddCandidat();
    //     // echo var_dump($_SERVER["REQUEST_METHOD"] == 'GET');
    //     // die();
    //     if(isset($_POST['Envoyer'])) {
    //         $ajout = $aj->ajoutClients($_POST, $_FILES);
    //     }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSCRIPTION</title>

    <!-- ================= LINK CSS ================= -->
    <link rel="stylesheet" href=" <?php echo CSS_FOLDER_default  ?> ">
    <link rel="stylesheet" href=" <?php echo CSS_FOLDER_inscription  ?> ">
    <!-- ================= LINK CSS ================= -->

</head>
<body>

    <!-- NAVBARRE -->
    <?php require_once "../menu/menu.php" ?>
    <!-- NAVBARRE -->

    <main class="padding">
        <div id="Message"></div>
         <!-- ============================ DEBUT SECTION ===========================-->
        <section class="container">
            <div class="containt-chercher">
                <div class="title">
                    <h1>S'inscrire</h1>
                </div>
           </div>

           
           <!-- <?php if(isset($ajout)): ?>
                    <div class="divAlert">
                        <p class="msgErreurAjout"><?php echo $ajout?></p>  
                        <p class="removemsgErreurAjout">X</p> 
                    </div>
            <?php endif ?> -->
            <!-- ======================= DEBUT DE LA FORMULAIRE ========================-->
            <form action="#" id="form-inscription" method="POST" enctype="multipart/form-data">
                <div class="form-content">
                    <div>
                        <span>Parcours:</span>
                        <select class="parcours" id="parcours" name="parcours">
                            <option value="">Selectioner</option>
                        </select>
                        <p class="msgErrorChamp"></p>
                        <!-- <input type="text" name="name" max="100" min="4" placeholder="Entrer votre nom" required> -->
                    </div>

                    <div>
                        <span>Centre d`éxamen:</span>
                        <select class="centerExam" id="centerExam" name="centerExam">
                            <option value="">Selectionner</option>
                        </select>
                        <!-- <input type="text" class="centerExam" name="centerExam" placeholder="centre: Fianarantsoa, Antananarivo, ..." required> -->
                    </div>

                    <!-- ================== DEBUT INFORMATION CANDIDAT ============-->
                    <div>
                        <span>Nom:</span>
                        <input type="text" class="nom" name="nom" placeholder="Entrer votre nom" >
                        <p class="msgErrorChamp"></p>
                    </div>
                        
                    <div>
                        <span >Prenom:</span>
                        <input type="text" class="prenom" name="prenom" max="100" min="4" placeholder="Entrer votre nom">
                        <!-- <p class="msgErrorChamp"></p> -->
                    </div>

                    <div>
                        <span>Date de naissance:</span>
                        <input type="date" class="dateNaissance" name="dateNaissance" placeholder="obligatoire >7 dernier annee ...">
                        <p style="margin-top: 0.3rem; color: rgba(0,0,0,0.6); font-size:0.9rem;">L'age > 7 a ans qui est valide</p>
                        <p class="msgErrorChamp"></p>
                    </div>

                    <div>
                        <span>Lieu de naissance:</span>
                        <input type="text" class="lieuNaissance" name="lieuNaissance" placeholder="Lieu de naissance">
                        <p class="msgErrorChamp"></p>
                    </div>

                    <div>
                        <span>Sexe:</span>
                        <select class="sexe" name="sexe">
                            <option value="M">Masculin</option>
                            <option value="F">Feminin</option>
                            <option value="Autre">Autre</option>
                        </select>
                        <p class="msgErrorChamp"></p>
                    </div>

                    <div >
                        <span>Situation matrimonial:</span>
                        <select class="situationMatrimonial" name="situationMatrimonial">
                            <option value="Celibataire">Celibataire</option>
                            <option value="Marie">Marie</option>
                            <option value="Mariee">Mariee</option>
                        </select>

                    </div>

                    <div >
                        <span>Nationalité:</span>
                        <select class="nationalite" name="nationalite">
                            <option value="Malagasy">Malagasy</option>
                            <option value="Etranger">Etrenger</option>
                        </select>
                        <!-- <input type="text" name="nationality" placeholder="Nationalité" required> -->
                    </div>

                    <div>
                        <span>Téléphone:</span>
                        <input type="text" class="tel" name="tel" placeholder="Téléphone" >
                        <p style="margin-top: 0.3rem; color: rgba(0,0,0,0.6); font-size:0.9rem;">034 ou 038 ou 033 ou 032 de [10] chiffre</p>
                        <p class="msgErrorChamp"></p>
                        <p class="msgErrorChamp"></p>
                    </div>

                    <div>
                        <span>Adresse postal:</span>
                        <input type="text" class="adresPostal" name="adresPostal" placeholder="Adresse Postal" >
                        <p class="msgErrorChamp"></p>
                    </div>
                    
                    <div>
                        <span>Email:</span>
                        <input type="text" class="email" name="email" placeholder="exemple@gmail.com" >
                        <p class="msgErrorChamp"></p>
                    </div>
                    <!-- ================== FIN INFORMATION CANDIDAT ============-->


                    <!-- =================== DEBUT INFO DIPLOME CANDIDAT ================== -->
                    <div>
                        <span>Numéro d`incription BACC:</span>
                        <input type="text" class="numIncsriptionBacc" name="numIncsriptionBacc" placeholder="Entre [6,7] chiffre ...">
                        <p class="msgErrorChamp"></p>
                    </div>

                    <!-- <div>
                        <span>Centre BACC:</span>
                        <input type="text" class="centreBacc" name="centreBacc" placeholder="Farafangana, Fianarantsoa, ...">
                        <p class="msgErrorChamp"></p>
                    </div> -->
                    <!-- =================== FIN INFO DIPLOME CANDIDAT ================== -->

                    <div>
                        <span>Série BACC:</span>
                        <select class="serieBacc" name="serieBacc" >
                            <option value="">Selectioner</option>
                            <option value="L">L</option>
                            <option value="OSE">OSE</option>
                            <option value="D">D</option>
                            <option value="S">S</option>
                            <option value="C">C</option>
                            <option value="Téchnique">Téchnique</option>
                        </select>
                        <p class="msgErrorChamp"></p>
                        <!-- <input type="number" name="serialBACC" placeholder="Numéro d`incription"> -->
                    </div>

                    <div>
                        <span>Mention BACC:</span>
                        <select class="mentionBacc" name="mentionBacc">
                            <option value="">Selectioner</option>
                            <option value="Passable">Passable</option>
                            <option value="Assez Bien">Assez Bien</option>
                            <option value="Bien">Bien</option>
                            <option value="Très Bien">Très Bien</option>
                            <option value="Honorable">Honorable</option>
                        </select>
                        <p class="msgErrorChamp"></p>
                        <!-- <input type="number" name="serialBACC" placeholder="Numéro d`incription"> -->
                    </div>

                    
                    <!-- ===============DEBUT INFO DOSSIER CANDIDAT -================-->
                    <div>
                        <span>Versement:</span>
                        <input type="file"  class="imgPayment" name="imgPayment" id="imgPayment" placeholder="BORDEREAU" hidden>         
                        <label for="imgPayment" class="importIMG">
                            <span class="imgPayment">X</span>
                                <img src="" alt="imgPayment">
                                <p class="msgErrorChamp"></p>
                        </label>  
                    </div>

                    <div>
                        <span>Fiche de rensegnement:</span>
                        <input type="file" id="imgFiche" class="imgFiche" name="imgFiche" placeholder="Fiche de rensegnement" hidden>
                        <label for="imgFiche" class="importIMG">
                            <span class="imgFiche">X</span>
                            <img src="" alt="imgFiche">
                            <p class="msgErrorChamp"></p>
                        </label> 
                    </div>

                    <div>
                        <span>Demande d`inscription:</span>
                        <input type="file" class="imgDemande" id="imgDemande" name="imgDemande" placeholder="Demande d`ìnscription" hidden>
                        <label for="imgDemande" class="importIMG">
                            <span class="imgDemande">X</span>
                            <img src="" alt="imgDemande">
                            <p class="msgErrorChamp"></p>
                         </label> 
                    </div>

                    <div>
                        <span>Diplome ou Relelé de note:</span>
                        <input type="file" class="imgDiplome" id="imgDiplome" name="imgDiplome" placeholder="Diplome ou relevé" hidden>
                        <label for="imgDiplome" class="importIMG">
                            <span class="imgDiplome">X</span>
                            <img src="" alt="imgDiplome">
                            <p class="msgErrorChamp"></p>
                         </label> 
                    </div>

                    <div>
                        <span>Acte d`Etat Civil:</span>
                        <input type="file" class="imgAEC" id="imgAEC" name="imgAEC" placeholder="Acte d`Etat Civil" hidden>
                        <label for="imgAEC" class="importIMG">
                            <span class="imgAEC">X</span>
                            <img src="" alt="imgAEC">
                            <p class="msgErrorChamp"></p>
                         </label> 
                    </div>

                    <div>
                        <span>Photo d`identité:</span>
                        <input type="file" class="imgIdentite" id="imgIdentite" name="imgIdentite" placeholder="Photo" hidden>
                        <label for="imgIdentite" class="importIMG">
                            <span class="imgIdentite">X</span>
                            <img src="" alt="imgIdentite">
                            <p class="msgErrorChamp"></p>
                         </label> 
                    </div>
                    <!-- ===============FIN ; pINFO DOSSIER CANDIDAT -================-->

                </div>


                <div class="submit">
                    <button type="submit"  name="Envoyer" value="S'inscrire" class="btn btnSubmit inscrire">S'inscrire</button>
                    <button type="reset" value="Vide les champs" class="btn btnReset">Annuler</button>
                    <div id="msgInscri"></div>
                </div>
                <div>
                </div>

            </form>
            <!-- ======================= FIN DE LA FORMULAIRE ==========================-->

        </section>
        <!-- ============================ FIN SECTION ===========================-->

    </main>


    <!-- FOOTER -->
    <?php require_once "../footer/footer.php" ?>
    <!-- FOOTER -->



    <!-- ============= DEBUT DU SCRIPT JS ====================== -->
    <script>
        document.querySelector(".inscription").classList.add("active-a");
    </script>
    <script type="module" src=" <?php echo JS_FOLDER_default  ?> " type="text/javascript"></script>
    <script src=" <?php echo JS_FOLDER_inscription  ?> " type="module"></script>
     <!-- ==================== FIN DU SCRIPT JS ===================== -->
     
</body>
</html>