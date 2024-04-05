// //AFFICHE PLUS CANDIDADATS
let divVide = document.querySelector(".divVide");

let containerArticle = document.querySelector('.containerArticle');
const buttonConfirmeLabel = document.querySelectorAll(".buttonConfirme label");
const containerformation = document.querySelector(".container-formation");
const buttonConfirme = document.querySelectorAll(".buttonConfirme");
const btnTable = document.querySelectorAll(".btnTable");




// DEMANDE ACTIVE
const candidatNavs = document.querySelectorAll("div.candidat-nav span");
function activeElement_tab(href){
    const tabs = document.querySelectorAll(".element-tab");
    tabs.forEach(id => {
        let idValue = id.id;
        if (href === idValue) {
            id.parentElement.querySelectorAll(".block").forEach(node => node.classList.remove("block"));
            id.classList.add("block");
            if (idValue == "candidat-accepter") {
            //   function displayNoneAccept(){

            //     }
           }
        }
    })
}

candidatNavs.forEach((el) => {
        el.addEventListener("click", () => { 
    
            let valueHref = el.attributes[0].value;
            activeElement_tab(valueHref);
            el.parentElement.querySelectorAll(".active-a").forEach(node =>{
                node.classList.remove("active-a");
            })
            el.classList.add("active-a");
         
        }) 
})


function removeCard(btn){
    btn.addEventListener("click", ()=>{
        containerArticle.style.top = "-100%";
        divVide.style.display = "none";
    });
}


function blockDetails(){
    containerArticle.style.top = "50%";
    divVide.style.display = "block";
}


// document.addEventListener('DOMContentLoaded', function() {
//     const searchInput = document.getElementById('search-candidat');
//     const cards = document.querySelectorAll('.demandeAccepter tr td');
//     function filterIcons(searchQuery) {
//         console.log(cards);
//         // const nothingfound = document.getElementById("nothing-alert");
//         let number = 0;
//             cards.forEach(function (td) {
//                 const name = td.textContent.toLowerCase();
//                 alert()
//                 console.log(name);

//                 if(name.includes(searchQuery.toLowerCase())){
//                     // nothingfound.style.display = "none";
//                     td.style.display = "block";
//                     number++;
//                 } else{
//                     td.style.display = "none";
//                 }
//             });
//             if(number == 0){
//                 // nothingfound.style.display = "block";
//                 console.log("NOthing");
//             }
//     }
//     searchInput.addEventListener("input", function () {
//         // alert()
//         const searchQuery = searchInput.value.trim();
//         filterIcons(searchQuery);
//     });
//     // console.log("ARMAND");
// });


function removeDetail(nameClass){
    nameClass.addEventListener("click", ()=>{
        containerArticle.style.top = "-150%";
        divVide.style.display = "none";
    })
} removeDetail(divVide);


function getsAllCandidat(data) {
    let tmpData = "";
    // onclick='showDetailCandidat("+c.idC+")'
    data.forEach(c => {
        if (c.statusC == 0) {
                tmpData += "<tr>";
                    tmpData += "<td>"+c.idC+"</td>";
                    tmpData += "<td>"+c.nomC+"</td>";
                    tmpData += "<td>"+c.prenomC+"</td>";
                    tmpData += "<td>"+c.emailC+"</td>";
                    tmpData += "<td>"+c.telC+"</td>";
                    tmpData += "<td>"+c.serieBacc+"</td>";
                    tmpData += "<td>"+c.centreExamC+"</td>";
                    tmpData += "<td>"+c.parcoursC+"</td>";
                    tmpData += "<td>"+c.dateEC+"</td>";
                    tmpData += "<td><button type='button' id="+c.idC+" class='btnDetails btnTable btn' data-details='"+c.idC+"'>Detaille</button></td>";
                tmpData += "</tr>";
        }

            // for (const [key, value] of Object.entries(candidat)) 
            // {
            //     if (key == "nomC" ||key == "prenomC" ||key == "idC" ||key == "telC" ||key == "serieBacc" ||key == "MBacc" ||key == "centreExamC" ||key == "parcoursC" ||key == "dateEC" ||key == "emailC") {
                        
            // } }
    });
    document.querySelector(".demandeEnvoyer").innerHTML = tmpData;

    document.querySelectorAll('.btnDetails').forEach( btn => btn.addEventListener('click', ()=>{
        showDetailCandidat(btn.id);
        blockDetails()

    }));
}

function getsCandidatAccept(data) {
    let tmpData = "";
    data.forEach(c => {
        if (c.statusC == 1) {
                    tmpData += "<tr>";
                        tmpData += "<td>"+c.idC+"</td>";
                        tmpData += "<td>"+c.nomC+"</td>";
                        tmpData += "<td>"+c.prenomC+"</td>";
                        tmpData += "<td>"+c.emailC+"</td>";
                        tmpData += "<td>"+c.telC+"</td>";
                        tmpData += "<td>"+c.serieBacc+"</td>";
                        tmpData += "<td>"+c.centreExamC+"</td>";
                        tmpData += "<td>"+c.parcoursC+"</td>";
                        tmpData += "<td>"+c.dateEC+"</td>";
                        tmpData += "<td><button type='button' id="+c.idC+" class='btnDetails btnTable btn' data-details='"+c.idC+"'>Detaille</button></td>";
                    tmpData += "</tr>";
                }
            })
        document.querySelector(".demandeAccepter").innerHTML = tmpData;
}

