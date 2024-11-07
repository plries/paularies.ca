<!DOCTYPE html>
<html lang="en" class="lenis">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paul aries - about</title>
    <link rel="stylesheet" href="./style.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Rubik:ital,wght@0,300..900;1,300..900&family=Wix+Madefor+Display:wght@400..800&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="./about">
    <link rel="icon" href="./icons/ui/logo-big.svg">
    <link rel="apple-touch-icon" href="../media/apple-touch-icon.png">
    <!-- HTML Meta Tags -->
    <meta name="description"
        content="learn more about paul aries: a passionate, user-centered front-end developer and ux/ui designer.">
    <meta name="author" content="Paul Aries">
    <meta name="keywords"
        content="Paul Aries, front-end developer, UX/UI designer, portfolio, web development, user experience, user interface design, about, about Paul Aries, who is Paul Aries">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.paularies.ca/about">
    <meta property="og:type" content="website">
    <meta property="og:title" content="paul aries - about">
    <meta property="og:description"
        content="learn more about paul aries: a passionate, user-centered front-end developer and ux/ui designer.">
    <meta property="og:image" content="https://www.paularies.ca/media/paul-1.jpg">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="paularies.ca">
    <meta property="twitter:url" content="https://www.paularies.ca/about">
    <meta name="twitter:title" content="paul aries - about">
    <meta name="twitter:description"
        content="learn more about paul aries: a passionate, user-centered front-end developer and ux/ui designer.">
    <meta name="twitter:image" content="https://www.paularies.ca/media/paul-1.jpg">
    <?php include './components/metadata.php'; ?>
</head>

<?php include './components/initials.php' ?>

<body>

    <div class="cursor"></div>

    <div class="scroll-progress-container">
        <div class="scroll-progress"></div>
    </div>

    <?php include './components/header.php'; ?>

    <main class="about-me flex col aic jcc">
        <section class="grid col-12-8-4">
            <div class="cell span-lg profile flex gap-16 jcsb about-reveal">
                <div class="flex gap-16">
                    <img class="picture" src="./media/paul-1.jpg" alt="Headshot of Paul Aries." draggable="false">
                    <div class="flex col end gap-8">
                        <h1>about paul aries</h1>
                        <div class="flex row gap-16 wrap">
                            <p class="btn green">
                                <img src="./icons/ui/white-star.svg" alt="star icon." draggable="false">
                                front-end developer
                            </p>
                            <p class="btn blue">
                                <img src="./icons/ui/white-target.svg" alt="target icon." draggable="false">
                                ux / ui designer
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-2-toggle span-lg gap-16">
                <article class="cell about flex col gap-16 jcsb about-reveal">
                    <p class="quote">👋 i’m a detail-oriented developer and designer from Vancouver, BC who loves to
                        create
                        exciting digital experiences.</p>
                    <p>outside of coding, you can find me either exploring the <span id="outdoors"
                            class="link-underline">outdoors</span> or dancing at a <span id="concert"
                            class="link-underline">concert</span>.
                        no matter the activity i love pushing myself and enjoying it with others!</p>
                </article>
                <article class="cell about flex col gap-16 jcsb about-reveal">
                    <div class="about-carousel">
                        <figure class="carousel-cell about-overlay">
                            <figcaption>filming a dance video!</figcaption>
                            <video src="./media/about/paul-2.mp4" autoplay loop muted playsinline></video>
                        </figure>
                        <figure class="carousel-cell about-overlay">
                            <figcaption>hubbard glacier, alaska</figcaption>
                            <img src="./media/about/paul-3.jpg" alt="Paul Aries at Hubbard Glacier, Alaska."
                                draggable="false">
                        </figure>
                        <figure class="carousel-cell about-overlay">
                            <figcaption>scary bear sighting</figcaption>
                            <img src="./media/about/paul-4.jpg" alt="Paul Aries with a bear statue." draggable="false">
                        </figure>
                    </div>
                </article>
            </div>
            <article class="cell skills span-lg flex col gap-16 about-reveal">
                <h3>my skills</h3>
                <div class="flex row gap-16 wrap">
                    <img class="skill" src="./icons/skills/html5.svg" alt="HTML5 icon." draggable="false"
                        data-tippy-content="HTML5">
                    <img class="skill" src="./icons/skills/css3.svg" alt="CSS3 icon." draggable="false"
                        data-tippy-content="CSS3">
                    <img class="skill" src="./icons/skills/javascript.svg" alt="JavaScript icon."
                        data-tippy-content="JavaScript">
                    <img class="skill" src="./icons/skills/react.svg" alt="React icon." draggable="false"
                        data-tippy-content="React JS + Native">
                    <img class="skill" src="./icons/skills/sass.svg" alt="Sass icon." draggable="false"
                        data-tippy-content="Sass">
                    <img class="skill" src="./icons/skills/tailwind.svg" alt="Tailwind icon." draggable="false"
                        data-tippy-content="Tailwind">
                    <img class="skill" src="./icons/skills/php.svg" alt="PHP icon." draggable="false"
                        data-tippy-content="PHP">
                    <img class="skill" src="./icons/skills/wordpress.svg" alt="WordPress icon." draggable="false"
                        data-tippy-content="WordPress">
                </div>
                <div class="flex row gap-16 wrap">
                    <img class="skill" src="./icons/skills/figma.svg" alt="Figma icon." draggable="false"
                        data-tippy-content="Figma">
                    <img class="skill" src="./icons/skills/ps.svg" alt="Photoshop icon." draggable="false"
                        data-tippy-content="Photoshop">
                    <img class="skill" src="./icons/skills/ai.svg" alt="Illustrator icon." draggable="false"
                        data-tippy-content="Illustrator">
                    <img class="skill" src="./icons/skills/ae.svg" alt="After Effects icon." draggable="false"
                        data-tippy-content="After Effects">
                    <img class="skill" src="./icons/skills/id.svg" alt="InDesign icon." draggable="false"
                        data-tippy-content="InDesign">
                    <img class="skill" src="./icons/skills/pr.svg" alt="Premiere Pro icon." draggable="false"
                        data-tippy-content="Premiere Pro">
                </div>
            </article>
            <article class="cell values value1 flex col gap-16 jcsb about-reveal">
                <h3>adaptability</h3>
                <p>i embrace change and enjoy learning new things within the industry. my flexibility
                    enables me to remain enthusiastic when learning ways to tackle new challenges.</p>
            </article>
            <article class="cell values value2 flex col gap-16 jcsb about-reveal">
                <h3>collaboration</h3>
                <p>with experience in dancing in multiple competitive groups and working apart of two
                    food-service teams, i value working with others and collaborating. i
                    recognize the importance of communication and responsibility when working towards a shared
                    goal.</p>
            </article>
            <article class="cell values value3 flex col gap-16 jcsb about-reveal">
                <h3>humility</h3>
                <p>i always approach every project with humility, recognizing that the best ideas can come from
                    anywhere. by valuing the contributions and suggestions of others, i am able to
                    ensure that my work is always at its best.</p>
            </article>
            <div class="flex jcr gap-16 span-lg about-reveal">
                <a class="secondary btn" href="./work">
                    all projects
                </a>
                <a href="./media/PaulAries-Resume.pdf" class="white btn" target="_blank">
                    resume
                </a>
            </div>
        </section>
    </main>

    <?php include './components/footer.php'; ?>

    <script src="./dist/vendors.js"></script>
    <script src="./dist/global.js"></script>
    <script src="./dist/about.js"></script>

</body>

</html>