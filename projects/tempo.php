<!DOCTYPE html>
<html lang="en" class="lenis">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paul aries - tempo</title>
    <link rel="stylesheet" href="../style.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="./projects/tempo">
    <link rel="icon" href="../icons/ui/logo-big.svg">
    <link rel="apple-touch-icon" href="../media/apple-touch-icon.png">
    <!-- HTML Meta Tags -->
    <meta name="description"
        content="view the tempo dance class booking app project by paul aries, a high-fidelity prototype for a mobile app in Figma, featuring user research, a usability test, and a written report.">
    <meta name="author" content="Paul Aries">
    <meta name="keywords"
        content="Paul Aries, front-end developer, UX/UI designer, portfolio, web development, user experience, user interface design, projects, paul aries projects, UX/UI projects, portfolio projects, Figma wireframes, Figma prototypes, Figma, user research, usability test, user testing, Maze">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.paularies.ca/projects/tempo">
    <meta property="og:type" content="website">
    <meta property="og:title" content="paul aries - tempo">
    <meta property="og:description"
        content="view the tempo dance class booking app project by paul aries, a high-fidelity prototype for a mobile app in Figma, featuring user research, a usability test, and a written report.">
    <meta property="og:image" content="https://www.paularies.ca/media/tempo/tempo.jpg">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="paularies.ca">
    <meta property="twitter:url" content="https://www.paularies.ca/projects/tempo">
    <meta name="twitter:title" content="paul aries - tempo">
    <meta name="twitter:description"
        content="view the tempo dance class booking app project by paul aries, a high-fidelity prototype for a mobile app in Figma, featuring user research, a usability test, and a written report.">
    <meta name="twitter:image" content="https://www.paularies.ca/media/tempo/tempo.jpg">
    <?php include '../components/metadata.php'; ?>
</head>

<?php include '../components/initials.php' ?>

