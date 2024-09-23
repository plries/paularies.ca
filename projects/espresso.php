<!DOCTYPE html>
<html lang="en" class="lenis">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paul aries - espresso</title>
    <link rel="stylesheet" href="../_sass/style.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Wix+Madefor+Display:wght@400..800&display=swap" rel="stylesheet">
    <link rel="canonical" href="./projects/espresso">
    <link rel="icon" href="../icons/ui/logo-big.svg">
    <link rel="apple-touch-icon" href="../media/apple-touch-icon.png">
    <!-- HTML Meta Tags -->
    <meta name="description" content="view the espresso guide website project by paul aries, a responsive website featuring animations and interactivity using JavaScript/jQuery plugins.">
    <meta name="author" content="Paul Aries">
    <meta name="keywords" content="Paul Aries, front-end developer, UX/UI designer, portfolio, web development, user experience, user interface design, projects, paul aries projects, front-end projects, portfolio projects, web development projects, JavaScript, jQuery, JavaScript plugins, jQuery plugins, HTML, CSS">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.paularies.ca/projects/espresso">
    <meta property="og:type" content="website">
    <meta property="og:title" content="paul aries - espresso">
    <meta property="og:description" content="view the espresso guide project website by paul aries, a responsive website featuring animations and interactivity using JavaScript/jQuery plugins.">
    <meta property="og:image" content="https://www.paularies.ca/media/espresso/espresso.jpg">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="paularies.ca">
    <meta property="twitter:url" content="https://www.paularies.ca/projects/espresso">
    <meta name="twitter:title" content="paul aries - espresso">
    <meta name="twitter:description" content="view the espresso guide project website by paul aries, a responsive website featuring animations and interactivity using JavaScript/jQuery plugins.">
    <meta name="twitter:image" content="https://www.paularies.ca/media/espresso/espresso.jpg">
    <?php include './components/metadata.php'; ?>
</head>

<body>

<div class="cursor"></div>

<div class="scroll-progress-container">
    <div class="scroll-progress fe"></div>
</div>

<?php include '../components/project-header.php'; ?>

<div class="hero-wrapper">
    <div class="espresso parallax overlay flex aic jcc">
        <div class="grid col-12-8-4">
            <div class="sm-hero s-0 s-0-sm s-0-md">
                <img src="../media/espresso/espressoHero.jpg" alt="espresso landing page.">
            </div>
            <div class="project-title s-0 s-0-sm s-0-md jcsb">
                <h3>espresso guide - website</h3>
                <div class="flex row jcsb aic">
                    <div class="flex row aic gap-16">
                        <button class="info btn" data-micromodal-trigger="modal-1">i</button>
                        <p class="green btn">
                            <img src="../icons/ui/white-star.svg" alt="star icon." draggable="false">  
                        front-end</p>
                        <p class="chip tag">js</p>
                        <p class="chip tag">jquery</p>
                        <p class="chip tag">html</p>
                        <p class="chip tag">css</p>
                    </div>
                    <img class="reveal arrow-down" src="../icons/ui/black-arrow-down.svg" alt="arrow icon." draggable="false">
                </div>
            </div>
        </div>
    </div>
</div>

