<!DOCTYPE html>
<html lang="en" class="lenis">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uh oh!</title>
    <link rel="stylesheet" href="../style.css?v=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Rubik:ital,wght@0,300..900;1,300..900&family=Wix+Madefor+Display:wght@400..800&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="./work">
    <link rel="icon" href="./icons/ui/logo-big.svg">
    <link rel="apple-touch-icon" href="../media/apple-touch-icon.png">
    <?php include './components/initials.php' ?>
</head>

<body>

    <div class="cursor"></div>

    <?php include './components/header.php'; ?>

    <main class="error flex col aic jcc">
        <section class="grid col-12-8-4">
            <hgroup class="span-lg">
                <h1>uh oh!</h1>
                <h2>error 404</h2>
            </hgroup>
            <div class="paragraph span-lg error-reveal">
                <p><strong>seems like you're lost.</strong></p>
                <p>that's okay, lets find your way back.</p>
            </div>
            <div class="forest grid gap-16 span-lg error-reveal">
                <img src="./icons/ui/white-tree.svg" alt="tree icon." draggable="false">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <img src="./icons/ui/white-tree.svg" alt="tree icon." draggable="false">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <img src="./icons/ui/white-tree.svg" alt="tree icon." draggable="false">
                <img src="./icons/ui/white-home.svg" alt="home icon." draggable="false">
                <div></div>
                <div></div>
                <div></div>
                <img src="./icons/ui/white-tree.svg" alt="tree icon." draggable="false">
                <div></div>
                <img src="./icons/ui/white-tree.svg" alt="tree icon." draggable="false">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <img src="./icons/ui/white-tree.svg" alt="tree icon." draggable="false">
                <div></div>
                <div></div>
            </div>
            <div class="flex jcr gap-16 span-lg error-reveal">
                <a class="secondary btn" href="./">
                    home
                </a>
                <button class="white btn" onclick="history.back()">
                    go back
                </button>
            </div>
        </section>
    </main>

    <?php include './components/footer.php'; ?>

    <script src="./dist/vendors.js"></script>
    <script src="./dist/global.js"></script>

</body>

</html>