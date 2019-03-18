<?php

include 'functions.php';
include 'dbConnect.php';

$db = getDbConnection();
$aboutMeText = returnAboutMeTextFromDb($db);

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>James Kapella || Web Developer</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <link rel='stylesheet' href='normalize.css' type='text/css'>
    <link rel='stylesheet' href='styles.css' type='text/css'>
</head>
<body>
    <div class='lockLink'>
        <a href='admin.php'><img src='img/lockicon.png' alt='an icon of a padlock'></a>
    </div>
    <header>
        <div class='container'>
            <h1>JAMES KAPELLA</h1>
            <h3>Full stack web developer</h3>
            <img class='scrollingFingerImage pulsingImage' src='img/scrollFingerIcon.png' alt='Scroll-down icon'>
            <section>
                <h4>About me</h4>
                <p><?php echo $aboutMeText; ?></p>
            </section>
            <section>
                <h4>Contact</h4>
                <ul>
                    <li>
                        <a href='https://github.com/JKapella' target='_blank'>
                            <img src='img/githubIcon.png' alt='a github icon'> Github
                        </a>
                    </li>
                    <li>
                        <a href='mailto:jvkapella@gmail.com' target='_blank'>
                            <img src='img/emailIcon.png' alt='an email icon'> Email
                        </a>
                    </li>
                    <li>
                        <a href='http://www.linkedin.com/in/james-kapella-895001106' target='_blank'>
                            <img src='img/linkedinIcon.png' alt='a linkedin icon'> LinkedIn
                        </a>
                    </li>
                    <li>
                        <a href='http://culturebosh.com' target='_blank'>
                            <img src='img/gameIcon.png' alt='a games icon'> My Games
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </header>
    <main>
        <div class='container'>
            <h2>PORTFOLIO</h2>
            <h3>Scroll down</h3>
            <img class='scrollingMouseImage pulsingImage' src='img/mousescrollitem.png' alt='Scroll-down icon'>
            <a href='#' target='_blank'>
                <article>
                    <h3>PILOT SHOP</h3>
                    <img src='img/pilotShopScreenshot.jpg' alt='A screenshot of my pilot shop rebuild'>
                    <p>As an exercise in responsive web design we recreated the Pilot Shop digital storefront with HTML and CSS.</p>
                </article>
            </a>
            <a href='#' target='_blank'>
                <article>
                    <h3>PLACEHOLDER PROJECT</h3>
                    <img src='img/portfolioPlaceholder1.jpg' alt='More coming soon, placeholder image'>
                    <p>This is a placeholder (lorem ipsum, etc). Expect to see more exciting projects coming soon to this page.</p>
                </article>
            </a>
            <a href='#' target='_blank'>
                <article>
                    <h3>PLACEHOLDER PROJECT</h3>
                    <img src='img/portfolioPlaceholder4.jpg' alt='More coming soon, placeholder image'>
                    <p>This is a placeholder (lorem ipsum, etc). Expect to see more exciting projects coming soon to this page.</p>
                </article>
            </a>
            <a href='#' target='_blank'>
                <article>
                    <h3>PLACEHOLDER PROJECT</h3>
                    <img src='img/portfolioPlaceholder2.jpg' alt='More coming soon, placeholder image'>
                    <p>This is a placeholder (lorem ipsum, etc). Expect to see more exciting projects coming soon to this page.</p>
                </article>
            </a>
            <a href='#' target='_blank'>
                <article>
                    <h3>PLACEHOLDER PROJECT</h3>
                    <img src='img/portfolioPlaceholder5.jpg' alt='More coming soon, placeholder image'>
                    <p>This is a placeholder (lorem ipsum, etc). Expect to see more exciting projects coming soon to this page.</p>
                </article>
            </a>
            <a href='#' target='_blank'>
                <article>
                    <h3>PLACEHOLDER PROJECT</h3>
                    <img src='img/portfolioPlaceholder3.jpg' alt='More coming soon, placeholder image'>
                    <p>This is a placeholder (lorem ipsum, etc). Expect to see more exciting projects coming soon to this page.</p>
                </article>
            </a>
        </div>
    </main>
</body>
</html>