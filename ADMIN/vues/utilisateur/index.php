<?php 
// LIENS FICHIERS
require_once "../../rootFiles/rootFiles.php";
    $dashboard = "Dashboard";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTILISATEUR</title>

    <!-- ===================CSS===================== -->
    <link rel="stylesheet" href="<?php echo A_CSS_FOLDER_utilisateur ?>">
    <link rel="stylesheet" href="<?php echo A_CSS_FOLDER_default ?>">
    <!-- ===================CSS===================== -->


</head>
<body>

    <!-- ========================== DEBUT BAR DE NAVIGATION ==================== -->
    <?php echo require_once "../headerNAV/headerNAV.php" ?>
    <!-- ========================== FIN BAR DE NAVIGATION ==================== -->

    <main>

        <!-- ===================DEBUT HEADER MAIN===============-->
        <div class="header">
            <article>
                <div class="left">
                    <h1 class="title">ADMINISATRATEUR</h1>
                </div>
                <div class="right">
                    <div class="cherche">
                        <input type="text" placeholder="Chercher...">
                    </div>
                    <div class="a">
                        <a href="#"><img src=" <?php echo A_ICON_FOLDER . "secured.ico" ?> " alt="MAIL"></a>
                        <span>2</span>
                    </div>
                    <div class="a">
                        <a href="#"><img src=" <?php echo A_ICON_FOLDER . "notification.ico" ?> " alt="Notification"></a>
                        <span>1</span>
                    </div>
                    <div class="utilisateur">
                        <img src=" <?php echo A_ICON_FOLDER . "user.ico" ?> " alt="Utilisateur">
                        <p>L.P.N.Frudo</p>

                    </div>
                </div>
                <!-- =======SELECT======== -->
                <?php require_once "../clickProfil/clickProfil.php"; ?>
                <!-- =======SELECT======== -->
            </article>
        </div>
        <!-- ==================FIN HEADER MAIN================ -->

        <!-- =================FIN DE MAIN SECTION=========================== -->
        <section>

            <!-- ===========DEBUT TTITRE SECTION================ -->
            <div class="title-section">
                <h1>UTILISATEUR</h1>
            </div>
            <!-- ===========FIN TTITRE SECTION================= -->
            
            <!-- ===========+++++++++++======================= -->
            <!-- ========OTHER USER====== -->
            <div class="container-section">
                <div class="containt-ajoutUtilisateur">
                    <button class="btn ajoutUtilisateur">Ajouter Utilisateur</button>
               </div>
                <di class="article">
                    <div class="profilUConnect">
                        <div class="photo">
                            <img src="<?php echo A_ICON_FOLDER . "user_50px.png" ?> " alt="PHOTO DE PROFIL" width="50">
                        </div>
                        <div class="articleDesc">
                            <div class="tel">
                                <span>Telephone:</span><br>
                                <p>T</p>
                            </div>
                            
                            <div class="adresse">
                                <span>adresse:</span><br>
                                <p>A</p>
                            </div>
                            <div class="nom">
                                <span>Nom:</span><br>
                                <p>N</p>
                            </div>
                            <div class="prenom">
                                <span>prenom:</span><br>
                                <p>P</p>
                            </div>
                            <div class="email">
                                <span>Email:</span><br>
                                <p>E</p>
                            </div>
                            
                            <div class="sexe">
                                <span>Sexe:</span><br>
                                <p>G</p>
                            </div>
                            
                            <div>
                                <button id="33" class=" btn btnModifier">Modifier</button>
                            </div>

                        </div>
                    </div>

                    <!-- ========OTHER USER====== -->
                    <div class="autreUtilisateur">
                        <table>
                            <thead >
                                <tr>
                                    <th>Photo</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>E-mail</th>
                                    <th>Sexe</th>
                                    <th>Telephone</th>
                                    <th>adresse</th>
                                    <th>Suppression</th>
                                </tr>
                            </thead>
                            <tbody class="tabsAutreU">

                    <!-- `idU`, `nomU`, `prenomU`, `emailU`, `telU`, `codeU`, `adresse`  -->
                        </tbody>
                    </table>   
                </div>
                <!-- FENETRE MODALE MODIFIE UTILISATEUR -->
                <?php require_once "fenetreModUtilisateur.php" ?>

                <!-- FENETRE MODALE AJOUT UTILISATEUR -->
                <?php require_once "fenetreAddUtilisateur.php" ?>

            </div>
            <!-- ==============+++++++======================== -->
            
        </section>
        <!-- =================DEBUT DE MAIN SECTION=========================== -->
        
    </main>

    <!-- ================== JS ======================= -->
    <script>
        document.querySelector(".header nav ul li .utilisateurL").classList.add("active");
    </script>
    <script type="module" src=" <?php echo A_JS_FOLDER_default; ?> "></script>
    <script type="module" src=" <?php echo A_JS_FOLDER_utilisateur; ?> "></script>
    <!-- ================== JS ======================= -->
</body>
</html>