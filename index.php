<!DOCTYPE html>
<html lang="en" class="lenis">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paul aries - home</title>
    <link rel="stylesheet" href="./_sass/style.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Wix+Madefor+Display:wght@400..800&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="./index">
    <link rel="icon" href="./icons/ui/logo-big.svg">
    <link rel="apple-touch-icon" href="../media/apple-touch-icon.png">
    <!-- HTML Meta Tags -->
    <meta name="description"
        content="hey there, i'm paul aries! i'm a passionate, user-centered front-end developer and ux/ui designer. explore my portfolio, view my work, and connect with me!">
    <meta name="author" content="Paul Aries">
    <meta name="keywords"
        content="Paul Aries, front-end developer, UX/UI designer, portfolio, web development, user experience, user interface design">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.paularies.ca">
    <meta property="og:type" content="website">
    <meta property="og:title" content="paul aries - front-end developer & ux/ui designer">
    <meta property="og:description"
        content="hey there, i'm paul aries! i'm a passionate, user-centered front-end developer and ux/ui designer. explore my portfolio, view my work, and connect with me!">
    <meta property="og:image" content="https://www.paularies.ca/media/og-image.jpg">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="paularies.ca">
    <meta property="twitter:url" content="https://www.paularies.ca">
    <meta name="twitter:title" content="paul aries - front-end developer & ux/ui designer">
    <meta name="twitter:description"
        content="hey there, i'm paul aries! i'm a passionate, user-centered front-end developer and ux/ui designer. explore my portfolio, view my work, and connect with me!">
    <meta name="twitter:image" content="https://www.paularies.ca/media/og-image.jpg">
    <?php include './components/metadata.php'; ?>
</head>

<body>

    <div class="cursor"></div>

    <div class="scroll-progress-container">
        <div class="scroll-progress"></div>
    </div>

    <?php include './components/header.php'; ?>

    <div class="hero-wrapper">
        <div class="hero parallax flex col aic jcc">
            <hgroup class="grid col-12-8-4 hero-text">
                <h6 class="hero-greeting s-1 s-1-sm s-1-md">
                    <span class="reveal">hey there!</span><br>
                    <span class="reveal indent">my name is:</span>
                </h6>
                <h1 class="hero-name s-1 s-1-sm s-1-md">
                    <span class="reveal">paul </span>
                    <span class="reveal">aries</span>
                </h1>
                <div class="align-right s-1 s-1-sm s-1-md">
                    <h6 class="hero-description">
                        <span class="reveal">a passionate, user-centered</span>
                    </h6>
                </div>
                <div class="align-right s-1 s-1-sm s-1-md">
                    <h6 class="flex aic jcr gap-8 wrap">
                        <span class="reveal btn green">
                            <img src="./icons/ui/white-star.svg" alt="star icon." draggable="false">
                            front-end developer
                        </span>
                        <span class="reveal btn blue">
                            <img src="./icons/ui/white-target.svg" alt="target icon." draggable="false">
                            ux/ui designer
                        </span>
                    </h6>
                </div>
                <div class="arrow-container s-1 s-1-sm s-1-md flex aic jcc">
                    <img class="reveal arrow-down" src="./icons/ui/black-arrow-down.svg" alt="arrow icon."
                        draggable="false">
                </div>
            </hgroup>
        </div>
    </div>

    <main class="flex col aic jcc">
        <section class="grid col-12-8-4">
            <div class="intro cell s-1 s-1-sm s-1-md flex flex-toggle aic jcsb gap-24">
                <img class="picture" src="./media/paul-1.jpg" alt="headshot of paul aries." draggable="false">
                <div class="flex col gap-16 jcsb">
                    <div class="flex col gap-16">
                        <h5>my passion for both art and technology has always driven me to merge the two creatively.
                        </h5>
                        <p>this desire has led me to front-end development and ux/ui design—now im able to adapt my
                            skills, build solutions, and help users navigate the digital world seamlessly.</p>
                    </div>
                    <div class="flex jcr">
                        <a class="secondary btn" href="./about">
                            learn more
                            <img src="./icons/ui/white-arrow.svg" alt="arrow icon.">
                        </a>
                    </div>
                </div>
            </div>
            <h2 class="s-1 s-1-sm s-1-md">featured projects</h2>
            <div class="project-cards list s-1 s-1-sm s-1-md">
                <?php include './components/project-cards/espresso-card.php'; ?>
                <?php include './components/project-cards/tempo-card.php'; ?>
            </div>
            <div class="flex jcr gap-16 s-1 s-1-sm s-1-md more">
                <a class="secondary btn" href="./work">
                    all projects
                    <img src="../icons/ui/white-arrow.svg" alt="arrow icon.">
                </a>
            </div>
        </section>
    </main>

    <?php include './components/footer.php'; ?>

    <?php include './components/scripts.php'; ?>

</body>

</html>