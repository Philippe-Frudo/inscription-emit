import { FormulaireInscription } from "../default/apps.js";

const fileIMG = document.querySelectorAll('input[type="file"]');
const imgImportContaint = document.querySelectorAll('.importIMG');
const importIMGdiv = document.querySelectorAll('.importIMGdiv')
const imgImport = document.querySelectorAll('.importIMG img');
const btnSpan = document.querySelectorAll('.importIMG  span');

//REMOVE ALERT
const removemsgErreurAjout = document.querySelector(".removemsgErreurAjout");
const divAlert = document.querySelector(".divAlert");

// ANNULER L'INSCRIPTION
document.querySelector(".btnReset").addEventListener("click", ()=>{
        document.querySelectorAll("#form-inscription input").forEach(inp =>{
            inp.style.border = "0 solid rgba(0,0,0, 0.5)";
        })
        document.querySelectorAll("#form-inscription select").forEach(inp =>{
            inp.style.border = "0 solid rgba(0,0,0, 0.5)";
        })
})


// ============================INPUT IMAGE===========================
function printImageLabel(src, id, disp, zindex) {
    // console.log(imgImport);
    for(let p in imgImport){
        if(imgImport[p].alt === id){

            imgImport[p].src = src;
            imgImport[p].alt = src;
            imgImport[p].style.display = disp;
            
            btnSpan[p].style.display = disp;
            btnSpan[p].style.zIndex = zindex;      
        }
    }
}

fileIMG.forEach(inpImg => {
    inpImg.addEventListener("change", (e)=>{
        let valueIMG = e.target.value;
        let idInp = e.target.id;
        printImageLabel(valueIMG, idInp, "block", "1");
        
    })
})

btnSpan.forEach(btn => {
    btn.addEventListener("click", (e)=>{
        let valueClass = e.target.nameClass;
        printImageLabel("", valueClass, "none", "-1");
    })
})


// UPPER NOM
function errorInput(val){
    val.style.border = "1px solid red";
}

function succesInput(val){
    val.style.border = "1px solid green";
}

function alertInput(val){
    val.style.border = "1px solid red";
}

function inputNormal(val){
    val.style.border = "1px solid black";
}

document.querySelector('.nom').addEventListener("keyup", (e)=>{ e.target.value = e.target.value.toUpperCase();});

document.querySelector('.prenom').addEventListener("keyup", (e)=>{ e.target.value = e.target.value.charAt(0).toUpperCase() + e.target.value.slice(1).toLowerCase()});

document.querySelector('.email').addEventListener("keyup", (e)=>{ 
    e.target.value = e.target.value.toLowerCase();
    if(!regexEmail(e.target.value.trim())) {
        errorInput(e.target);
    }
    else{
        succesInput(e.target);
    }
});

document.querySelector('.numIncsriptionBacc').addEventListener("keyup", (e)=>{ 
    if(!validNumBacc(e.target.value)) {
        errorInput(e.target);
    }
    else{
        succesInput(e.target);
    }
});

document.querySelector('.tel').addEventListener("keyup", (e)=>{ 
    if(!regexPhone(e.target.value)) {
        errorInput(e.target);
    }
    else{
        succesInput(e.target);
    }
});

function inputsKeyup(k){
    const inps = document.querySelectorAll(k)
    inps.forEach(inp =>{
         inp.addEventListener("keypress", (inp) =>{
            inputNormal(inp);
        })
    })
}
// inputsKeyup("#form-inscription input");
// inputsKeyup("#form-inscription select");

function alertChamps(champs){
    document.querySelectorAll(champs).forEach(inp =>{
        if (inp.nameClass !== 'email' && inp.nameClass !== 'numInscriptionDacc' && inp.nameClass !== 'tel') {
            if(inp.value.trim() == '') {
                errorInput(inp);
            }
            else{
                succesInput(inp);
            }
            
        }
    })
}


/**  */
// const dataSabmits = ()=> {
//     inputsText.forEach(inp =>{
//         console.log(inp.value);
//         inpValue = inp.value;
//         inp.addEventListener("input", ()=>{
//             if (inpValue == "" || inpValue == null) {
//                 inp.style.border = "2px solid red";
//                 return false
//             }
//         })   
//         return true
//     })
// }

// let inpSubmit = document.querySelector('button[type="submit"');
// inpSubmit.addEventListener("submit", ()=>{
//     dataSabmits();
// })


