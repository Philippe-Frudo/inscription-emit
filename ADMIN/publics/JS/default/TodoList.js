import { createElementE } from "./dom.js";

/**
 * @typedef {object} Todo
 */
export class TodoList{
    /** @type {Todo[]} */
    #todos = [];

    /**
     * 
     * @param {Todo[]} todos 
     */
    constructor(todos){
        this.#todos = todos;


    }

    /**@param {HTMLElement} element */
    appendTo(element) {
        element.innerHTML = `
        <thead>
            <tr>
                <th>Numero</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Serie</th>
                <th>mention BACC</th>
                <th>Lieu d'examen</th>
                <th>libelle parcours</th>
                <th>date d'envoyer</th>
                <th>Voir plus</th>
            </tr>
        </thead>
        <tbody class="demandeEnvoyer">

        </tbody> 
        `
        const list = element.querySelector("tbody.demandeEnvoyer");
        for(let todo of this.#todos){
            const t = new TodoListItem(todo);
            t.appendTo(list)
        }
    }


}


class TodoListItem
{
    #element = [];

    constructor(todo){

        const id = `${todo.idC}`;
        const tr = createElementE("tr", { class:"information" });

        for (const [key, value] of Object.entries(todo)) 
        {
            if (key == "nomC" ||key == "prenomC" ||key == "idC" ||key == "telC" ||key == "serieBacc" ||key == "MBacc" ||key == "centreExamC" ||key == "parcoursC" ||key == "dateEC" ||key == "emailC") {
                const td = createElementE("td", { class:key } );
                td.innerHTML = value;
                tr.append(td); 
            }
        }
        

        const tdButton = createElementE("td", {} );
        const button = createElementE("button", { 
            type:"button",
            class: "btnTable detailleCand",
            id: id
        });
        button.innerHTML = "Detaille";
        tdButton.append(button); 
        tr.append(tdButton);

        //Stock dans tableau 
        this.#element = tr;
    }
    
    /**
     * @param {HTMLElement} element
     */
    appendTo(element){
        element.append(this.#element);
    }
}
