<?php 
    // IMPORTER CHEMIN DOSSIER
    include_once "../../rootFiles/rootFiles.php";  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>

    <!-- ================= LINK CSS ================= -->
    <link rel="stylesheet" href=" <?php echo CSS_FOLDER_default  ?> ">
    <link rel="stylesheet" href=" <?php echo CSS_FOLDER_contact  ?> ">

    <!-- ================= LINK CSS ================= -->

</head>
<body>
    <!-- NAVBARRE -->
    <?php require_once "../menu/menu.php" ?>
    <!-- NAVBARRE -->
    

    <main class="padding">

         <!-- ============================ DEBUT SECTION ===========================-->
        <section class="container">

            <!-- ================DEBUT CONTACT===================== -->
            <div class="contact-containt">
                <div class="description">
                    <div class="h-title">
                        <h1>Contact</h1>
                        <p>Nous pouvons toujours vous aider</p>
                    </div>
                    <div>
                        <form action="#" method="POST">
                            <input type="text" name="nomeContact"placeholder="Nom">
                            <input type="email" name="emailContact"placeholder="E-mail" required>
                            <input type="text" name="telContact"placeholder="Telephone" required>
                            <textarea name="msg" id="msg" placeholder="Entrer votre message...." rows="6" required></textarea>
                            <input type="submit" class="btn" value="Envoyer">
                        </form>
                    </div>
                    <div>
                        <p>directeuremit@gmail.com</p>
                        <p>Telephone 038 69 226 67</p>
                    </div>
                </div>

                <div class="cartLocalisation">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14852.482003199038!2d47.1099472!3d-21.463788!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21e7bf3a518ca787%3A0x60d947c35b7c1085!2sEMIT%20(Ecole%20de%20Management%20et%20d&#39;Innovation%20Technologique)!5e0!3m2!1sfr!2smg!4v1709409668517!5m2!1sfr!2smg" style="border:0;" allowfullscreen=""></iframe>
                    <!-- <iframe src="../../HTML/resultat/index.html" frameborder="0"></iframe> -->
                </div>
           </div>
            <!-- ================FIN CONTACT===================== -->

        </section>
        <!-- ============================ FIN SECTION ===========================-->

    </main>



    <!-- FOOTER -->
    <?php require_once "../footer/footer.php" ?>
    <!-- FOOTER -->


    <!-- ============= DEBUT DU SCRIPT JS ====================== -->
    <script>
        document.querySelector(".contact").classList.add("active-a");
    </script>
    <script src="<?php echo JS_FOLDER_default ?>" type="text/javascript"></script>
    <script src="<?php echo JS_FOLDER_contact ?>" type="text/javascript"></script>
     <!-- ==================== FIN DU SCRIPT JS ===================== -->
     
</body>
</html>