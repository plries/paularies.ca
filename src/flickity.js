
import Flickity from 'flickity';

// initialize Flickity on the .about-carousel element
const aboutCarousel = document.querySelector('.about-carousel');

const flickityInstance = new Flickity(aboutCarousel, {
    contain: true,
    wrapAround: true,
    pageDots: false,
    autoPlay: true,
    setGallerySize: false
});