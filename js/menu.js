const menu = document.querySelector('.nav-toggle')
const nav = document.querySelector('.nav-wrapper')
const icon = document.querySelector('.menu-icon')

menu.addEventListener('click', () => {
    
    nav.classList.toggle('visible');

    if (nav.classList.contains('visible')) {
        icon.src = '../icons/ui/white-x.svg'
    } else {
        icon.src = '../icons/ui/white-menu.svg'
    }

})