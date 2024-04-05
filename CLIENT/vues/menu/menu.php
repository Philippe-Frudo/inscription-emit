 <?php 
    // IMPORTER CHEMIN DOSSIER
    include_once "../../rootFiles/rootFiles.php";  
?>
 
 <!--===================== DEBUT HEADER NAV ==================-->
 <header class="header">
        <div class="logo">
           <a href="#">
            <img src=" <?php echo IMG_FOLDER . "logoEMIT.jpg" ?> " alt="EMIT">
           </a>
        </div>
        <nav class="nav">
            <a href="<?php echo PHP_FOLDER_inscription ?>" class="inscription">inscription</a>
            <a href="<?php echo PHP_FOLDER_resultat ?>" class="resultat">resultat</a>
            <a href="<?php echo PHP_FOLDER_contact ?>" class="contact">contact</a>
        </nav>
        <div class="btnNav">
            <img src=" <?php echo ICON_FOLDER . "menuBar.ico"; ?>" alt="BOUTTON MENU">
        </div>
    </header>
    <!--====================== FIN HEADER NAV ========================-->
