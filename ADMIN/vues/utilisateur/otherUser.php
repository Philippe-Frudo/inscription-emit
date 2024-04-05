<?php
    include_once "../../rootFiles/rootFiles.php";
?>

<?php 
                $afficheTousU = $afficher->showUser();
                    if ($afficheTousU) {
                        if ($row = mysqli_fetch_assoc($afficheTousU)) { 
                            ?>
                            <a href="./fenetreModUtilisateur.php?idU='<?= base64_encode($row['idU']) ?>'" class=" btn btnModifierConfirme btnModifier">Modifier</a>
                <?php }} ?>
