<?php 
session_start();
if (!$_SESSION == null) {
    
}
    // LIENS FICHIERS
    require_once "../../rootFiles/rootFiles.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTHENTIFICATION</title>
    <link rel="stylesheet" href="<?php echo A_CSS_FOLDER_default ?>">
    <link rel="stylesheet" href="<?php echo A_CSS_FOLDER_login ?>">
</head>
<body>

<!-- FENETRE AJOUTERR UTILISATEUR -->
<article class="authentification">
    <div class="title-Authe"><h3>Authentification</h3> </div>
    <div class="desc">Bienvenue !</div>
    <form class="form-authentification" id="form-authentification" action="#" method="POST" enctype="multipart/form-data">
        <!-- <button  type="reset" class="btnRemoveAutentification">X</button> -->

        <div class="content-authentification">

            <div>
                <input type="email" class="emailConnection" name="emailConnection" placeholder="Email">
                <p class="alertMsg"></p>
            </div>  

            <div>
                <input type="password" class="codeConnexion" name="codeConnexion" placeholder="Mot de passe">
                <p class="alertMsg"></p>
            </div>

            <div>
                <input type="submit"  id="btnSubmitAutent" name="btnSubmitAutent" class="btnSubmitAutent btn" value="Connexion">
                <p id="msgAtentification" style="color: red;"></p>
            </div>

        </div>
    </form>    
</article> 


    <script type="module" src=" <?php echo A_JS_FOLDER_default; ?> "></script>
    <script type="module" src=" <?php echo A_JS_FOLDER_login; ?> "></script>
</body>
</html>