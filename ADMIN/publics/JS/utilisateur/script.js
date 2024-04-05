import { alertChamps, alertSucces, alertError, alertInput ,styleAllinputsNormal, styleErrorInput, styleSuccesInput , regexEmail, regexPassword, regexPhone } from "../default/script.js";


const nomClass = (c) => document.querySelector(c);
let cardModifieUtilisateur = nomClass(".cardModifieUtilisateur");
let btnRemoveCardModify = nomClass(".btnRemoveCard");
let btnModifier = nomClass(".btnModifier");
let btnModifierConfirme = nomClass(".btnModifierConfirme");
let btnRemoveCard = nomClass(".btnRemoveCard");
let divVide2 = nomClass(".divVide");
let ajoutUtilisateur = nomClass(".ajoutUtilisateur");
let AjoutU = nomClass(".AjoutU");
let cardU = nomClass(".cardU");
let btnRemovedAddU = nomClass(".btnRemovedAddU");


function remove(b, card){
    b.addEventListener("click", ()=>{
        card.style.top = "-100%";
        divVide2.style.display = "none";

        styleAllinputsNormal("#form-modifierUser input");
        styleAllinputsNormal("#form-modifierUser select");
    })
}
remove(btnRemoveCard, cardModifieUtilisateur);
remove(divVide2, cardModifieUtilisateur);



function removeCardAddUser(b, card){
    b.addEventListener("click", ()=>{
        card.style.top = "-100%";
        divVide2.style.display = "none";

        styleAllinputsNormal("#form-addUser input");
        styleAllinputsNormal("#form-addUser select");
    })
}
removeCardAddUser(btnRemovedAddU, cardU);
removeCardAddUser(divVide2, cardU);



function afficherFenetre(btn, card){
    btn.addEventListener("click", ()=>{
        divVide2.style.display = "block";
        card.style.top = "50%";
    });
}
afficherFenetre(btnModifier, cardModifieUtilisateur)
afficherFenetre(ajoutUtilisateur, cardU)




function keyupNom(nomClass){
    document.querySelector(nomClass).addEventListener("keyup", (e)=>{ e.target.value = e.target.value.toUpperCase();});
} keyupNom('.nomU'); keyupNom('.nomUupd');


function keyupprenom(nomClass){
    document.querySelector(nomClass).addEventListener("keyup", (e)=>{ e.target.value = e.target.value.charAt(0).toUpperCase() + e.target.value.slice(1).toLowerCase()});
} keyupprenom('.prenomU'); keyupprenom('.prenomUupd');


function keyupEmail(nomClass){
    document.querySelector(nomClass).addEventListener("keyup", (e)=>{ 
        e.target.value = e.target.value.toLowerCase();
        if(!regexEmail(e.target.value.trim())) {
            styleErrorInput(e.target);
        }  
        else{
            styleSuccesInput(e.target);
        }
    });
} keyupEmail('.emailU'); keyupEmail('.emailUupd');


function keyupCode(nomClass){
    document.querySelector(nomClass).addEventListener("keyup", (e)=>{ 
        if(!regexPassword(e.target.value)) {
            styleErrorInput(e.target);
        }
        else{
            styleSuccesInput(e.target);
    
        }
    });
} keyupCode('.codeU'); 
// keyupCode('.codeUupd');


function keyupTel(nomClass){
    document.querySelector(nomClass).addEventListener("keyup", (e)=>{ 
        if(!regexPhone(e.target.value)) {
            styleErrorInput(e.target);
        }
        else{
            styleSuccesInput(e.target);
        }
    });
} keyupTel('.telU'); keyupTel('.telUupd');



// ============================= USER ============================


// function getCurrentUser(){
//     let actionU = "getCurrentUser";
//     const urlU = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlUtilisateur.php?actionU=${encodeURIComponent(actionU)}`;
//     fetch(urlU, {
//         method: "POST",
//         contentType: false,
//         processData: false,
//         // headers:{"Content-Type": "application/json"}
//     }).then( res => {
//         // if (res.ok) {
//         //     throw new Error("Erreur lors de la requete")
//         // }
//         console.log(res.json());
//         return res.json();
//     }
//     ).then(
//         response => {
//             console.log(response);
//           return response;
//         }
//     )
//     // .catch(e => console.log(e))
// }getCurrentUser()



export function showUserConnect(data){
    const d = data[0];
    document.querySelector(".profilUConnect").innerHTML = `

        <div class="photo">
            <img src=${d.Photo} alt="PHOTO DE PROFIL" width="50">
        </div>
        <div class="articleDesc">
            <div class="tel">
                <span>Telephone:</span><br>
                <p>${d.Telephone}</p>
            </div>
            
            <div class="adresse">
                <span>adresse:</span><br>
                <p>${d.adresse}</p>
            </div>

            <div class="nom">
                <span>Nom:</span><br>
                <p>${d.Nom}</p>
            </div>

            <div class="prenom">
                <span>prenom:</span><br>
                <p>${d.Prenom}</p>
            </div>
            <div class="email">
                <span>Email:</span><br>
                <p>${d.Email}</p>
            </div>
            
            <div class="sexe">
                <span>Sexe:</span><br>
                <p>${d.Sexe}</p>
            </div>
            
            <div>
                <button id=${d.Numero} class=" btn btnModifier">Modifier</button>
            </div>

        </div>
    `

}

