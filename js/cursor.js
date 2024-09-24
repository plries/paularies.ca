$(document).ready(function(){ 

    gsap.set(".cursor", {xPercent: -50, yPercent: -50});

    let xTo = gsap.quickTo(".cursor", "x", {duration: 0.1, ease: "power3"});
    let yTo = gsap.quickTo(".cursor", "y", {duration: 0.1, ease: "power3"});

    let cursor = document.querySelector(".cursor");
    let projects = document.getElementsByClassName("project");
    let filters = document.getElementsByClassName("filter");
    let links = document.querySelectorAll("a");
    let dropdowns = document.getElementsByClassName("code-dropdown");
    let emails = document.getElementsByClassName("email");
    let buttons = document.querySelectorAll("button");
    let skills = document.getElementsByClassName("skill");
    let iframes = document.querySelectorAll("iframe");
    let flickity = document.querySelector(".flickity-viewport");

    window.addEventListener("mousemove", e => {
        xTo(e.clientX);
        yTo(e.clientY);
        cursor.style.opacity = "1";
    });

    window.addEventListener("mousedown", function() {
        click.play()
    });

    window.addEventListener("mouseup", function() {
        click.reverse()
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

    // iterates through all projects
    for (let i = 0; i < projects.length; i++) {
        projects[i].addEventListener("mouseenter", function() {
            hover.play();
        });
        projects[i].addEventListener("mouseleave", function() {
            hover.reverse();
        });
    }

    for (let i = 0; i < filters.length; i++) {
        filters[i].addEventListener("mouseenter", function() {
            hover.play();
        });
        filters[i].addEventListener("mouseleave", function() {
            hover.reverse();
        });
    }

    for (let i = 0; i < dropdowns.length; i++) {
        dropdowns[i].addEventListener("mouseenter", function() {
            hover.play();
        });
        dropdowns[i].addEventListener("mouseleave", function() {
            hover.reverse();
        });
    }

    for (let i = 0; i < emails.length; i++) {
        emails[i].addEventListener("mouseenter", function() {
            hover.play();
        });
        emails[i].addEventListener("mouseleave", function() {
            hover.reverse();
        });
    }

    for (let i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("mouseenter", function() {
            hover.play();
        });
        buttons[i].addEventListener("mouseleave", function() {
            hover.reverse();
        });
    }

    links.forEach(link => {
        link.addEventListener("mouseenter", function() {
            hover.play();
        });
        link.addEventListener("mouseleave", function() {
            hover.reverse();
        });
    });

    for (let i = 0; i < skills.length; i++) {
        skills[i].addEventListener("mouseenter", function() {
            hover.play();
        });
        skills[i].addEventListener("mouseleave", function() {
            hover.reverse();
        });
    }
    
    iframes.forEach(iframe => {
        iframe.addEventListener("mouseover", function() {
            cursor.style.display = "none";
        });
        iframe.addEventListener("mouseleave", function() {
            cursor.style.display = "block";
        });
    });

    flickity.addEventListener("mouseenter", function() {
        hover.play();
    });
    flickity.addEventListener("mouseleave", function() {
        hover.reverse();
    });


})