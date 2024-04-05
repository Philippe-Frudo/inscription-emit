<?php
    // LIENS FICHIERS
    require_once "../../rootFiles/rootFiles.php";
?>
<div class="divVide"></div>
                <article class="cardModifieUtilisateur">
                    <form action="#" id="form-modifierUser" class="cardModifieUtilisateur-desc">
                        <div class="card-rm">
                            <button style="outline: none;" type="reset" class="btnRemoveCard">X</button>
                        </div>
                        <!-- <div class="photo">
                            <input type="file" value="<?php //echo A_ICON_FOLDER . "user_50px.png" ?>">
                                <img src="" alt="PHOTO DE PROFIL" width="50">
                        </div> -->
                        <div class="imgU">
                            <span>Photo d`identité:</span>
                            <input type="file" id="imgUupd" class="imgUupd" name="imgUupd" value="<?php echo IMG_FOLDER_User . "user_50px.png" ?>" placeholder="Photo" hidden>
                            <label for="imgUupd" class="importIMGOK">
                                <img width="100px" src="" alt="PHOTO">
                            </label> 
                        </div>  
                        <div class="content-modify">
                                <div class="nom">
                                    <span>Nom:</span>
                                    <input class="nomUupd" type="text" placeholder="Prenom">
                                </div>
                                <div class="prenom">
                                    <span>prenom:</span>
                                    <input class="prenomUupd" type="text" placeholder="Prenom">
                                </div>
                                <div class="email">
                                    <span>Email:</span>
                                    <input class="emailUupd" type="email" placeholder="exemple@gmail.com...">
                                </div>
                                <div class="sexe">
                                    <span>Sexe:</span>
                                        <select class="sexeUupd" name="sexeUupd" id="sexeUupd">
                                            <option value="F" checked>Feminin</option>
                                            <option value="M">Masculin</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    <!-- <input class="sexeUupd" type="text" > -->
                                </div>
                                <div class="adresse">
                                    <span>adresse:</span>
                                    <input class="adresseUupd" type="text" placeholder="Adresse...">
                                </div>
                                <div class="tel">
                                    <span>Telephone:</span>
                                    <input class="telUupd" type="text" placeholder="Telephone">
                                    <p style="color: rgba(0,0,0,0.7); margin-top: 1px; font-size:0.8rem;">032 ou 034 ou 038 ou 033</p>
                                </div> 
                                
                            </div>
                            <div class="submitMod">
                                <button type="submit" id="" class=" btn btnModifierConfirme">confirme</button>
                            </div>
                            <div id="msgUupd"></div>
                        </div>
                    </form>
                </article>

