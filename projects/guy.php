<!DOCTYPE html>
<html lang="en" class="lenis">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paul aries - guy</title>
    <link rel="stylesheet" href="../_sass/style.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Rubik:ital,wght@0,300..900;1,300..900&family=Wix+Madefor+Display:wght@400..800&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="./projects/guy">
    <link rel="icon" href="../icons/ui/logo-big.svg">
    <link rel="apple-touch-icon" href="../media/apple-touch-icon.png">
    <!-- HTML Meta Tags -->
    <meta name="description"
        content="view the guy landing page website project by paul aries, a marketing page for a mobile app companion built with Sass, IntersectionObserver API, and local storage.">
    <meta name="author" content="Paul Aries">
    <meta name="keywords"
        content="Paul Aries, front-end developer, UX/UI designer, portfolio, web development, user experience, user interface design, projects, paul aries projects, front-end projects, portfolio projects, web development projects, JavaScript, Sass, JavaScript plugins, HTML, CSS, IntersectionObserver API">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.paularies.ca/projects/guy">
    <meta property="og:type" content="website">
    <meta property="og:title" content="paul aries - guy">
    <meta property="og:description"
        content="view the guy landing page website project by paul aries, a marketing page for a mobile app companion built with Sass, IntersectionObserver API, and local storage.">
    <meta property="og:image" content="https://www.paularies.ca/media/guy/guy.jpg">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="paularies.ca">
    <meta property="twitter:url" content="https://www.paularies.ca/projects/guy">
    <meta name="twitter:title" content="paul aries - guy">
    <meta name="twitter:description"
        content="view the guy landing page website project by paul aries, a marketing page for a mobile app companion built with Sass, IntersectionObserver API, and local storage.">
    <meta name="twitter:image" content="https://www.paularies.ca/media/guy/guy.jpg">
    <?php include './components/metadata.php'; ?>
</head>

<?php include '../components/initials.php' ?>

