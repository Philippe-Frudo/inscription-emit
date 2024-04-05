<?php 

// LIENS FICHIERS
require_once "../../rootFiles/rootFiles.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMANDE</title>

    <!-- ===================CSS===================== -->
    <link rel="stylesheet" href=" <?= A_CSS_FOLDER_default ?> ">
    <link rel="stylesheet" href=" <?= A_CSS_FOLDER_candidat ?> ">
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
                <h1>CANDIDATS</h1>
            </div>
            <!-- ===========FIN TTITRE SECTION================= -->

            <!-- ===========DEBUT NAV================= -->
            <div class="candidat-nav">
                <span class="candidat-demander active-a" >demander</span>
                <span class="candidat-accepter" >Accepter</span>
                <span class="candidat-rejeter" >Rejeter</span>
            </div>
            <!-- ===========FIN NAV================= -->
            
            <div class="localCherche">
                <div>
                    <div class="search">
                        <input type="date" id="search-date">
                    </div>
                    <div class="search">
                        <select name="search-mention" id="search-mention">
                            <option value="Tous affiches">Tous affiches</option>
                            <option value="DAII">DAII</option>
                            <option value="AES">AES</option>
                            <option value="RPM">RPM</option>
                        </select>
                    </div>
                    <div class="search">
                        <select name="search-center" id="search-center">
                            <option value="Fianarantsoa">Fianarantsoa</option>
                            <option value="Antananarivo">Antananarivo</option>
                        </select>
                    </div>
                    <div class="search">
                        <select name="search-nationality" id="search-nationality">
                            <option value="Malagasy">Malagasy</option>
                            <option value="Etranger">Etranger</option>
                        </select>
                    </div>

                    <div class="search">
                        <input type="text" id="search-candidat" placeholder="Entrer le nom ou prenem">
                    </div>
                </div>
            </div>

            <div>

                <!-- =====================DEBUT DEMANDE================================= -->
                <?php require_once "candidatDemander.php"; ?>
                <!-- =====================FIN DEMANDE================================= -->

                <!-- =====================DEBUT ACCEPTER================================= -->
                <?php require_once "candidatAccepter.php"; ?>
                <!-- =====================FIN ACEPTER================================= -->

                <!-- =====================DEBUT REJETER================================= -->
                <?php require_once "candidatRejeter.php"; ?>
               <!-- =====================FIN REJETER================================= -->
            
            </div>
        
        </section>
        <!-- =================FIN DE MAIN SECTION=========================== -->


        <!-- CARD INFO CAND -->
        <?php require_once "../fenetreModaleInfoCandidat/fenetreModaleInfoCandidat.php"; ?>
        
    </main>


    <!-- ================== JS ======================= -->
    <script>
        document.querySelector(".header nav ul li .demande").classList.add("active");
    </script>
    <script type="module" src=" <?php echo A_JS_FOLDER_default ?> "></script>
    <script src=" <?php echo A_JS_FOLDER_candidat ?> "></script>
    <!-- ================== JS ======================= -->
</body>
</html>