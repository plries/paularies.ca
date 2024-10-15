let icons = gsap.timeline({
    scrollTrigger: {
        trigger: ".footer-content",
        start: "bottom bottom",
        end: "+=440",
        scrub: 1,   
    }
});

icons
.to(".footer-icons", {
    delay: 5,
    duration: 10,
    transform: "translateY(-128px)",
    ease: "none"
})

let rotation = gsap.timeline({
    repeat: -1
});

rotation.to(".footer-icon", {rotation: "360deg", ease: "none", duration: 30});

let target = gsap.timeline({
    repeat: -1,
});

target.to("#target", {
    transform: "translateY(16px)",
    ease: "bounce",
    duration: 2});
target.to("#target", {
    transform: "translateY(-24px)",
    duration: 2});