import { gsap } from 'gsap';

let arrow = gsap.timeline()

arrow.set(".arrow-down", {
    visibility: "visible"
});
arrow.from(".reveal", {
    delay: 0.25,
    opacity: 0,
    y: -140,
    ease: "power4.out",
    duration: 1,
    stagger: {
        amount: 0.5
    }
});
arrow.to(".arrow-down", {
    repeat: -1,
    yoyo: true,
    transform: "translateY(-16px)",
    ease: "power1.inOut",
    duration: 1.5});