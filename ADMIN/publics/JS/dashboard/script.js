

//===================================== DASBOARD =================================

//==============NOMBRE TOUS CANDIDAT==================
function getsNumberCandidat(){
    let action = "compteCandidat";
    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlCandidat.php?action=${encodeURIComponent(action)}`
    fetch(url, {
        method:'GET'
    }).then(res=>{
        if (!res.ok) {
            throw new Error("Erreur lors de la requete")
        }

        return res.json();
    }).then(response =>{
        numberCandidat(response)

    }).catch((e)=> console.log("Erreur de serveur ou de resultat", {cause:e}))
}
getsNumberCandidat();

function numberCandidat(data){
    document.querySelector(".numberCandidat").innerHTML =`
        <div>
        <h3>TOTAL CANDIDATS</h3>
        </div>
        <div>
            <p>${data[0].numberC}</p>
        </div>
    `
}
//==============NOMBRE TOUS CANDIDAT==================




//==============NOMBRE CANDIDAT ACCEPTER==============
function getsNumberCandidatAccept(){
    let action = "getNumberCandidatAccepter";
    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlCandidat.php?action=${encodeURIComponent(action)}`
    fetch(url, {
        method:'GET'
    }).then(res=>{
        if (!res.ok) {
            throw new Error("Erreur lors de la requete")
        }

        return res.json();
    }).then(response =>{
        console.log(response);
        numberCandidatAccept(response)

    })
    // .catch((e)=> console.log("Erreur de serveur ou de resultat", {cause:e}))
}
getsNumberCandidatAccept();

function numberCandidatAccept(data){
    document.querySelector(".numberCandidatAccepter").innerHTML =`
        <div>
        <h3>TOTAL CANDIDATS ACCEPTER</h3>
        </div>
        <div>
            <p>${data[0].numberC_Accept}</p>
        </div>
    `
}
//==============NOMBRE CANDIDAT ACCEPTER==============




//==============NOMBRE CANDIDAT AES ==================
function getsNumberCandidatAES(){
    let action = "compteCandidatAES";
    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlCandidat.php?action=${encodeURIComponent(action)}`
    fetch(url, {
        method:'GET'
    }).then(res=>{
        if (!res.ok) {
            throw new Error("Erreur lors de la requete")
        }

        return res.json();
    }).then(response =>{
        numberCandidatAES(response)

    }).catch((e)=> console.log("Erreur de serveur ou de resultat", {cause:e}))
}
getsNumberCandidatAES();

function numberCandidatAES(data){
    document.querySelector(".numberAES").innerHTML =`
        <div>
        <h3>TOTAL AES</h3>
        </div>
        <div>
            <p>${data[0].numberC_AES}</p>
        </div>
    `
}
//==============NOMBRE CANDIDAT AES ==================




//==============NOMBRE CANDIDAT DAII==================
function getsNumberCandidatDAII(){
    // alert()
    let action = "compteCandidatDAII";
    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlCandidat.php?action=${encodeURIComponent(action)}`
    fetch(url, {
        method:'GET'
    }).then(res=>{
        if (!res.ok) {
            throw new Error("Erreur lors de la requete")
        }
        return res.json();
    }).then(response =>{
        numberCandidatDAII(response)

    }).catch((e)=> console.log("Erreur de serveur ou de resultat", {cause:e}))
}
getsNumberCandidatDAII();

function numberCandidatDAII(data){
    document.querySelector(".numberDAII").innerHTML =`
        <div>
        <h3>TOTAL DAII</h3>
        </div>
        <div>
            <p>${data[0].numberC_DAII}</p>
        </div>
    `
}
//==============NOMBRE CANDIDAT DAII==================





//==============NOMBRE CANDIDAT DAII==================
function getsNumberCandidatRPM(){
    // alert()
    let action = "compteCandidatRPM";
    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlCandidat.php?action=${encodeURIComponent(action)}`
    fetch(url, {
        method:'GET'
    }).then(res=>{
        if (!res.ok) {
            throw new Error("Erreur lors de la requete")
        }
        return res.json();
    }).then(response =>{
        numberCandidatRPM(response)

    }).catch((e)=> console.log("Erreur de serveur ou de resultat", {cause:e}))
}
getsNumberCandidatRPM();

function numberCandidatRPM(data){
    document.querySelector(".numberRPM").innerHTML =`
        <div>
        <h3>TOTAL RPM</h3>
        </div>
        <div>
            <p>${data[0].numberC_RPM}</p>
        </div>
    `
}
//==============NOMBRE CANDIDAT DAII==================




//==============NOMBRE  USER==================
function getsNumberUSER(){
    let action = "compteUSER";
    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlUtilisateur.php?actionU=${encodeURIComponent(action)}`
    fetch(url, {
        method:'GET',
    }).then(res=>{
        if (!res.ok) {
            throw new Error("Erreur lors de la requete")
        }
        return res.json()
    }).then(response =>{
        numberUSER(response);

    }).catch((e)=> console.log("Erreur de serveur ou de resultat", {cause:e}))
}
getsNumberUSER();
function numberUSER(data){
    document.querySelector(".nombreUtilisateur").innerHTML =`
        <div>
        <h3>TOTAL Utilisateur</h3>
        </div>
        <div>
            <p>${data[0].numberU}</p>
        </div>
    `
}

//==============NOMBRE USER==================




