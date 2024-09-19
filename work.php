<!DOCTYPE html>
<html lang="en" class="lenis">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paul aries - projects</title>
    <link rel="stylesheet" href="../_sass/style.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Wix+Madefor+Display:wght@400..800&display=swap" rel="stylesheet">
    <link rel="canonical" href="./work">
    <link rel="icon" href="./icons/ui/logo-big.svg">
    <link rel="apple-touch-icon" href="../media/apple-touch-icon.png">
    <!-- HTML Meta Tags -->
    <meta name="description" content="explore the diverse range of projects by paul aries, a passionate, user-centered front-end developer and ux/ui designer.">
    <meta name="author" content="Paul Aries">
    <meta name="keywords" content="Paul Aries, front-end developer, UX/UI designer, portfolio, web development, user experience, user interface design, projects, paul aries projects, UX/UI design projects, front-end projects, portfolio projects, web development projects">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.paularies.ca/work">
    <meta property="og:type" content="website">
    <meta property="og:title" content="paul aries - projects">
    <meta property="og:description" content="explore the diverse range of projects by paul aries, a passionate, user-centered front-end developer and ux/ui designer.">
    <meta property="og:image" content="https://www.paularies.ca/media/paul-1.jpg">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="paularies.ca">
    <meta property="twitter:url" content="https://www.paularies.ca/work">
    <meta name="twitter:title" content="paul aries - projects">
    <meta name="twitter:description" content="explore the diverse range of projects by paul aries, a passionate, user-centered front-end developer and ux/ui designer.">
    <meta name="twitter:image" content="https://www.paularies.ca/media/og-image.jpg">
    <?php include './components/metadata.php'; ?>
</head>

<body>

<div class="cursor"></div>

<div class="scroll-progress-container">
    <div class="scroll-progress"></div>
</div>

<?php include './components/header.php'; ?>

<main class="all-projects flex col aic jcc">
    <section class="grid col-12-8-4">
        <h2 class="s-1 s-1-sm s-1-md">all projects</h2>
        <div class="filter-button-group s-1 s-1-sm s-1-md flex wrap row jcs gap-16">
            <button data-filter="*" class="chip filter all-filter active">all</button>
            <button data-filter=".front-end" class="chip filter flex row aic gap-8 front-end-filter">
                <img src="./icons/ui/white-star.svg" alt="star icon."  draggable="false">
                front-end
            </button>
            <button data-filter=".ux-ui" class="chip filter flex row aic gap-8 ux-ui-filter">
                <img src="./icons/ui/white-target.svg" alt="target icon."  draggable="false">
                ux / ui
            </button>
        </div>
        <div class="project-cards s-1 s-1-sm s-1-md">
            <?php include './components/project-cards/espresso-card.php'; ?>
            <?php include './components/project-cards/tempo-card.php'; ?>
            <?php include './components/project-cards/pine-card.php'; ?>
            <?php include './components/project-cards/odd-card.php'; ?>
        </div>
    </section>
</main>

<?php include './components/footer.php'; ?>

<?php include './components/scripts.php'; ?>

</body>
</html>