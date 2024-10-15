const viewToggle = document.querySelector('.view-toggle');
const view = document.querySelector('.project-cards');

viewToggle.addEventListener("click", () => {

    $projects.imagesLoaded().progress( function() {
        $projects.isotope('layout');
    })

    view.classList.toggle('grid')
    view.classList.toggle('list')
    $projects.isotope( 'reloadItems' ).isotope();
    viewToggle.classList.toggle('list-icon')

})