// function invalFormImg(nameVar, index, msg){
//     if (nameVar.src === "" || nameVar.src === undefined) {
//         console.log("ERREUR")
//         msgErreur[index].innerHTML = msg;

//         nameVar.style.border = "2px solid red";
//         msgErreur[index].style.opacity = "1";
//     }
//     else{
//         console.log("OK")
//         msgErreur[index].innerHTML = "";
        
//         nameVar.style.border = "2px solid green";
//         msgErreur[index].style.opacity = "0";
//     }
// }

// ========================   VARIABLE CHAMP  ==========================
// let nameClass = (a) => document.querySelector(a),

// let parcours = nameClass(".parcours"),
//     nom = nameClass(".nom"),
//     centerExam = nameClass(".centerExam"),
//     // prenomInsci = nameClass("prenom"),
//     dateNaissance = nameClass(".dateNaissance"),
//     lieuNaissance = nameClass(".lieuNaissance"),
//     sexe = nameClass(".sexe"),
//     telInsci = nameClass(".tel"),
//     adrsInsci = nameClass(".adresPostal"),
//     numIncsriptionBacc = nameClass(".numIncsriptionBacc"),
//     centreBacc = nameClass(".centreBacc"),
//     serieBacc = nameClass(".serieBacc"),
//     mentionBacc = nameClass(".mentionBacc"),
//     imgFiche = nameClass(".imgFiche"),

//     inscrire = nameClass("button.inscrire"),
//     allimagesInsci = nameClassAll(".importIMG"),
let nameClassAll = (all) => document.querySelectorAll(all);
let msgErreur = nameClassAll("p.msgErrorChamp");


function getParcours(){
    let action = "getParcours";
    const url = `http://localhost/PROJET_JS_L2/CLIENT/controleurs/controlParcours.php`;
    fetch(url, {
        method: "GET"
        // headers: {"Content-Type": "application/json"}
    }).then(res => {
            if (!res.ok) {
                throw new Error("Erreur de serveur");
            }
            return res.json();

    }).then(
        response => {
            // console.log(response)
            let tmpData = "";
            for (let i = 0; i < response.length; i++) {
                tmpData += `<option value=${response[i].lib_parcours}>${response[i].lib_parcours}</option>`; 
            }
            document.querySelector("#parcours").innerHTML = tmpData;

        }).catch(e => {
            console.log("Erreur", { cause: e });
        });
} getParcours();

function getVilles(){
    const url = `http://localhost/PROJET_JS_L2/CLIENT/controleurs/controlVille.php`;
    fetch(url, {
        method: "GET"
        // headers: {"Content-Type": "application/json"}
    }).then(res => {
            if (!res.ok) {
                throw new Error("Erreur de serveur");
            }
            return res.json();

    }).then(
        response => {
            // console.log(response)
            let tmpData = "";
            for (let i = 0; i < response.length; i++) {
                tmpData += `<option value=${response[i].nom_ville}>${response[i].nom_ville}</option>`; 
            }
            document.querySelector("#centerExam").innerHTML = tmpData;

        }).catch(e => {
            console.log("Erreur", { cause: e });
        });
} getVilles();


//=========================CONTROL CHAMP==========================
function invalForm(nameVar, index, msg){
    if (nameVar.value === "" || nameVar.value === undefined) {
        // console.log("ERREUR")
        msgErreur[index].innerHTML = msg;

        nameVar.style.border = "2px solid red";
        msgErreur[index].style.opacity = "1";
    }
    else{
        // console.log("OK")
        msgErreur[index].innerHTML = "";
        
        nameVar.style.border = "2px solid green";
        msgErreur[index].style.opacity = "0";
    }
}

