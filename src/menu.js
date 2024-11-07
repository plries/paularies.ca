const menu = document.querySelector('.nav-toggle')
const nav = document.querySelector('.nav-wrapper')
const icon = document.querySelector('.menu-icon')

menu.addEventListener('click', () => {

    menu.classList.toggle("open");
    nav.classList.toggle('visible');

})