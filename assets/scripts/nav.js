// display responsive menu

const burger = document.getElementById('burger');
const inMenu = document.querySelector("nav ul.menu");
const navbarlanding = document.getElementsByClassName('menu-navbar-container')[0]; // cible nav wp list
const menuburger = document.getElementsByClassName('nav__burger')[0];
let i = 0;

burger.addEventListener('click', function() {
    toogleMenu();
    crossMenu();
})
inMenu.addEventListener('click', function() { // si on clique sur le menu
    if (i != 0) {
        toogleMenu();
        crossMenu();
    }
})

function toogleMenu() {
    i++;
    navbarlanding.classList.toggle('menu-navbar-container--show');
    if (i >= 2) {
        navbarlanding.classList.toggle('menu-navbar-container--unshow');
    }
}
function crossMenu() {
    i++;
    menuburger.classList.toggle('nav__burger--cross');
    if (i >= 3) {
        menuburger.classList.toggle('nav__burger--burger');
    }
}

// definition de placeholder search input, par exemple pour ne pas payer le premium du plugin "ivory search"

// document.getElementById('is-search-input-53').setAttribute('placeholder', 'Rechercher');