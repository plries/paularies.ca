var $projects = $('.project-cards').isotope({
    // options
    itemSelector: '.project',
    layoutMode: 'vertical',
    stagger: 90,
    hiddenStyle: {
        opacity: 0
    },
    visibleStyle: {
        opacity: 1
    }
});

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