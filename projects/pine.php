<!DOCTYPE html>
<html lang="en" class="lenis">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paul aries - pine</title>
    <link rel="stylesheet" href="../_sass/style.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Wix+Madefor+Display:wght@400..800&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="./projects/pine">
    <link rel="icon" href="./icons/ui/logo-big.svg">
    <link rel="apple-touch-icon" href="../media/apple-touch-icon.png">
    <!-- HTML Meta Tags -->
    <meta name="description"
        content="view the pine online retail website project by paul aries, a responsive website that implements CSS media queries, flexbox, grid, and a JavaScript plugin.">
    <meta name="author" content="Paul Aries">
    <meta name="keywords"
        content="Paul Aries, front-end developer, UX/UI designer, portfolio, web development, user experience, user interface design, projects, paul aries projects, front-end projects, portfolio projects, web development projects, JavaScript, jQuery, JavaScript plugins, jQuery plugins, HTML, CSS">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.paularies.ca/projects/pine">
    <meta property="og:type" content="website">
    <meta property="og:title" content="paul aries - pine">
    <meta property="og:description"
        content="view the pine online retail website project by paul aries, a responsive website that implements CSS media queries, flexbox, grid, and a JavaScript plugin.">
    <meta property="og:image" content="https://www.paularies.ca/media/pine/pine.jpg">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="paularies.ca">
    <meta property="twitter:url" content="https://www.paularies.ca/projects/pine">
    <meta name="twitter:title" content="paul aries - pine">
    <meta name="twitter:description"
        content="view the pine online retail website project by paul aries, a responsive website that implements CSS media queries, flexbox, grid, and a JavaScript plugin.">
    <meta name="twitter:image" content="https://www.paularies.ca/media/pine/pine.jpg">
    <?php include './components/metadata.php'; ?>
</head>

