<?php 
    // IMPORTER CHEMIN DOSSIER
    include_once "../../rootFiles/rootFiles.php";   
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTAT</title>

    <!-- ================= LINK CSS ================= -->
    <link rel="stylesheet" href=" <?php echo CSS_FOLDER_default  ?> ">
    <link rel="stylesheet" href=" <?php echo CSS_FOLDER_resultat  ?> ">
    <!-- ================= LINK CSS ================= -->

    <!-- <style>
        input:focus{
            border: 1px solid rgb(0, 0, blue);
        }
    </style> -->

</head>
<body>

    <!-- NAVBARRE -->
    <?php require_once "../menu/menu.php" ?>
    <!-- NAVBARRE -->
    
    <main class="padding">

         <!-- ============================ DEBUT SECTION ===========================-->
        <section class="container">
           <div class="containt-chercher">
                <div class="title">
                    <h1>Resultat</h1>
                </div>
                <div>
                    <form action="#">
                        <div class="parcours">
                            <select name="parcours">
                                <option value="DAII">DAII</option>
                                <option value="RPM">RPM</option>
                                <option value="AES">AES</option>
                            </select>
                        </div>
                        <input type="text" class="chercher" placeholder="Chercher nom ou prenom">
                    </form>
                </div>
           </div>
           <div class="containt-resultat">
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Mention</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Frudo</td>
                            <td>Philippe</td>
                            <td>DAII</td>
                        </tr>
                        <tr>
                            <td>Frudo</td>
                            <td>Philippe</td>
                            <td>DAII</td>
                        </tr>
                    </tbody>
                </table>
           </div>

        </section>
        <!-- ============================ FIN SECTION ===========================-->

    </main>



    <!-- FOOTER -->
    <?php require_once "../footer/footer.php" ?>
    <!-- FOOTER -->

    <!-- ============= DEBUT DU SCRIPT JS ====================== -->
    <script>
        document.querySelector(".resultat").classList.add("active-a");
    </script>
    <script src=" <?php echo JS_FOLDER_default  ?> " type="text/javascript"></script>
    <script src=" <?php echo JS_FOLDER_resultat  ?> " type="text/javascript"></script> 
     <!-- ==================== FIN DU SCRIPT JS ===================== -->
     
</body>
</html>