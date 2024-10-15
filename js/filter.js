var $projects = $('.project-cards').isotope({
    itemSelector: '.project',
    transitionDuration: 0,
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

$projects.imagesLoaded().progress( function() {
    $projects.isotope('layout');
})

$('.filter-button-group').on('click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $projects.isotope({ filter: filterValue });
    });

const btns = document.querySelectorAll('.filter')

function colorBtn() {
    
    btns.forEach(el => {
        if (el !== this) {
            el.classList.remove('active');
        }
    })

    this.classList.add('active');

}

btns.forEach(faq => faq.addEventListener('click', colorBtn));