let hero = gsap.timeline()

hero.set(".hero-text", {
    visibility: "visible"
});
hero.set(".arrow-down", {
    visibility: "visible"
});
hero.from(".reveal", {
    delay: 0.25,
    opacity: 0,
    y: 140,
    ease: "power4.out",
    duration: 1,
    stagger: {
        amount: 0.5
    }
});
hero.to(".arrow-down", {
    repeat: -1,
    yoyo: true,
    transform: "translateY(16px)",
    ease: "power1.inOut",
    duration: 1.5});

var font = new FontFaceObserver('Rubik', {
    weight: 500
});

fitty('#hero-name');

function redrawFitty() {
    fitty.fitAll();
}

font.load(function () {
    redrawFitty();
});
