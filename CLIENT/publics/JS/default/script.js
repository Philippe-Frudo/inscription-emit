const btnNav = document.querySelector(".btnNav");
const nav = document.querySelector(".nav");
const nav_a = document.querySelectorAll(".nav a");
// console.log(nav_a);



btnNav.addEventListener("click", function(e) {
    if (e.target.tagName == "IMG") {
        nav.classList.toggle("active-nav");
    }
});

// nav_a.forEach((a) => {
//     a.addEventListener("click", () => {
//         alert()
//         nav.classList.remove("active-nav");
//         a.parentElement.querySelectorAll(".active-a").forEach(node =>{
//             node.classList.remove("active-a");
//         })
//         a.classList.add("active-a");
//         console.log(a);  
//         }) 
//     })



//FOCUS CHAMP INPUT ========================================
const champsInputs = document.querySelectorAll("form input");
// champsInputs.forEach(input =>
// {
//     input.addEventListener("focusout", ()=>
//     {
//         input.style.outline = "none";

//     });
    
//     input.addEventListener("focus", ()=>
//     {
//         if (input.type  == "radio") 
//         {
//             input.style.outline = "none";   
//         }
//         else
//         {
//             input.style.outline = "2px solid blue";   
//         }
//     });
// })

// const inscrire = document.querySelector('button.inscrire');
// console.log(inscrire)
// inscrire.addEventListener("click", ()=>{
//     champsInputs.forEach(input =>
//         {
//             let inp = input.value;
//             if ( inp.trim() == '') {
//                 input[2].style.border = "2px solid red";
//             }
  
//         })
//         return false
// })


   



