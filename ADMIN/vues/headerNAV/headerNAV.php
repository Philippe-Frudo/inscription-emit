<?php 
    // LIENS FICHIERS
    require_once "../../rootFiles/rootFiles.php";

    require_once "../../default/variable.php";

?>

    <header class="header">
        <div class="logo">
            <a href="#"><img src=" <?php echo A_IMG_FOLDER . "logoEMIT.jpg" ?> " alt="EMIT">Ecole de Management pour l'Innovation Technique</a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href=" <?php echo A_PHP_FOLDER_dashboard ?> " class="dashboard">
                        <img src=" <?php echo A_ICON_FOLDER . "dashboard.ico" ?> " alt="dashboard">
                        Dashbord
                    </a>  
                </li>
                <li>
                    <a href=" <?php echo A_PHP_FOLDER_candidat ?> " class="demande">
                        <img src=" <?php echo A_ICON_FOLDER . "demand.ico" ?> " alt="demande">
                        demande
                    </a>
                </li>
                <li>
                    <a href=" <?php echo A_PHP_FOLDER_utilisateur ?> " class="utilisateurL">
                        <img src=" <?php echo A_ICON_FOLDER . "utilisateur.ico" ?> " alt="utilisateur">
                        Utilisateur
                    </a>
                </li>
                <li>
                    <a href="#" class="parametre">
                        <img src=" <?php echo A_ICON_FOLDER . "parametre.ico" ?> " alt="parametre">
                        Parametre
                    </a>
                </li>
            </ul>
        </nav>
    </header>

