import FontFaceObserver from 'fontfaceobserver';
import fitty from "fitty";

document.addEventListener("DOMContentLoaded", function () {

    var font = new FontFaceObserver('Rubik', {
        weight: 500,
    });

    fitty('#hero-name');

    function redrawFitty() {
        fitty.fitAll();
    }

    font.load(function () {
        redrawFitty();
    });

});