function getData(){
    let action = "getsAllData";
    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlCandidat.php?action=${encodeURIComponent(action)}`;
    fetch(url, {
        method: "GET",
    }).then(
        res => res.json()
    ).then(
        response => {
            console.log(response);
            getsCandidatAccept(response);
            getsAllCandidat(response);
        }
    );

} getData();

//============================CANDIDATAT==============================


//===============SHOW DETAIL CANDIDAT===============
function printsDetailId(data, id){
    const d = data[0];
    document.querySelector(".container-formation").innerHTML = `
    <div class="cardRemove">
        <h3>Infotmation Candidat ${id} </h3> 
        <h3 class="btnRemoveCard">X</h3>
    </div>
    <div class="content-candidat">
        <div class="p-formation">
            <p>Lieu d'examen: <span class="lieuExam"> ${d.centreExamC}</span></p>
            <p>parcours: <span class="parcours">${d.parcoursC}</span></p>
            <p>date d'envoyer: <span class="envoyer">${d.dateEC}</span></p>
            <p>nom: <span class="nom">${d.nomC}</span></p>
            <p>prenom: <span class="prenom">${d.prenomC}prenomC</span></p>
            <p>Date de naissance: <span class="dateNaissance">${d.NC}</span></p>
            <p>Lieu de Naissance: <span class="lieuNaissance">${d.LN}</span></p>
            <p>Sexe: <span class="sexe">${d.SC}</span></p>
            <p>Nationalité: <span class="nationalite">${d.nationC}</span></p>
            <p>Situation matrimoniale: <span class="situationMatri">${d.SMC}</span></p>
            <p>Adresse  postale: <span class="adrsPostal">${d.adrsC}</span></p>
            <p>E-mail: <span class="email">${d.emailC}</span></p>
            <p>Telephone: <span class="telephone">${d.telC}</span></p>
            <p>Numéro d'inscription: <span class="num-inscription">${d.numBaccC}</span></p>
            <p>Serie en BACC: <span class="SerieBACC">${d.serieBacc}</span></p> 
        </div>
        <div>
            <p>
                photo: 
                <span class="photo">
                <img src='../${d.photoC}' alt="photo">
                </span>
            </p>
            <p>
                Demande: 
                <span class="demande">
                <img src='../${d.demendeC}' alt="demande">
                </span>
            </p>
            <p>
                fiche: 
                <span class="fiche">
                    <img src='../${d.ficheC}' alt="fiche">
                </span>
            </p>
            <p>
                Diplome BACC ou Releve: 
                <span class="diplome_releve">
                    <img src='../${d.diplomeReleveC}' alt="diplome_releve">
                </span>
            </p>
            <p>
                    Copie de naissance: 
                <span class="copie">
                    <img src='../${d.copieNC}' alt="copie">
                </span>
            </p>
            <p>
                Payement: 
                <span class="payement">
                    <img src='../${d.payerC}' alt="copie">
                </span>
            </p>
        </div>
    </div>
    <article class="buttonConfirme">
        <div>
            <input type="checkbox" name="accepter" id="accepter" hidden>
            <label for="accepter" id=${id} class="acceptCandidat btn">Accepter</label>
        </div>   
    </article>
    
    `
    
    document.querySelector('.btnRemoveCard').addEventListener("click", (e)=>{
        removeDetail(e.target);
    })

    document.querySelector('.acceptCandidat').addEventListener("click", (e)=>{
        acceptCandidat(e.target.id);
    })

    // displayNoneAccept(document.querySelector('.acceptCandidat'))
        

}

function showDetailCandidat(p_id) {
    let action = "detailId";
    const data = new FormData()
    data.append("id", p_id);

    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlCandidat.php?action=${encodeURIComponent(action)}`;
    fetch(url, {
        method: "POST",
        body: data
    }).then( res => {
            if (!res.ok) {  
                throw new Error("Erreur lors de la requete")
            }
            return res.json()
        }
    ).then(
        response => {
            printsDetailId(response, p_id);
        })
}

function acceptCandidat(p_id) {
    let action = "acceptCandidat";
    const url = `http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlCandidat.php?action=${encodeURIComponent(action)}`;
    const data = new FormData();
    data.append("id", p_id);

    fetch(url, {
        method: 'POST',
        body: data
    }).then(res =>{
        if (!res.ok) {
            throw new Error("Erreur lors de la requete");
        }

        location.reload();
        return res.json();
    }).then(response => {
        console.log(response)
    }).catch(e => console.log("Erreur du serveur ou du resultat", {cause:e}))

}
//===============SHOW DETAIL CANDIDAT===============




//SEARCH CANDIDAT(S)