// function getUserConnect(){
//     let actionU = "getUserConnect";
//     const urlU = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlUtilisateur.php?actionU=${encodeURIComponent(actionU)}`;
//     fetch(urlU, {
//         method: "GET",
//     }).then(
//         res => res.json()
//     ).then(
//         response => {
//             console.log(response);
//             showUserConnect(response);
//             // let tmpDataU = "";
//             // response.forEach(c => {
//             //     tmpDataU += "<tr>";
//             //         tmpDataU += `<td><img width="70px" width="50px" src="../${c.photoU}" alt="${c.photoU}"></td>`;
//             //         tmpDataU += "<td>"+c.nomU+"</td>";
//             //         tmpDataU += "<td>"+c.prenomU+"</td>";
//             //         tmpDataU += "<td>"+c.emailU+"</td>";
//             //         tmpDataU += "<td>"+c.sexeU+"</td>";
//             //         tmpDataU += "<td>"+c.telU+"</td>";
//             //         tmpDataU += "<td>"+c.adresseU+"</td>";
//             //         // tmpData += `<td><button type="button" class="btn btnTable" id=${c.idU}>Detaille</button></td>`;
//             //     tmpDataU += "</tr>";
//             // })
//             // document.querySelector(".tabsAutreU").innerHTML = tmpDataU;
//         }
//     )
// } getUserConnect();
 


function getDataU(){
    let actionU = "getsAllDataUser";
    const urlU = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlUtilisateur.php?actionU=${encodeURIComponent(actionU)}`;
    fetch(urlU, {
        method: "GET",
    }).then(
        res => res.json()
    ).then(
        response => {
            // console.log(response);
            let tmpDataU = "";
            response.forEach(c => {
                tmpDataU += "<tr>";
                    tmpDataU += `<td><img src="../${c.photoU}" alt="${c.photoU}"></td>`;
                    tmpDataU += "<td>"+c.nomU+"</td>";
                    tmpDataU += "<td>"+c.prenomU+"</td>";
                    tmpDataU += "<td>"+c.emailU+"</td>";
                    tmpDataU += "<td>"+c.sexeU+"</td>";
                    tmpDataU += "<td>"+c.telU+"</td>";
                    tmpDataU += "<td>"+c.adresseU+"</td>";
                    tmpDataU += `<td><button style="background: rgba(255, 0, 0, 0.7);" type="button" class="deleteUser btn btnTable" id=${c.idU}>Supprimer</button></td>`;
                tmpDataU += "</tr>";
            })
            document.querySelector(".tabsAutreU").innerHTML = tmpDataU;

            document.querySelectorAll(".deleteUser").forEach(btn => {
                btn.addEventListener("click", (e)=>{
                    if (confirm("Confirmez-vous la supression de lutilisateur")) {
                        deleteUser(e.target.id);
                    }
                })
            })
        }
    )
} getDataU();
 
//==============INSERER DE DONNEES UTILISATEUR =========
function addUser(data) {
    let actionU = "addUser";
    const formData = new FormData();
    for (const [keyd, valued]of Object.entries(data)) {
        formData.append(keyd, valued);
    }
    formData.forEach( value => console.log(value) )
    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlUtilisateur.php?actionU=${encodeURIComponent(actionU)}`;
    fetch(url, {
        method: 'POST',
        contentType: false,
        processData: false,
        body: formData
    }).then(response =>{
       
        if (!response.ok) {
            throw new Error("Erreur lors de la requete")
        }

        location.reload()
        return response;
        
    }).then(data => {
        getDataU();
        console.log("reponse du serveur", data);   
    }).catch(e => console.log("Erreur de serveur ",{cause:e}));
}