<body>

    <div class="cursor"></div>

    <div class="scroll-progress-container">
        <div class="scroll-progress uxui"></div>
    </div>

    <?php include '../components/project-header.php'; ?>

    <div class="project-hero hero-wrapper">
        <div class="parallax flex aic jcc">
            <div class="grid col-12-8-4">
                <div class="hero-img span-md">
                    <img src="../media/tempo/tempo.jpg" alt="tempo dance class booking app.">
                </div>
                <div class="project-title span-md jcsb">
                    <h1>tempo</h1>
                    <h2>dance class booking app</h2>
                    <div class="flex row jcsb aic wrap gap-16">
                        <div class="flex row aic gap-16">
                            <p class="blue btn">
                                <img src="../icons/ui/white-star.svg" alt="star icon." draggable="false">
                                ux / ui
                            </p>
                            <p class="chip tag">figma</p>
                            <p class="chip tag">user testing</p>
                            <p class="chip tag">user research</p>
                        </div>
                        <div class="flex row gap-16 links-container">
                            <button class="info btn" data-micromodal-trigger="modal-1">i</button>
                            <a class="secondary btn" href="../media/tempo/tempoReport.pdf" target="_blank">
                                report
                            </a>
                            <a class="black btn"
                                href="https://www.figma.com/proto/59EbBSy5SoywUcNK7YeheS/tempo?node-id=90-575&t=eORgaHztt8LKIvYO-1"
                                target="_blank">
                                figma
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
                <p>construct a high-fidelity prototype for a mobile app in Figma for a dance studio. this project
                    involves conducting user research using common strategies, performing an unmonitored usability test,
                    and writing a report with recommendations, and implementing possible solutions based on the
                    findings.</p>
            </div>
            <div class=" paragraph span-lg project-reveal">
                <h4>user research</h4>
                <p>the first phase of this project focused on defining the app’s concept, conducting user research, and
                    creating low-fidelity wireframes for the app. for this project, i created an app where users can
                    book classes for a fictional dance studio called <strong>Tempo</strong>.</p>
            </div>
            <div class="paragraph span-md project-reveal">
                <p class="quote">as a dancer who frequently uses mobile apps to book workshops, i'm familiar with what
                    works and what
                    could be improved upon in the booking process.</p>
            </div>
            <div class="paragraph span-lg project-reveal">
                <p>after settling on a topic, i identified the target audience using multiple research strategies such
                    as: a <a class="link-underline" href="#persona">user persona</a>, a <a class="link-underline"
                        href="#scenario">user scenario</a>, an <a class="link-underline" href="#empathy">empathy
                        map</a>, and a <a class="link-underline" href="#journey">journey map</a>. by creating these
                    documents, i was able to confidently define what <strong>beginner dancers</strong> desire from the
                    app.</p>
            </div>
            <figure id="persona" class="span-left media">
                <img src="../media/tempo/tempoPersona.png" alt="user persona of Mia Rodriguez.">
            </figure>
            <figure id="scenario" class="span-lg media">
                <img src="../media/tempo/tempoScenario.png" alt="user scenario of Mia Rodriguez.">
            </figure>
            <figure id="empathy" class="span-right media">
                <img src="../media/tempo/tempoEmpathy.png" alt="empathy map for Mia Rodrigeuz.">
            </figure>
            <figure id="journey" class="span-lg media">
                <img src="../media/tempo/tempoJourney.png" alt="journey map for user group.">
            </figure>
            <div class="paragraph span-lg project-reveal flex col gap-24">
                <p>following the research, i created a <a class="link-underline" href="#flowchart">flowchart</a> to
                    outline the process which the target user follows in this app. for this prototype, i focused
                    specifically on the process of booking a first dance class, as my research indicated that this can
                    be a confusing and nerve-wracking experience for many beginners.</p>
                <p>based on the flow chart, i designed <a class="link-underline" href="#wireframes">low-fidelity
                        wireframes</a> in order to define the placements for text, images, and buttons. generally,
                    booking an appointment or workshop is a linear process, so the screens i needed for the user flow
                    were evident as soon as i created the flow chart.</p>
            </div>
            <figure id="flowchart" class="span-left media project-reveal">
                <img src="../media/tempo/tempoFlow.jpg" alt="flow chart for Tempo app.">
            </figure>
            <div id="wireframes" class="span-right media project-reveal">
                <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);"
                    src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fdesign%2FLkRaZh1NpfmUB7lCqYzMx5%2Ftempo-wireframes%3Fnode-id%3D0-1%26t%3Dy4LWoYAJKMoapsdS-1"
                    allowfullscreen></iframe>
            </div>
            <div class="paragraph span-lg project-reveal">
                <h4>prototyping and user testing</h4>
                <div class="flex col gap-24">
                    <p>in the second phase of this project, i focused on adding functionality to the interface and
                        testing
                        prototypes with a user group. a challenge i faced was the larger-than-anticipated project scope,
                        which involved many variables and conditional statements. however, my experience with JavaScript
                        and
                        the Figma community helped me quickly grasp the logic and create a functional prototype.</p>
                    <p>once the high-fidelity prototype was completed, i conducted user testing with six peers
                        using Maze;
                        these testers have never taken a dance workshop before, fitting the target audience of beginner
                        dancers. the test included three tasks: selecting a skill level, choosing a teacher, and picking
                        a
                        workshop date. the test results provided valuable insights through heatmaps, misclick rates, and
                        task completion times, which allowed me to refine the prototype and enhance the user experience.
                    </p>
                </div>
            </div>
            <div class="paragraph span-lg project-reveal">
                <h4>revision and report</h4>
                <div class="grid gap-16 grid-2-toggle">
                    <div class="flex col gap-24">
                        <p>in the final phase of this project, i focused on writing a report on the Maze test results,
                            detailing what went right, and what went wrong in the user testing. this step helps guide
                            the app's development direction and identify what improvements could be made to improve
                            results in future iterations should i choose to continue refining it.</p>
                        <p>one issue identified during testing was that most testers couldn't recognize the teacher
                            labeled "passionate." Maze reported a <strong>7.9% misclick rate</strong>, with many testers
                            returning to previous pages or selecting the wrong teacher. only two testers chose the
                            correct teacher, matthew clark, highlighting the need for clearer information presentation.
                        </p>
                    </div>
                    <div class="media">
                        <img src="../media/tempo/tempoMaze.png" alt="heatmap results from Tempo Maze testing.">
                    </div>
                </div>
            </div>
            <div class="paragraph span-lg project-reveal">
                <div class="grid gap-16 grid-2-toggle">
                    <div class="media">
                        <img src="../media/tempo/tempoRevis.png" alt="tempo teach page revision.">
                    </div>
                    <p>to address this, i reformatted the profile page, establishing a clear hierarchy for key
                        information. i reduced the amount of text and added imagery, making it easier for users to
                        quickly find and retain information. this revision was based on test results and aimed to make
                        the app beginner-friendly for dancers.</p>
                </div>
            </div>
            <div class="paragraph span-lg flex col gap-16 project-reveal">
                <h4 class="other-projects">other projects</h4>
                <div class="more-projects grid grid-2-toggle">
                    <?php include '../components/project-thumbs/espresso-thumb.php'; ?>
                    <?php include '../components/project-thumbs/blend-it-thumb.php'; ?>
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
                            <p>january 9, 2024 - april 2, 2024</p>
                        </div>
                        <div>
                            <h4>contributions</h4>
                            <ul>
                                <li><a class="link-underline" href="https://www.pexels.com/license/"
                                        target="_blank">pexels</a></li>
                                <li><a class="link-underline" href="https://unsplash.com/license"
                                        target="_blank">unsplash</a></li>
                                <li><a class="link-underline" href="https://icons8.com/license"
                                        target="_blank">icons8</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4>input</h4>
                            <p>tonia sokolova - instructor</p>
                        </div>
                        <div>
                            <h4>total hours</h4>
                            <p>40</p>
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