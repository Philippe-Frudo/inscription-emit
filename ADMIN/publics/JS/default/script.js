import { fetchJSON } from "./app.js";
import { createElementE } from "./dom.js"
import { TodoList } from "./TodoList.js";

let utilisateur = document.querySelector(".utilisateur");
let clickProfile = document.querySelector(".clickProfile");
export let allNavClickProfile =  document.querySelectorAll(".clickProfile ul li a");

// let btnRemoveCard = document.querySelector(".btnRemoveCard");
let divVide = document.querySelector(".divVide");



utilisateur.addEventListener("click", ()=>{
    clickProfile.classList.toggle("showNav");
});

allNavClickProfile.forEach(a =>{
    a.addEventListener("click", ()=>{
        clickProfile.classList.remove("showNav")
    })
})


export function styleErrorInput(val){
    val.style.border = "1px solid red";
}


export function styleSuccesInput(val){
    val.style.border = "1px solid green";
}


export function styleAllinputsNormal(k){
    const inps = document.querySelectorAll(k)
    inps.forEach(inp =>{
            inp.style.border = "0 solid black";
    })
}


//ALERT D'ENVOYE
export function alertSucces(el, msg) {
    el.innerHTML = msg;
    el.style.display= "block"
    el.style.background= "rgb(64, 156, 52, 0.7)";
    setTimeout(function () {el.style.display= "none"; el.innerHTML = ""; }, 1000)
    
}

export function alertError(el, msg) {
    el.innerHTML = msg;
    el.style.display= "block"
    setTimeout(function () { el.style.display= "none"; el.innerHTML = ""; }, 1000)
    
}

export function alertInput(val){
    val.style.border = "1px solid red";
}


export function alertChamps(champs){
    document.querySelectorAll(champs).forEach(inp =>{
            if(inp.value.trim() == '') {
                styleErrorInput(inp);
            }
            else{
                styleSuccesInput(inp);
            }
    })
}


//ALERT D'ENVOYE



//REGEX
export const regexEmail = (email)=>{
    // return /^([a-z\d\-])@([a-z\d-]+)\([a-z]{2,8})(\[a-z]{2,8})?$/.test(email);
    // const regex /^[\w-\.]+@([\w-]+\.)]+[\w-]{2,4}$/.test(email);
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}


export const regexPassword = (code)=>{
    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,20}$/;
    return regex.test(code);
}


export const regexPhone = (phone)=>{
    const regex = /^(034|038|032|033)\d{7}$/;
    return regex.test(phone);
}
//REGEX



function inputNormal(val){
    val.style.border = "1px solid black";
}

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


document.querySelector("#deconnexion").addEventListener("click", (e)=>{
    window.location.href = "http://localhost/PROJET_JS_L2/ADMIN/vues/login/index.php";
})