function deleteUser(p_id) {
    let actionU = "delete";
    const formData = new FormData();
        formData.append("id", p_id);

    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlUtilisateur.php?actionU=${encodeURIComponent(actionU)}`;
    fetch(url, {
        method: 'POST',
        contentType: false,
        processData: false,
        body: formData
    }).then(response =>{
       
        if (!response.ok) {
            throw new Error("Erreur lors de la requete")
        }

        console.log(response)
        return response;
        
    }).then(data => {
        getDataU();
        console.log("reponse du serveur", data);   
    }).catch(e => console.log("Erreur de serveur ",{cause:e}));
}



const inputsContainersUsers = document.querySelector(".content-addUser").children;
function objectDataUser(){
    let objectsUser = {};
    for (let i = 0; i < inputsContainersUsers.length; i++) 
    {
        let inputContainersUser =  inputsContainersUsers[i].children;
        let nomClass = inputContainersUser[1].name;
        let valeurchamp = inputContainersUser[1];
        if (valeurchamp.type == "file") {
            let fileInput = valeurchamp.files[0];
            console.log(fileInput)
            objectsUser[nomClass]= fileInput;
            
        }else{
            objectsUser[nomClass]= valeurchamp.value;
        }
    }
    // console.log(objectsUser)
    return addUser(objectsUser);
}


const valEmail = document.querySelector(".emailU");
const validMailU = ()=>{
    return regexEmail(valEmail.value)
}

const valTel = document.querySelector(".telU");
const validTelU = ()=>{
    return regexPhone(valTel.value)
}

const valCode = document.querySelector(".codeU");
const validCodeU = ()=>{
    return regexPassword(valCode.value);
}

let valCodeCofirm = document.querySelector(".codeUConfirm");
const validConfirmPassword = ()=>{
    if(valCode.value == valCodeCofirm.value){
        return true
    }else{
        return false
    }
}

// const p = prompt();
// alert(regexEmail(p))

function valideUser(){
    for (let i = 0; i < inputsContainersUsers.length; i++) 
    {
        let inptutContenainer =  inputsContainersUsers[i].children;
        let nomClass = inptutContenainer[1];
        let valeurchamp = inptutContenainer[1].value;
        if (nomClass.type == "nomU") {
            continue
        }
        else if (valeurchamp.trim() == "") {
            return false
        }
    }
    return true
}

const msgAddU = document.querySelector("#msgAddU")
document.querySelector("#form-addUser").addEventListener("submit", (e)=>{
    e.preventDefault();
    // valideUser() ; validMailU(); validTelU(); validCodeU() 
    // if (valideUser() && validMailU() && validTelU() && validCodeU() && validConfirmPassword() ) {
        if (valideUser()) {

            if(validMailU()) {
    
                if(validTelU()) {  
    
                    if(validCodeU()) {

                        if(validConfirmPassword()) {
                            objectDataUser();
                            alertSucces(msgAddU, "Ajout utilisateur succes");
                        }else{
                            alertInput(valCodeCofirm);
                            alertError(msgAddU, "Code de confirmation incorect");
                        }

                    }else{
                        alertInput(valCode);
                        alertError(msgAddU, "Code invalide");
                    }
    
                }else{
                    alertInput(valTel)
                    alertError(msgAddU, "Numero telephone invalide");
                }
    
            }else{
                alertInput(valEmail)
                alertError(msgAddU, "Email invalide");
            }
        }
        else{
            // console.log('Il y a de champs vide');
            alertChamps(".form-addUser select");
            alertChamps(".form-addUser input");
            alertError(msgAddU, "remplir les champs vide");
        }
})





//UPDATE DATA
const contentModify = document.querySelector(".content-modify")
const dataImgU = document.querySelector("#imgUupd");
// console.log(contentModify)

function dataUpdateUser(){
    const objectDataMod = {};

    let divInpsUserModify = contentModify.children;

    for (let i = 0; i < divInpsUserModify.length; i++) {
        const inputUserModify = divInpsUserModify[i].children;
        let inputClass = inputUserModify[1].className ; 
        let inputvalue = inputUserModify[1].value;
        objectDataMod[inputClass] = inputvalue;

        // console.log(inputClass, inputvalue)
    }
    objectDataMod[dataImgU.className] = dataImgU.value;

    console.log(objectDataMod);
    // return updateUser(objectDataMod);
}

function isValidUpdate(){
    let divInpsUserModify = contentModify.children;

    for (let i = 0; i < divInpsUserModify.length; i++) {
        const inputUserModify = divInpsUserModify[i].children;
        let inputClass = inputUserModify[1].className ; 
        let inputvalue = inputUserModify[1].value;

        if (inputvalue.trim() == "") {
            if (inputClass == "prenomUupd") {
                continue
            }
            return false;  
        }
    }
    return true;
}



// ACCEPT USER UPDATE
function updateUser(){
    let actionU = "addUser";
    const formData = new FormData();
    for (const [keyd, valued]of Object.entries(data)) {
        formData.append(keyd, valued);
    }
    formData.forEach( value => console.log(value) )
    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlUtilisateur.php?actionU=${encodeURIComponent(actionU)}`;
    fetch(url, {
        method: 'POST',
        contentType: false,
        processData: false,
        body: formData
    }).then(response =>{
       
        if (!response.ok) {
            throw new Error("Erreur lors de la requete")
        }
        return response;
        
    }).then(data => {
        getDataU();
        console.log("reponse du serveur", data); 
    }).catch(e => console.log("Erreur de serveur ",{cause:e}));
}

const btnModify = document.querySelector(".btnModifier").addEventListener("click", ()=>{
    
    alert(btnModifier.id);

});

const msgUupd =document.querySelector("#msgUupd")
document.querySelector(".btnModifierConfirme").addEventListener("click", (e)=>{
    e.preventDefault()

    if (isValidUpdate()) {
        dataUpdateUser();
        alertSucces(msgUupd, "Envoyer");
    }else{
        alertInput("#form-modifierUser input");
        alertInput("#form-modifierUser select");
        alertError(msgUupd, "Verifier les champs");

    }
})






// ================================== USER ===================================

