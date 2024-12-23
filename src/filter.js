import Isotope from 'isotope-layout';
import imagesLoaded from 'imagesloaded';

// initialize isotope
const projects = document.querySelector('.project-cards');
var isotopeInstance = new Isotope(projects, {
    itemSelector: '.project',
    transitionDuration: 300,
    stagger: 30,
    masonry: {
        gutter: 16
    },
    hiddenStyle: {
        opacity: 0,
    },
    visibleStyle: {
        opacity: 1,
    }
});

// trigger isotope layout after images are loaded
imagesLoaded(projects, function () {
    isotopeInstance.layout();
});

// event listener for filter buttons
const filterButtons = document.querySelectorAll('.filter-button-group button');
filterButtons.forEach(button => {
    button.addEventListener('click', function () {
        const filterValue = this.getAttribute('data-filter');
        isotopeInstance.arrange({ filter: filterValue });
    });
});

// handle button active state
const btns = document.querySelectorAll('.filter');

function colorBtn() {
    btns.forEach(el => {
        if (el !== this) {
            el.classList.remove('active');
        }
    });
    this.classList.add('active');
}

btns.forEach(faq => faq.addEventListener('click', colorBtn));

const viewToggle = document.querySelector('.view-toggle');
const view = document.querySelector('.project-cards');

viewToggle.addEventListener("click", () => {
    // toggle between grid and list views
    view.classList.toggle('grid');
    view.classList.toggle('list');

    // reload isotope items
    setTimeout(() => {
        isotopeInstance.reloadItems();
        isotopeInstance.arrange();
    }, 10);

    imagesLoaded(view, function () {
        isotopeInstance.layout();
        projects.style.visibility = 'visible';
    });

    // toggle the list icon class on the button
    viewToggle.classList.toggle('list-icon');
});