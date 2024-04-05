<?php 

// LIENS FICHIERS
require_once "../../rootFiles/rootFiles.php";

?>

<div class="clickProfile">
    <ul>
        <li>
            <a href="#">
                <img src=" <?php echo A_ICON_FOLDER . "utilisateur.ico" ?> " alt="utilisateur">
                Profile
            </a>
        </li>
        <li>
            <a href="#">
                <img src=" <?php echo A_ICON_FOLDER . "parametre.ico" ?> " alt="parametre">
                Paramètre
            </a>
        </li>
        <li>
            <a id="deconnexion">
                <img src=" <?php echo A_ICON_FOLDER . "deconnexion.ico" ?> " alt="deconnecté">
                deconnexion
            </a>
        </li>
    </ul>
</div>
<script type="module" src=" <?php echo A_JS_FOLDER_default; ?> "></script>