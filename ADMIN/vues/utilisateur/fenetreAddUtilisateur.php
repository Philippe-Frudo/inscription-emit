<?php
    //IMPORT CLASS DATABASE
    require_once "../../rootFiles/rootFiles.php";
?>

<!-- FENETRE AJOUTERR UTILISATEUR -->
        <article class="cardU">
                <h3>Ajouter Utilisateur</h3>   
                <form class="form-addUser" id="form-addUser" action="#" method="POST" enctype="multipart/form-data">
                <button  type="reset" class="btnRemovedAddU">X</button>
                <div class="content-addUser">
                        <div>
                            <span>Nom:</span>
                            <input type="text" class="nomU" name="nomU" placeholder="Entrer votre nom">
                            <p class="alertMsg"></p>
                        </div>
                         
                        <div>
                            <span>Prenom:</span>
                            <input type="text" class="prenomU" name="prenomU" placeholder="Entrer votre prenom">
                            <p class="alertMsg"></p>
                        </div>
                        
                        <div class="sexe">
                            <span>Sexe:</span>
                            <select name="sexeU" id="sexeU">
                                <option type="radio" name="sexeU" value="F" checked>Feminin</option>
                                <option type="radio" name="sexeU" value="M">Masculin</option>
                                <option type="radio" name="sexeU" value="Autre">Autre</option>
                            </select>
                            <p class="alertMsg"></p>
                        </div>
                        
                        <div class="adresPostal">
                            <span>Adresse:</span>
                            <input type="text" name="adresseU" class="adresseU" placeholder="Adresse...">
                            <p class="alertMsg"></p>
                        </div>
                        
                        <div class="tel">
                            <span>Téléphone:</span>
                            <input type="text" name="telU" class="telU" max="12" min="10" placeholder="Telephone">
                            <p style="color: rgba(0,0,0,0.7); margin-top: 0px; font-size:0.8rem;">032 ou 034 ou 038 ou 033</p>
                            <p class="alertMsg"></p>
                        </div>
                        
                        <div class="email">
                            <span>E-mail:</span>
                            <input type="email" class="emailU" name="emailU" placeholder="exemple@gmail.com...">
                            <p class="alertMsg"></p>
                        </div>
                        
                        <div class="code">
                            <span>Code:</span>
                            <input type="password" class="codeU" name="codeU" placeholder="Maj, Min, Chiffe [8-20]">
                            <p style="color: rgba(0,0,0,0.7); margin-top: 0px; font-size:0.8rem;">Obligatoire compose de Maj/Min/Chiffe</p>
                            <p class="alertMsg"></p>
                        </div>

                        <div class="code">
                            <span>Confirme le code:</span>
                            <input type="password" class="codeUConfirm" name="codeUConfirm" placeholder="Maj, Min, Chiffe [8-20]">
                            <p class="alertMsg"></p>
                        </div>

                        <div class="imgU">
                            <span>Photo d`identité:</span>
                            <input type="file" id="imgU" name="imgU" placeholder="Photo" hidden>
                            <label for="imgU" class="importIMG">
                                <span class="imgU">X</span>
                                <img width="100px" src="" alt="PHOTO">
                            </label> 
                            <p class="alertMsg"></p>
                        </div>                   
                    </div>
                    <div class="btnAjoutU">
                        <input type="submit" name="AjoutU" class="AjoutU btn" id="AjoutU">
                    </div>
                    <div id="msgAddU"></div>
                </form>    
                
            </article> 

    
            