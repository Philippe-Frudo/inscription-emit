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
    <title>DASHBORD</title>

    <!-- ===================CSS===================== -->
    <link rel="stylesheet" href=" <?= A_CSS_FOLDER_default ?> ">
    <link rel="stylesheet" href=" <?= A_CSS_FOLDER_dashboard ?> ">
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

        
        <!-- =================DEBUT DE MAIN SECTION=========================== -->
        <section>

            <!-- ===========DEBUT TTITRE SECTION================ -->
            <div class="title-section">
                <h1>Dashboad</h1>
            </div>
            <!-- ===========FIN TTITRE SECTION================= -->

            <!-- ===========+++++++++++======================= -->
            <div class="container-section">
                <div class="totalnbr">
                    <article class="nombreUtilisateur">
                        
                    </article>

                    <article class="numberCandidat">
                        
                    </article>

                    <article class="numberCandidatAccepter">
                        
                    </article>

                    <article class="numberAES">
                        
                    </article>

                    <article class="numberDAII">
                
                    </article>
                    <article class="numberRPM">
                        
                    </article>
                </div>
                <div class="statistique">
                    <article>
                        <h4>STAT CANDIDAT</h4>
                    </article>
                    <article>
                        <h4>STAT....</h4>
                    </article>
                </div>
            </div>
            <!-- ==============+++++++======================== -->
            
        </section>
        <!-- =================FIN DE MAIN SECTION=========================== -->
        
    </main>


    <!-- ================== JS ======================= -->
    <script>
        document.querySelector(".header nav ul li .dashboard").classList.add("active");
    </script>
    <script type="module" src=" <?php echo A_JS_FOLDER_default; ?> "></script>
    <script src=" <?php echo A_JS_FOLDER_dashboard; ?> "></script>
    <!-- ================== JS ======================= -->

</body>
</html>