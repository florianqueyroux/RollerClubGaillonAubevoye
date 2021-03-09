/* ANIMATION DU MENU BURGER*/
const burger = document.getElementById("burger");
if(burger){ // si burger existe
    burger.addEventListener("click",function (e){ // Ajouter un evenement click bouton burger
        const menu = document.querySelector("#navBar .menu"); // Cible le menu
        if(menu.classList.contains("active")){ // Si, il y a ou pas l'active
            menu.classList.remove("active"); // supprime class active au click
        } else {
            menu.classList.add("active") //ajout class active au click
        }
    });
}