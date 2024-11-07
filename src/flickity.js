import Flickity from 'flickity';
import { gsap } from 'gsap';

// initialize flickity on the .about-carousel element
const aboutCarousel = document.querySelector('.about-carousel');

const flickity = new Flickity(aboutCarousel, {
    draggable: true,
    contain: true,
    wrapAround: true,
    pageDots: false,
    autoPlay: true,
    setGallerySize: false
});

const cursor = document.querySelector(".cursor");

// updates cursor position during Flickity drag
flickity.on('dragMove', function(event, pointer) {
    gsap.set(cursor, {
        x: pointer.clientX,
        y: pointer.clientY
    });
});

flickity.on('dragEnd', function() {
    // updates cursor position after drag ends
});