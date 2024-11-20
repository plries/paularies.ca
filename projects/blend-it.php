<!DOCTYPE html>
<html lang="en" class="lenis">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paul aries - blend it</title>
    <link rel="stylesheet" href="../style.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Rubik:ital,wght@0,300..900;1,300..900&family=Wix+Madefor+Display:wght@400..800&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="./projects/blend-it">
    <link rel="icon" href="../icons/ui/logo-big.svg">
    <link rel="apple-touch-icon" href="../media/apple-touch-icon.png">
    <!-- HTML Meta Tags -->
    <meta name="description"
        content="view the blend it smoothie bar website by paul aries, an online smoothie bowl builder built with React.js, React Step Wizard, and Tailwind CSS.">
    <meta name="author" content="Paul Aries">
    <meta name="keywords"
        content="Paul Aries, front-end developer, UX/UI designer, portfolio, web development, user experience, user interface design, projects, paul aries projects, front-end projects, portfolio projects, web development projects, JavaScript, React.js, React, React Step Wizard, Tailwind CSS">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.paularies.ca/projects/blend-it">
    <meta property="og:type" content="website">
    <meta property="og:title" content="paul aries - blend it">
    <meta property="og:description"
        content="view the blend it smoothie bar website by paul aries, an online smoothie bowl builder built with React.js, React Step Wizard, and Tailwind CSS.">
    <meta property="og:image" content="https://www.paularies.ca/media/blend-it/blend-it.jpg">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="paularies.ca">
    <meta property="twitter:url" content="https://www.paularies.ca/projects/blend-it">
    <meta name="twitter:title" content="paul aries - blend it">
    <meta name="twitter:description"
        content="view the blend it smoothie bar website by paul aries, an online smoothie bowl builder built with React.js, React Step Wizard, and Tailwind CSS.">
    <meta name="twitter:image" content="https://www.paularies.ca/media/blend-it/blend-it.jpg">
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
        <div class="blend-it parallax overlay flex aic jcc">
            <div class="grid col-12-8-4">
                <div class="sm-hero span-full">
                    <img src="../media/blend-it/blend-it.jpg" alt="blend it smoothie bowl builder.">
                </div>
                <div class="project-title span-full jcsb">
                    <h1>blend it</h1>
                    <h2>smoothie bowl builder</h2>
                    <div class="flex row jcsb aic wrap gap-16">
                        <div class="flex row aic gap-16">
                            <p class="green btn">
                                <img src="../icons/ui/white-star.svg" alt="star icon." draggable="false">
                                front-end
                            </p>
                            <p class="chip tag">react.js</p>
                            <p class="chip tag">javascript</p>
                            <p class="chip tag">tailwind</p>
                            <p class="chip tag">step wizard</p>
                        </div>
                        <div class="flex row gap-16 links-container">
                            <button class="info btn" data-micromodal-trigger="modal-1">i</button>
                            <a class="secondary btn" href="https://github.com/christianyipper/blendit" target="_blank">
                                github
                            </a>
                            <a class="black btn" data-tippy-content="coming soon!" target="_blank">
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
                    <p>develop a modern online ordering experience for a smoothie bowl vendor using React.js and Tailwind. these two frameworks will be used to create a playful interface which reacts dynamically to user interaction with components.</p>
                </div>
            </div>
            <div class=" paragraph span-lg project-reveal">
                <h4>project vision</h4>
                <p>as the first large-scale <strong>React.js</strong> project for
                    <a class="link-underline" href="https://www.linkedin.com/in/mariasupix/" target="_blank">Masha</a>,
                    <a class="link-underline" href="https://www.linkedin.com/in/christianyipper/" target="_blank">Christian</a>,
                    and i, we wanted to collaborate and utilize web components to its fullest to create a unique online experience out of an ordinary process.</p>
            </div>
            <div class="paragraph span-md project-reveal">
                <p class="quote">with this new medium, we decided to create a 3-step smoothie builder utilizing props to pass ingredient information between each step.</p>
            </div>
            <div class="paragraph span-lg flex col gap-16 project-reveal">
                <div>
                    <h4>working together</h4>
                    <p>since this website was a side-project outside out of school, the three of us agreed that an agile, <strong>sprint-based workflow</strong> would be ideal. having weekly meetings, a Notion database, and a Discord server ensured that we had the right resources to focus on the task at hand, as we assigned new tasks and deadlines weekly.</p>
                </div>
            </div>
            <div class="paragraph span-lg flex col gap-16 project-reveal">
                <div>
                    <h4>brand identity</h4>
                    <div class="grid gap-16 grid-2-toggle">
                        <div>
                            <p>we first began the project by creating a <strong>visual identity</strong> for the smoothie vendor. we knew that we wanted the website to have a unique feel with bright colors and fun shapes—we also incorporated a blender silhouette into the logo as the whole experience revolves around it.</p>
                            <br>
                            <p>with all the colors, fonts, and logos established, we created a style tile to refer to as we develop the website moving forward.</p>
                        </div>
                        <div class="paragraph media">
                            <img src="../media/blend-it/blend-itStyleTile.png" alt="blend it's style tile."></img>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" paragraph span-lg flex col gap-16 project-reveal">
                <div>
                    <h4>wireframes and mockups</h4>
                    <p>we created wireframes for the project to get an general idea for each page’s layout. with the wireframes and style tile, we then made the mockups for both pages. i focused on the <strong>smoothie bowl builder mockup</strong>, assuring that the bowl builder had the same playful energy as the homepage. having <strong>weekly communication</strong> and <strong>collaboration</strong> ensured that blend it’s visual identity remained consistent across all aspects of the website, even when we worked on sections separately.</p>
                </div>
                <div class="paragraph media">
                    <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" src="https://embed.figma.com/design/n46g89f4LddbEyRYoipnUt/Blend-It.-Mockups?node-id=0-1&embed-host=share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="paragraph span-lg flex col gap-16 project-reveal">
                <div>
                    <h4>react step wizard</h4>
                    <p>using <strong>react step wizard</strong>, i was able to segment the smoothie bowl builder into 3 main steps; blending the base, picking fruits, and finishing it with toppings. step wizard has the ability to pass props between each step, meaning that we can retain the ingredients selected from one step to the next, and display the bowl in its final state at the end of the process.</p>
                </div>
                <div class="code-dropdown">
                    <button class="code-dropdown-btn flex row aic jcc jcsb">
                        <p>step wizard</p>
                        <div class="flex row aic gap-16">
                            <p>.js</p>
                            <img class="caret" src="../icons/ui/white-caret.svg" alt="caret icon." draggable="false">
                        </div>
                    </button>
                    <figure class="code-preview">
                        <?php include '../components/code/blend-it/stepwizard.php'; ?>
                    </figure>
                </div>
            </div>
            </div>
            <div class="paragraph span-lg flex col gap-16 project-reveal">
                <h4>a colorful challenge</h4>
                <p>a lot of discussion was had about how we can dynamically change the color of the smoothie based on the ingredients selected. after some research we found that, colors can be <strong>blended together</strong> by adding the fruits R, G, and B values together, and dividing it by the amount of ingredients selected. thanks to this solution, we avoided a whole page of if statements in our code.
            </p>
            <div class="code-dropdown">
                    <button class="code-dropdown-btn flex row aic jcc jcsb">
                        <p>blend colors</p>
                        <div class="flex row aic gap-16">
                            <p>.js</p>
                            <img class="caret" src="../icons/ui/white-caret.svg" alt="caret icon." draggable="false">
                        </div>
                    </button>
                    <figure class="code-preview">
                        <?php include '../components/code/blend-it/colors.php'; ?>
                    </figure>
                </div>
            </div>
            <div class="paragraph span-lg flex col gap-16 project-reveal">
                <h4>blending it together</h4>
                <p>working on blend it was more than just a technical project—it was a chance to be creative, collaborative, and innovative. using React.js and Tailwind, we turned the basic ordering system into something interactive and lively. this was achieved due effective project management in an agile workflow, consistent communication, and, of course, <strong>positive vibes</strong> all around.</p>
            </div>
            <div class="paragraph span-lg flex col gap-16 project-reveal">
                <h4 class="other-projects">other projects</h4>
                <div class="more-projects grid grid-2-toggle">
                    <?php include '../components/project-thumbs/espresso-thumb.php'; ?>
                    <?php include '../components/project-thumbs/tempo-thumb.php'; ?>
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
                            <p>sep 3, 2024 - nov 22, 2024</p>
                        </div>
                        <div>
                            <h4>contributions</h4>
                            <ul>
                                <li>maria supikhanova - web developer</li>
                                <li>christian yip - web developer</li>
                            </ul>
                        </div>
                        <div>
                            <h4>input</h4>
                            <p>n/a</p>
                        </div>
                        <div>
                            <h4>total hours</h4>
                            <p>26</p>
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

    <script src="../dist/vendors.js"></script>
    <script src="../dist/global.js"></script>
    <script src="../dist/project.js"></script>

</body>

</html>