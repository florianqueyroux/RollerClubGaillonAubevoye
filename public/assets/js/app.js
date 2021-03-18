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
/* CAROUSEL */
function classToggle() {
    var el = document.querySelector('.icon-cards__content');
    el.classList.toggle('step-animation');
}

const toggleAnimation = document.querySelector('#toggle-animation');
if(toggleAnimation){
    toggleAnimation.addEventListener('click', classToggle);
}

/*----------------- CAROUSEL ROLLER --------------------*/
const outer3 = document.getElementById("outer3"); /*Corrige les erreurs sur les autres pages*/
if(outer3){
    outer3.addEventListener("click", toggleState3);
}

function toggleState3() {
    let galleryView = document.getElementById("galleryView")
    let tilesView = document.getElementById("tilesView")
    let outer = document.getElementById("outer3");
    let slider = document.getElementById("slider3");
    let tilesContainer = document.getElementById("tilesContainer");
    if (slider.classList.contains("active")) {
        slider.classList.remove("active");
        outer.classList.remove("outerActive");
        galleryView.style.display = "flex";
        tilesView.style.display = "none";

        while (tilesContainer.hasChildNodes()) {
            tilesContainer.removeChild(tilesContainer.firstChild)
        }
    } else {
        slider.classList.add("active");
        outer.classList.add("outerActive");
        galleryView.style.display = "none";
        tilesView.style.display = "flex";

        for (let i = 0; i < imgObject.length; i++) {
            let tileItem = document.createElement("div");
            tileItem.classList.add("tileItem");
            tileItem.style.background =  "url(" + imgObject[i] + ")";
            tileItem.style.backgroundSize = "contain";
            tileItem.style.backgroundRepeat = "no-repeat";
            tilesContainer.appendChild(tileItem);
        }
    };
}

let imgObject = [
    "/assets/img/equipe/team1.jpg",
    "/assets/img/equipe/team2.jpg",
    "/assets/img/equipe/team3.jpg"

];

let mainImg = 0;
let prevImg = imgObject.length - 1;
let nextImg = 1;

function loadGallery() {

    let mainView = document.getElementById("mainView");
    mainView.style.background = "url(" + imgObject[mainImg] + ")";
    mainView.style.backgroundRepeat = "no-repeat";

    let leftView = document.getElementById("leftView");
    leftView.style.background = "url(" + imgObject[prevImg] + ")";
    leftView.style.backgroundRepeat = "no-repeat";

    let rightView = document.getElementById("rightView");
    rightView.style.background = "url(" + imgObject[nextImg] + ")";
    rightView.style.backgroundRepeat = "no-repeat";

    let linkTag = document.getElementById("linkTag")
    linkTag.href = imgObject[mainImg];

};

function scrollRight() {

    prevImg = mainImg;
    mainImg = nextImg;
    if (nextImg >= (imgObject.length -1)) {
        nextImg = 0;
    } else {
        nextImg++;
    };
    loadGallery();
};

function scrollLeft() {
    nextImg = mainImg
    mainImg = prevImg;

    if (prevImg === 0) {
        prevImg = imgObject.length - 1;
    } else {
        prevImg--;
    };
    loadGallery();
};
if(outer3){
    document.getElementById("navRight").addEventListener("click", scrollRight);
    document.getElementById("navLeft").addEventListener("click", scrollLeft);
    document.getElementById("rightView").addEventListener("click", scrollRight);
    document.getElementById("leftView").addEventListener("click", scrollLeft);
    document.addEventListener('keyup',function(e){
        if (e.keyCode === 37) {
            scrollLeft();
        } else if(e.keyCode === 39) {
            scrollRight();
        }
    });

    loadGallery();
}


