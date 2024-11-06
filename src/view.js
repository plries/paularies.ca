import Isotope from 'isotope-layout';
import imagesLoaded from 'imagesloaded';

const viewToggle = document.querySelector('.view-toggle');
const view = document.querySelector('.project-cards');

viewToggle.addEventListener("click", () => {
    // reload isotope items and layout
    imagesLoaded(view, function() {
        isotopeInstance.layout();
    });

    // toggle between grid and list views
    view.classList.toggle('grid');
    view.classList.toggle('list');
    
    // reload Isotope items
    isotopeInstance.reloadItems();
    isotopeInstance.layout();

    // toggle the list icon class on the button
    viewToggle.classList.toggle('list-icon');
});