<body>

    <div class="cursor"></div>

    <div class="scroll-progress-container">
        <div class="scroll-progress fe"></div>
    </div>

    <?php include '../components/project-header.php'; ?>

    <div class="hero-wrapper">
        <div class="pine parallax overlay flex aic jcc">
            <div class="grid col-12-8-4">
                <div class="sm-hero s-0 s-0-sm s-0-md">
                    <img src="../media/pine/pineHero.jpg" alt="pine landing page.">
                </div>
                <div class="project-title s-0 s-0-sm s-0-md jcsb">
                    <h3>pine</h3>
                    <h4>online retail website</h4>
                    <div class="flex row jcsb aic">
                        <div class="flex row aic gap-16">
                            <button class="info btn" data-micromodal-trigger="modal-1">i</button>
                            <p class="green btn">
                                <img src="../icons/ui/white-star.svg" alt="star icon." draggable="false">
                                front-end
                            </p>
                            <p class="chip tag">js</p>
                            <p class="chip tag">html</p>
                            <p class="chip tag">css</p>
                            <p class="chip tag">figma</p>
                            <p class="chip tag">photoshop</p>
                            <p class="chip tag">illustrator</p>
                        </div>
                        <img class="reveal arrow-down" src="../icons/ui/black-arrow-down.svg" alt="arrow icon."
                            draggable="false">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="flex col aic jcc">
        <section class="grid col-12-8-4 project-section">
            <div class="paragraph s-1 s-1-sm s-1-md callout project-reveal">
                <h4>the goal</h4>
                <div>
                    <p>design a website of our choice, implementing CSS media queries, flexbox, grid, and a JavaScript
                        plugin. the final product should result in a fully responsive website that is modern and
                        visually appealling.</p>
                </div>
            </div>
            <div class="no-margin paragraph s-1 s-1-sm s-1-md project-reveal">
                <h5>getting started</h5>
                <p>inspired by the types of websites i frequently visit, i decided to design an online retail store for
                    a small, fictional fashion line called <strong>Pine</strong>.</p>
                <br>
                <p>i drafted three wireframes in Figma per page: <strong>one desktop</strong>, <strong>one
                        tablet</strong>, and <strong>one mobile</strong>. having different viewports allowed for
                    different layouts per device, which enabled the final website to have an exciting yet intuitive
                    interface no matter the window’s size. i understood that creating three responsive pages for three
                    different pages was going to be a challenge, but i always enjoy the problem-solving process!</p>
            </div>
            <div class="media s-1 s-1-sm s-1-md project-reveal">
                <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);"
                    src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fdesign%2Fh8iqY8j5rhOQ2PaSeGe1Yv%2Fpine%3Fnode-id%3D0-1%26t%3Dl5EPptFN6uNRGA9Z-1"
                    allowfullscreen></iframe>
            </div>
            <div class="paragraph s-1 s-1-sm s-1-md project-reveal">
                <h5>HTML, CSS, and JS development</h5>
                <p>based on the wireframes, i created the structure of each page using HTML and CSS. utilizing media
                    queries, i was able to adjust flexbox and grid properties for each viewport, as well as adjust the
                    sizing of elements accordingly.</p>
                <br>
                <p>adhering to the wireframes was a challenge, as they did not represent the in-betweens of the three
                    viewports. i found myself often shuffling through different values to make sure each page looked how
                    i wanted, in all window sizes. this proved to be an obstacle for sure, but through lots of trial and
                    error, i got the website to be as accurate as i hoped for!</p>
            </div>
            <div class="no-margin paragraph s-1 s-1-sm s-1-md flex col gap-16 project-reveal">
                <div class="media">
                    <video src="../media/pine/pineSplide.mp4" autoplay loop muted playsinline></video>
                </div>
                <p>with <strong>Isotope</strong> and <strong>Splide</strong> plugins, i was also able to add
                    functionality to Pine’s pages, allowing users to filter through the different products and navigate
                    through an image gallery. learning these plugins was initially a challenge, as i was unfamiliar with
                    these plugins and their syntax. however, i was able to get the results i desired thanks to the
                    plugin’s extensive documentation.</p>
                <div class="code-dropdown" tabindex="0">
                    <div class="code-dropdown-btn flex row aic jcc jcsb">
                        <p>Splide</p>
                        <div>
                            <img class="caret" src="../icons/ui/white-caret.svg" alt="caret icon." draggable="false">
                        </div>
                    </div>
                    <figure class="code-preview">
                        <?php include '../components/code/splide.php'; ?>
                    </figure>
                </div>
            </div>
            <div class="paragraph s-1 s-1-sm s-1-md project-reveal">
                <h5>content creation</h5>
                <p>Pine’s brand identity is an original idea, with inspiration taken from the beautiful environment and
                    colors of Vancouver; the brand’s logo was created using Illustrator.</p>
                <br>
                <p>all imagery is from Unsplash and Pexels and abides by their respective license rules. additionally,
                    product photos were edited in Photoshop for different colorways and consistent backgrounds. icons
                    are from FontsAwesome and abide by their license rules.</p>
            </div>
            <div class="media s-1 s-1-sm s-1-md project-reveal">
                <img src="../media/pine/pinePs.png" alt="product photos being edited in Photoshop.">
            </div>
            <div class="flex s-1 s-1-sm s-1-md jcr gap-16 view-project project-reveal">
                <a class="secondary btn" href="https://github.com/plries/pine-retail" target="_blank">
                    github
                    <img src="../icons/ui/white-arrow.svg" alt="arrow icon.">
                </a>
                <a class="white btn" href="https://pine.paularies.ca/" target="_blank">
                    website
                    <img src="../icons/ui/black-arrow.svg" alt="arrow icon.">
                </a>
            </div>
            <div class="paragraph s-1 s-1-sm s-1-md flex col gap-16 project-reveal">
                <h5>other projects</h5>
                <div class="more-projects grid grid-2-toggle">
                    <?php include '../components/project-thumbs/tempo-thumb.php'; ?>
                    <div class="grid grid-2-row gap-16">
                        <?php include '../components/project-thumbs/espresso-thumb.php'; ?>
                        <?php include '../components/project-thumbs/odd-thumb.php'; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../components/project-footer.php'; ?>

    <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
        <div class="modal-overlay" tabindex="-1" data-micromodal-close>
            <div class="grid col-12-8-4">
                <div class="modal-container s-2 s-2-sm s-2-md flex col gap-16">
                    <h3>project details</h3>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <th>timeframe</th>
                                    <th>contributions</th>
                                    <th>input</th>
                                    <th>total hours</th>
                                </tr>
                                <tr>
                                    <td>march 7, 2024 - may 13, 2024</td>
                                    <td>
                                        <ul>
                                            <li><a class="link-underline" href="https://www.pexels.com/license/"
                                                    target="_blank">pexels</a></li>
                                            <li><a class="link-underline" href="https://unsplash.com/license"
                                                    target="_blank">unsplash</a></li>
                                            <li><a class="link-underline" href="https://fontawesome.com/license/free"
                                                    target="_blank">font awesome</a></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>joyce lam - instructor</li>
                                        </ul>
                                    </td>
                                    <td>24</td>
                                </tr>
                            </tbody>
                        </table>
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