<main class="flex col aic jcc">
    <section class="grid col-12-8-4 project-section">
        <div class="paragraph s-1 s-1-sm s-1-md callout project-reveal">
            <h4>the goal</h4>
            <p>create a responsive, 3-page website to introduce beginners to the vast world of espresso utilizing 5 JavaScript/jQuery plugins.</p>
        </div>
        <div class="no-margin paragraph s-1 s-1-sm s-1-md project-reveal">
            <h5>why espresso?</h5>
            <p>the first step in creating this website was to decide on its topic. knowing that i had to utilize <strong>5 JavaScript/jQuery plugins</strong>, i wanted to create a website on a subject that i was knowledgeable about, and thus showcased information in an interactive and entertaining way.</p>
        </div>
        <div class="paragraph s-2 s-2-sm s-2-md project-reveal">
            <q>with this goal in mind, i decided to focus on one of my passions: <strong>espresso</strong>.<br>
            this choice allowed me to delve into its complexities and present its extensive information in an engaging manner for newcomers.</q>
        </div>
        <div class="paragraph s-1 s-1-sm s-1-md flex col gap-16 project-reveal">
            <div>
                <h5>animations and interactivity</h5>
                <p>the first plugin i implemented was the <a class="link-underline" href="https://github.com/BGStock/jquery-background-video" target="_blank">jQuery Background Video</a> plugin, likely the simplest of the five. this plugin enabled me to add visually communicate the topic of each page as soon as the user lands on the website.
                </p>
            </div>
            <div class="code-dropdown paragraph project-reveal" tabindex="0">
                <div class="code-dropdown-btn flex row aic jcc jcsb">
                    <p>jQuery Background Video</p>
                    <div>
                        <img class="caret" src="../icons/ui/white-caret.svg" alt="caret icon." draggable="false">
                    </div>
                </div>
                <figure class="code-preview">
                    <?php include '../components/code/bg-vid.php'; ?>
                </figure>
            </div>
        </div>
        <div class="paragraph s-1 s-1-sm s-1-md flex col gap-16 project-reveal">
            <div class="paragraph media">
                <video src="../media/espresso/espressoIsotope.mp4" autoplay loop muted playsinline></video>
            </div>
            <div>
                <p>next, i implemented the <a class="link-underline" href="https://isotope.metafizzy.co/" target="_blank">Isotope</a> plugin to add filtering and sorting functionality to a list of recommended espresso tools. users can sort the list by name and pricing, and filter the products by priority. this feature was designed with beginner baristas in mind, as they would likely frequent this page to determine which equipment they should purchase next. by integrating this functionality, i aimed to create a more user-friendly experience, allowing users to quickly find the most useful tools.</p>
                <br>
                <p>this plugin proved to be more complex than the others, as my initial HTML setup did not align with Isotope’s recommended markup. as a result, the setup took longer than anticipated so, as a result, i’ve learned to research about what resources i plan to utilize before i begin coding.</p>
            </div>
            <div class="code-dropdown" tabindex="0">
                <div class="code-dropdown-btn flex row aic jcc jcsb">
                    <p>Isotope</p>
                    <div>
                        <img class="caret" src="../icons/ui/white-caret.svg" alt="caret icon." draggable="false">
                    </div>
                </div>
                <figure class="code-preview">
                    <?php include '../components/code/isotope.php'; ?>
                </figure>                       
            </div>
        </div>
        <div class="paragraph s-1 s-1-sm s-1-md flex col gap-16 project-reveal">
            <div class="paragraph media">
                <video src="../media/espresso/espressoScroll.mp4" autoplay loop muted playsinline></video>
            </div>
            <p>i then added the <a class="link-underline" href="https://scrollrevealjs.org/" target="_blank">ScrollReveal.js</a> plugin, another simple and intuitive tool that animates elements as they enter the viewport. i utilized this plugin on the homepage to capture the user’s attention and, paired with <em>tasteful</em> comments, guide them to the CTA and ease them to the explore rest of the website.</p>
            <div class="code-dropdown" tabindex="0">
                <div class="code-dropdown-btn flex row aic jcc jcsb">
                    <p>ScrollReveal.js</p>
                    <div>
                        <img class="caret" src="../icons/ui/white-caret.svg" alt="caret icon." draggable="false">
                    </div>
                </div>
                <figure class="code-preview">
                    <?php include '../components/code/scrollreveal.php'; ?>
                </figure>                       
            </div>
        </div>
        </div>
        <div class="paragraph s-1 s-1-sm s-1-md flex col gap-16 project-reveal">
            <div class="paragraph media">
                <video src="../media/espresso/espressoSwiper.mp4" autoplay loop muted playsinline></video>
            </div>
            <p>following that, i integrated the <a class="link-underline" href="https://swiperjs.com/" target="_blank">Swiper.js</a> plugin, a powerful and versatile tool for creating responsive sliders. i designed the brew page to utilize this plugin as it showcases the instructions to pull a shot of espresso step-by-step, making it easier for the user to digest and follow along.</p>
            <div class="code-dropdown" tabindex="0">
                <div class="code-dropdown-btn flex row aic jcc jcsb">
                    <p>Swiper.js</p>
                    <div>
                        <img class="caret" src="../icons/ui/white-caret.svg" alt="caret icon." draggable="false">
                    </div>
                </div>
                <figure class="code-preview">
                    <?php include '../components/code/swiper.php'; ?>
                </figure>
            </div>
        </div>
        </div>
        <div class="paragraph s-1 s-1-sm s-1-md flex col gap-16 project-reveal">
            <p>finally, i implemented the <a class="link-underline" href="https://gsap.com/docs/v3/Plugins/ScrollTrigger/?page=1" target="_blank">GSAP ScrollTrigger</a> plugin to add dynamic animations to the brew page. i used ScrollTrigger to rotate coffee beans as the user scrolled, making for a delightful interaction with minimal code.</p>
            <div class="code-dropdown" tabindex="0">
                <div class="code-dropdown-btn flex row aic jcc jcsb">
                    <p>GSAP ScrollTrigger</p>
                    <div>
                        <img class="caret" src="../icons/ui/white-caret.svg" alt="Caret icon." draggable="false">
                    </div>
                </div>
                <figure class="code-preview">
                    <?php include '../components/code/scrolltrigger.php'; ?>
                </figure>                     
            </div>
        </div>
        <div class="flex s-1 s-1-sm s-1-md jcr gap-16 view-project project-reveal">
            <a class="secondary btn" href="https://github.com/plries/espresso-guide" target="_blank">
                github
                <img src="../icons/ui/white-arrow.svg" alt="arrow icon.">
            </a>
            <a class="white btn" href="https://espresso.paularies.ca/" target="_blank">
                website
                <img src="../icons/ui/black-arrow.svg" alt="arrow icon.">
            </a>
        </div>
        <div class="paragraph s-1 s-1-sm s-1-md flex col gap-16 project-reveal">
            <h5>other projects</h5>
            <div class="more-projects grid grid-2-toggle">
                <?php include '../components/project-thumbs/odd-thumb.php'; ?>
                <div class="grid grid-2-row gap-16">
                    <?php include '../components/project-thumbs/pine-thumb.php'; ?>
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
                                <td>march 21, 2024 - april 10, 2024</td>
                                <td>
                                    <ul>
                                        <li><a class="link-underline" href="https://www.pexels.com/license/" target="_blank">pexels</a></li>
                                        <li><a class="link-underline" href="https://unsplash.com/license" target="_blank">unsplash</a></li>
                                        <li><a class="link-underline" href="https://fontawesome.com/license/free" target="_blank">font awesome</a></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>airrick dunfield - instructor</li>
                                    </ul>
                                </td>
                                <td>26</td>
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