import { gsap } from 'gsap';
import Flickity from 'flickity';

document.addEventListener("DOMContentLoaded", function() {
    const cursor = document.querySelector(".cursor");
    const projects = document.getElementsByClassName("project");
    const filters = document.getElementsByClassName("filter");
    const links = document.querySelectorAll("a");
    const dropdowns = document.getElementsByClassName("code-dropdown");
    const emails = document.getElementsByClassName("email");
    const buttons = document.querySelectorAll("button");
    const skills = document.getElementsByClassName("skill");
    const iframes = document.querySelectorAll("iframe");
    const flickityElement = document.querySelector(".flickity-viewport");

    gsap.set(".cursor", { xPercent: -50, yPercent: -50 });

    let xTo = gsap.quickTo(".cursor", "x", { duration: 0.1, ease: "power3" });
    let yTo = gsap.quickTo(".cursor", "y", { duration: 0.1, ease: "power3" });

    window.addEventListener("mousemove", e => {
        xTo(e.clientX);
        yTo(e.clientY);
        cursor.style.opacity = "1";
    });

    window.addEventListener("mousedown", function() {
        click.play();
    });

    window.addEventListener("mouseup", function() {
        click.reverse();
    });

    let click = gsap.to(".cursor", {
        paused: true,
        borderWidth: '4px',
        duration: 0.1
    });

    let hover = gsap.to(".cursor", {
        paused: true,
        scale: 0.5,
        duration: 0.1
    });

    // iterate through all elements and apply hover effect
    const addHoverEffect = (elements) => {
        Array.from(elements).forEach(element => {
            element.addEventListener("mouseenter", function() {
                hover.play();
            });
            element.addEventListener("mouseleave", function() {
                hover.reverse();
            });
        });
    };

    // apply hover effect to various elements
    addHoverEffect(projects);
    addHoverEffect(filters);
    addHoverEffect(dropdowns);
    addHoverEffect(emails);
    addHoverEffect(buttons);
    addHoverEffect(links);
    addHoverEffect(skills);

    // special cursor handling for iframes
    iframes.forEach(iframe => {
        iframe.addEventListener("mouseover", function() {
            cursor.style.display = "none";
        });
        iframe.addEventListener("mouseleave", function() {
            cursor.style.display = "block";
        });
    });

});