<body>

    <div class="cursor"></div>

    <div class="scroll-progress-container">
        <div class="scroll-progress fe"></div>
    </div>

    <?php include '../components/project-header.php'; ?>

    <div class="project-hero hero-wrapper">
        <div class="guy parallax overlay flex aic jcc">
            <div class="grid col-12-8-4">
                <div class="sm-hero span-full">
                    <img src="../media/guy/guy.jpg" alt="guy landing page.">
                </div>
                <div class="project-title span-full jcsb">
                    <h1>guy</h1>
                    <h2>software landing page</h2>
                    <div class="flex row jcsb aic wrap gap-16">
                        <div class="flex row aic gap-16">
                            <p class="green btn">
                                <img src="../icons/ui/white-star.svg" alt="star icon." draggable="false">
                                front-end
                            </p>
                            <p class="chip tag">js</p>
                            <p class="chip tag">html</p>
                            <p class="chip tag">sass</p>
                        </div>
                        <div class="flex row gap-16 links-container">
                            <button class="info btn" data-micromodal-trigger="modal-1">i</button>
                            <a class="secondary btn"
                                href="https://github.com/plries/guy-saas"
                                target="_blank">
                                github
                            </a>
                            <a class="black btn"
                                href="#"
                                target="_blank">
                                website
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="flex col aic jcc">
        <section class="grid col-12-8-4 project-section">
            <div class="paragraph span-lg callout project-reveal">
                <h3>the goal</h3>
                <div>
                    <p>build a marketing page for a mobile app companion using Sass for styling, the IntersectionObserver API to dynamically apply styles, and local storage save themes.</p>
                </div>
            </div>
            <div class=" paragraph span-lg project-reveal">
                <h4>guy's inspiration</h4>
                <p><strong>guy</strong> is a mobile app companion that actively listens to your conversations and responds to you via phone notification. This concept draws from <a class="link-underline" href="https://www.friend.com/" target="_blank">Friend</a>, an AI pendant that garnered a lot of attention for its potential to replace human connection.</p>
                <br>
                <p>Friend states that “your friend is always listening and forming their own internal thoughts,” which sparked conversation regarding the ethical concerns of the pendant.</p>
            </div>
            <div class="paragraph span-md project-reveal">
                <p class="quote">due to the mixed reactions to Friend, i thought it would be fun to not only create a website inspired by its modern branding, but attempt to market an unsettling product to the average person using a SaaS-style approach.</p>
            </div>
            <div class="paragraph span-lg flex col gap-16 project-reveal">
                <div>
                    <h4>using Sass</h4>
                    <p><strong>Sass</strong> was essential for organizing the project’s styling, particularly when implementing features like dark mode and animations. by isolating color properties in a separate <code>.scss</code> file, i could easily manage and adjust light/dark mode without cluttering other files.</p>
                </div>
                <div class="code-dropdown" tabindex="0">
                    <div class="code-dropdown-btn flex row aic jcc jcsb" data-tippy-content="code snippet!">
                        <p>light mode</p>
                        <div class="flex row aic gap-16">
                            <p>.scss</p>
                            <img class="caret" src="../icons/ui/white-caret.svg" alt="caret icon." draggable="false">
                        </div>
                    </div>
                    <figure class="code-preview">
                        <?php include '../components/code/guy/light.php'; ?>
                    </figure>
                </div>
                <div class="code-dropdown" tabindex="0">
                    <div class="code-dropdown-btn flex row aic jcc jcsb" data-tippy-content="code snippet!">
                        <p>dark mode</p>
                        <div class="flex row aic gap-16">
                            <p>.scss</p>
                            <img class="caret" src="../icons/ui/white-caret.svg" alt="caret icon." draggable="false">
                        </div>
                    </div>
                    <figure class="code-preview">
                        <?php include '../components/code/guy/dark.php'; ?>
                    </figure>
                </div>
            </div>
            <div class="paragraph span-lg flex col gap-16 project-reveal">
                <div>
                    <h4>leveraging localStorage</h4>
                    <p><strong>localStorage</strong> allows for data to be stored in a user’s browser, allowing for certain settings to be stored across different sessions. for guy, i stored the user’s dark/light mode preference so that it can be saved every time they visit the website or refresh the page, resulting in a pleasant user experience.</p>
                </div>
                <div class="paragraph media">
                    <video loading="lazy" src="../media/guy/guyLS.mp4" autoplay loop muted
                        playsinline></video>
                </div>
                <div class="code-dropdown" tabindex="0">
                    <div class="code-dropdown-btn flex row aic jcc jcsb" data-tippy-content="code snippet!">
                        <p>localStorage</p>
                        <div class="flex row aic gap-16">
                            <p>.js</p>
                            <img class="caret" src="../icons/ui/white-caret.svg" alt="caret icon." draggable="false">
                        </div>
                    </div>
                    <figure class="code-preview">
                        <?php include '../components/code/guy/localstorage.php'; ?>
                    </figure>
                </div>
            </div>
            <div class=" paragraph span-lg flex col gap-16 project-reveal">
                <div>
                    <h4>working with IntersectionObserver API</h4>
                    <p>we were provided a <code>script.js</code> file to integrate the <strong>IntersectionObserver API</strong>. i customized it to trigger fade and slide animations as elements entered the viewport, which enhanced the site’s modern feel and visually demonstrated how guy’s notifications would appear on a phone. i also used the <code>::after</code> pseudo-element to add a dynamic section indicator to the navbar, improving the site’s navigation and user experience.</p>
                </div>
                <div class="paragraph media">
                    <video loading="lazy" src="../media/guy/guyIO.mp4" autoplay loop muted
                        playsinline></video>
                </div>
                <div class="code-dropdown" tabindex="0">
                    <div class="code-dropdown-btn flex row aic jcc jcsb" data-tippy-content="code snippet!">
                        <p>section indicator</p>
                        <div class="flex row aic gap-16">
                            <p>.scss</p>
                            <img class="caret" src="../icons/ui/white-caret.svg" alt="caret icon." draggable="false">
                        </div>
                    </div>
                    <figure class="code-preview">
                        <?php include '../components/code/guy/indicator.php'; ?>
                    </figure>
                </div>
            </div>
            <div class="paragraph span-lg flex col gap-16 project-reveal">
                <div>
                    <h4>FAQ accordions</h4>
                    <p>for the <strong>FAQ</strong> section, i implemented animated accordions using the <code>max-height</code> property. this kept the content organized and easy to access, with smooth transitions when opening or closing each question.</p>
                </div>
                <div class="paragraph media">
                    <video loading="lazy" src="../media/guy/guyFaq.mp4" autoplay loop muted
                        playsinline></video>
                </div>
                <div class="code-dropdown" tabindex="0">
                    <div class="code-dropdown-btn flex row aic jcc jcsb" data-tippy-content="code snippet!">
                        <p>functionality</p>
                        <div class="flex row aic gap-16">
                            <p>.js</p>
                            <img class="caret" src="../icons/ui/white-caret.svg" alt="caret icon." draggable="false">
                        </div>
                    </div>
                    <figure class="code-preview">
                        <?php include '../components/code/guy/faqjs.php'; ?>
                    </figure>
                </div>
                <div class="code-dropdown" tabindex="0">
                    <div class="code-dropdown-btn flex row aic jcc jcsb" data-tippy-content="code snippet!">
                        <p>styling</p>
                        <div class="flex row aic gap-16">
                            <p>.scss</p>
                            <img class="caret" src="../icons/ui/white-caret.svg" alt="caret icon." draggable="false">
                        </div>
                    </div>
                    <figure class="code-preview">
                        <?php include '../components/code/guy/faqscss.php'; ?>
                    </figure>
                </div>
            </div>
            <div class="paragraph span-lg flex col gap-16">
                <h4>bringing it together</h4>
                <p>the marketing page became a successful blend of modern design, interactive features, and smooth user experience. by leveraging Sass for organized styling, the IntersectionObserver API added an interactive layer, and localStorage integration i was able to explore the intriguing challenge of marketing a product through a sleek, SaaS-style website.</p>
            </div>
            <div class="flex span-lg jcr gap-16 view-project project-reveal">
                <a class="secondary btn" href="https://github.com/plries/pine-retail" target="_blank">
                    github
                </a>
                <a class="white btn" href="https://pine.paularies.ca/" target="_blank">
                    website
                </a>
            </div>
            <div class="paragraph span-lg flex col gap-16 project-reveal">
                <h4>other projects</h4>
                <div class="more-projects grid grid-2-toggle">
                    <?php include '../components/project-thumbs/espresso-thumb.php'; ?>
                    <div class="grid grid-2-row gap-16">
                        <?php include '../components/project-thumbs/tempo-thumb.php'; ?>
                        <?php include '../components/project-thumbs/pine-thumb.php'; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../components/project-footer.php'; ?>

    <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
        <div class="modal-overlay" tabindex="-1" data-micromodal-close>
            <div class="grid col-12-8-4">
                <div class="modal-container span-lg flex col gap-16">
                    <h3>project details</h3>
                    <div class="grid grid-2-toggle">
                        <div>
                            <h4>timeframe</h4>
                            <p>aug 3, 2024 - aug 11, 2024</p>
                        </div>
                        <div>
                            <h4>contributions</h4>
                            <ul>
                                <li><a class="link-underline" href="https://www.pexels.com/license/"
                                        target="_blank">pexels</a></li>
                                <li><a class="link-underline" href="https://ionic.io/ionicons"
                                        target="_blank">ionicons</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4>input</h4>
                            <ul>
                                <li>jayme cochrane - instructor</li>
                            </ul>
                        </div>
                        <div>
                            <h4>total hours</h4>
                            <p>16</p>
                        </div>
                    </div>
                    <div class="flex end">
                        <button class="black btn" aria-label="close modal" data-micromodal-close>
                            close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../components/project-scripts.php'; ?>

</body>

</html>