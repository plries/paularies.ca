<!DOCTYPE html>
<html lang="en" class="lenis">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paul aries - home</title>
    <link rel="stylesheet" href="./style.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Rubik:ital,wght@0,300..900;1,300..900&family=Wix+Madefor+Display:wght@400..800&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="./index">
    <link rel="icon" href="./icons/ui/logo-big.svg">
    <link rel="apple-touch-icon" href="../media/apple-touch-icon.png">
    <!-- HTML Meta Tags -->
    <meta name="description"
        content="hey there, i'm paul aries! i'm a creative, user-centered front-end developer and ux/ui designer. explore my portfolio, view my work, and connect with me!">
    <meta name="author" content="Paul Aries">
    <meta name="keywords"
        content="Paul Aries, front-end developer, UX/UI designer, portfolio, web development, user experience, user interface design">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.paularies.ca">
    <meta property="og:type" content="website">
    <meta property="og:title" content="paul aries - front-end developer & ux/ui designer">
    <meta property="og:description"
        content="hey there, i'm paul aries! i'm a creative, user-centered front-end developer and ux/ui designer. explore my portfolio, view my work, and connect with me!">
    <meta property="og:image" content="https://www.paularies.ca/media/og-image.jpg">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="paularies.ca">
    <meta property="twitter:url" content="https://www.paularies.ca">
    <meta name="twitter:title" content="paul aries - front-end developer & ux/ui designer">
    <meta name="twitter:description"
        content="hey there, i'm paul aries! i'm a creative, user-centered front-end developer and ux/ui designer. explore my portfolio, view my work, and connect with me!">
    <meta name="twitter:image" content="https://www.paularies.ca/media/og-image.jpg">
    <?php include './components/metadata.php'; ?>
</head>

<?php include './components/initials.php' ?>

<body>

    <div class="cursor"></div>

    <div class="scroll-progress-container">
        <div class="scroll-progress"></div>
    </div>

    <?php include './components/header.php'; ?>

    <div class="hero-wrapper">
        <div class="hero parallax flex col aic jcc">
            <hgroup class="grid col-12-8-4 hero-text">
                <h2 class="hero-greeting span-lg">
                    <span class="reveal">hey there!</span><br>
                    <span class="reveal indent">my name is:</span>
                </h2>
                <div class="hero-name-container reveal span-lg">
                    <h1 id="hero-name">
                        paul aries
                    </h1>
                </div>
                <div class="align-right span-lg">
                    <h2 class="hero-description">
                        <span class="reveal">a creative, user-centered</span>
                    </h2>
                </div>
                <div class="align-right span-lg">
                    <h2 class="flex aic jcr gap-8 wrap">
                        <span class="reveal btn green">
                            <img src="./icons/ui/white-star.svg" alt="star icon." draggable="false">
                            front-end developer
                        </span>
                        <span class="reveal btn blue">
                            <img src="./icons/ui/white-target.svg" alt="target icon." draggable="false">
                            ux/ui designer
                        </span>
                    </h2>
                </div>
                <div class="arrow-container span-lg flex aic jcc">
                    <a href="#intro">
                        <img class="reveal arrow-down" src="./icons/ui/black-arrow-down.svg" alt="arrow icon."
                            draggable="false">
                    </a>
                </div>
            </hgroup>
        </div>
    </div>

    <main class="flex col aic jcc">
        <section id="intro" class="grid col-12-8-4 gap-48">
            <div class="intro cell span-lg flex jcsb gap-24">
                <img class="picture" src="./media/paul-1.jpg" alt="headshot of paul aries." draggable="false">
                <div class="flex col gap-16">
                    <p class="quote">my passion for both art and tech has always driven me to merge the two
                        creatively.
                    </p>
                    <p>that's why i love the world of <strong>front-end development</strong> and <strong>ux/ui
                            design</strong>—i can
                        create innovative solutions and help users navigate the digital world in a satisfying and
                        refreshing way.
                    </p>
                    <a class="secondary btn" href="./about">
                        learn more
                    </a>
                </div>
            </div>
            <div class="project-cards list span-lg">
                <h2 class="span-lg">featured work</h2>
                <?php include './components/project-cards/guy-card.php'; ?>
                <?php include './components/project-cards/tempo-card.php'; ?>
                <div class="flex jcr gap-16 span-lg more">
                    <a class="secondary btn" href="./work">
                        all projects
                    </a>
                </div>
            </div>
            <div class="flex col gap-16 span-lg">
                <?php include './components/testimonial-cards/masha.php'; ?>
                <?php include './components/testimonial-cards/emma.php'; ?>
                <div class="flex flex-toggle gap-16">
                    <?php include './components/testimonial-cards/jayden.php'; ?>
                    <?php include './components/testimonial-cards/nicole.php' ?>
                </div>
            </div>
        </section>
    </main>

    <?php include './components/footer.php'; ?>

    <script src="./dist/vendors.js"></script>
    <script src="./dist/global.js"></script>
    <script src="./dist/home.js"></script>

</body>

</html>