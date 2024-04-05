export async function fetchJSON(url, options = {}) {
    const headers = {Accept: 'application/json', ...options.headers};
    const r = await fetch(url, {...options, headers});
    if (r.ok) {
        return r.json();
    }
    throw new Error('Erreur de serveur', {cause: r});
}


//AFFICHE DETAILLE CANDIDAT

// try {
//     const url = "http://localhost/PROJET_JS_L2/ADMIN/controleurs/controlCandidat.php";
//     const r = await fetchJSON(url);
//     const list = new TodoList(r);
//     console.log(r);
//     list.appendTo(document.querySelector(".todosAllcandidat"))
    
// } catch (e) {
//     const alertServeur = createElementE("div", {
//         class: "elertServeur",
//         rolo: "alert"
//     });
//     alertServeur.innerHTML = "Impossible de charger les donnes"
//     console.log(alertServeur);
//     document.querySelector("#candidat-demander").prepend(alertServeur);
// }

//====================CRUD===================
//SHOW DETAILS 

//function showDetails() {
//     alert()
    // const details = document.querySelector("#btnDetails")
    // const containerArticle = document.querySelector(".containerArticle");
    // console.log( details)
    // details.forEach(detail => {
    //     console.log(detail)
    //     detail.addEventListener("click", (e)=>{
    //         alert()
    //         e.preventDefault()
    //         console.log(e)
    //     })
    // })
// }



// ============================== CANDIDATAT==========================