const regexEmail = (email)=>{
    // return /^([a-z\d\-])@([a-z\d-]+)\([a-z]{2,8})(\[a-z]{2,8})?$/.test(email);
    // const regex /^[\w-\.]+@([\w-]+\.)]+[\w-]{2,4}$/.test(email);
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

const regexNumBacc = (num)=>{
    const regex = /^\d{6,7}$/;
    return regex.test(num);
}

const regexPhone = (phone)=>{
    const regex = /^(034|038|032|033)\d{7}$/;
    return regex.test(phone);
}


// let p = prompt("Entrer num ");
// alert(regexNumBacc(p));

//=======================INSERER DE DONNEES INSCRIPTION =====================
function insertData(data) {
    let action = "insertData";
    const formData = new FormData();
    for (const [keyd, valued]of Object.entries(data)) {
        formData.append(keyd, valued);
    }
    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlCandidat.php?action=${encodeURIComponent(action)}`;
    fetch(url, {
        method: 'POST',
        contentType: false,
        processData: false,
        body: formData
    }).then(res =>{
        if (!res.ok) {
            throw new Error("Erreur lors de la requete")
        }

        location.reload();
        return res

    }).then(response => {
        document.getElementById("alert-succes").innerHTML = response.message
        console.log("reponse du serveur", response);
        
    }).catch(e => console.log(e));
}

const inputsContainers = document.querySelector(".form-content").children;
function objectsData(){
    let objectsCand = {};
    for (let i = 0; i < inputsContainers.length; i++) 
    {
        let inptutContenainer =  inputsContainers[i].children;
        let nomClass = inptutContenainer[1].name;
        let valeurchamp = inptutContenainer[1];
        if (inptutContenainer[1].type == "file") {
            
            let fileInput = inptutContenainer[1].files[0];
            objectsCand[nomClass]= fileInput;

        }else{
            objectsCand[nomClass]=valeurchamp.value;
        }
    }
    // console.log(objectsCand)
    return insertData(objectsCand);
}
// =========================ENVOYER DONNER=================

const inpbirth = document.querySelector(".dateNaissance");
const validBirthday = () =>{
    const birthday = inpbirth.value;
    let dateNew = new Date().getFullYear();
    let dbirth = new Date(birthday).getFullYear();
    let year = dateNew - dbirth;
    if (dbirth>dateNew || year < 8) {
        return false
    }else{
        return true
    }
}

const valEmail = document.querySelector(".email");
 const validEmail = () =>{
    return regexEmail(valEmail.value)

}

const valTel = document.querySelector(".tel");
const validPhone = () =>{
    return regexPhone(valTel.value)

}

const valnumBacc = document.querySelector(".numIncsriptionBacc");
const validNumBacc = () =>{
    return regexNumBacc(valnumBacc.value)
}


const validatorInput = ()=>{
    for (let i = 0; i < inputsContainers.length; i++) {

        let inptutContenainer =  inputsContainers[i].children;
        let nomClass = inptutContenainer[1].name;
        let valeurchamp = inptutContenainer[1].value;
        
        if (nomClass == 'prenom') {
            continue;
        }
        else if(valeurchamp == '') 
        {
            return false
        }
    } 
    return true;   
}

const msgInscri = document.querySelector("#msgInscri")
document.querySelector("#form-inscription").addEventListener("submit", (e)=>{
    e.preventDefault();
    // console.log("inpValiv",validator(),'\nbirthday', validBirthday(),'\nEmail', validEmail(),'\nPhone', validPhone(), '\n\n')
    if (validatorInput()){
        if(validEmail()){
            if(validPhone()) {

                if(validBirthday()) {  

                    if(validNumBacc()) {
                        objectsData(); 
                        alertSucces(msgInscri, "Envoyer"); 
                    }else{
                        alertInput(valnumBacc);
                        alertError(msgInscri, "Numero back non valide");
                    }

                }else{
                    alertInput(inpbirth)
                    alertError(msgInscri, "Date de naissance invalide, l'age de personne au plus de 8 ans");
                }

            }else{
                alertInput(valTel)
                alertError(msgInscri, "Numero telephone invalide");
            }

        }else{
            alertInput(valEmail)
            alertError(msgInscri, "Email invalide");
        }

    }else{

        alertChamps("#form-inscription input");
        alertChamps("#form-inscription select");
        alertError(msgInscri, "Remplir le champs vide");
        console.log("Les champs ne doivet pas pas etre vide");
    }
})

//ALERT D'ENVOYE
function alertSucces(el, msg) {
    el.innerHTML = msg;
    el.style.display= "block"
    el.style.background= "rgb(64, 156, 52, 0.7)";
    setTimeout(function () {el.style.display= "none"; el.innerHTML = ""; }, 1000)
    
}

function alertError(el, msg) {
    el.innerHTML = msg;
    el.style.display= "block"
    setTimeout(function () { el.style.display= "none"; el.innerHTML = ""; }, 1000)

}