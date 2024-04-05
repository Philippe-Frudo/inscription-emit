// import {showUserConnect} from "../utilisateur/script.js";

const contentAuthentification = document.querySelector(".content-authentification");
// const emailConnection = document.querySelector(".emailConnection");
// const codeConnexion = document.querySelector(".codeConnexion");


function erreur(msg){
    document.querySelector("#msgAtentification").innerHTML = msg;
                setTimeout(function (){
                    document.querySelector("#msgAtentification").innerHTML = "";
                }, 3000);

}




function dataAuthentification(){
    const dataA = {};
    const contentsInputs = contentAuthentification.children
    // console.log(contentsInputs);
    for (let i = 0; i < contentsInputs.length; i++) {
        const contentInput = contentsInputs[i].children;
        const inpValue = contentInput[0].value;
        const inpName = contentInput[0].name;
         dataA[inpName] = inpValue;
    }

    // console.log(dataA);
    return fetchJSONdataA(dataA);
}


 function fetchJSONdataA(dataA){
    const action = "connexionA";
    const formData = new FormData();
    for (const [keyd, valued]of Object.entries(dataA)) {
        formData.append(keyd, valued);
    }
    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlUtilisateur.php?actionU=${encodeURIComponent(action)}`
    fetch(url, {
        method: 'POST',
        contentType: false,
        processData: false,
        body: formData            
    
    }).then(res =>{
        if (!res.ok) {
            throw new Error("Erreur lors de la requete")
        }

        // console.log(res);
        return res.json();
    }).then(response =>{
        // console.log(response);
        const lenResponse = response.length;
        if (lenResponse > 0 ) {
            console.log("Connecter");
            window.location.href = "http://localhost/PROJET_JS_L2/ADMIN/vues/dashboard/"
            // showUserConnect(response);
            
            
        }else{
            erreur("Erreur lors de l'identification");
        }
    });

}


function validInputs(){
    const contentsInputs = contentAuthentification.children
    // console.log(contentsInputs);
    for (let i = 0; i < contentsInputs.length; i++) {
        const contentInput = contentsInputs[i].children;
        const inpValue = contentInput[0].value;
        if (inpValue.trim() == '') {
            return false;
        }
        return true; 
    }
}


document.querySelector(".form-authentification").addEventListener("submit", (e)=>{
    e.preventDefault()
    if (validInputs()) {
        dataAuthentification();
        console.log("valide");
    }
    else{
        erreur("Remplir les champs vide");
        console.log("invalide");

    }
})
