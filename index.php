<?php

include 'functions.php';
include 'dbConnect.php';

session_start();

$db = getDbConnection();
$aboutMeText = returnAboutMeTextFromDb($db);

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>James Kapella || Web Developer</title>
    <link rel='shortcut icon' type=image/x-icon' href='favicon.ico'>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <link rel='stylesheet' href='normalize.css' type='text/css'>
    <link rel='stylesheet' href='styles.css' type='text/css'>
</head>
<body>
    <div class='lock-link'>
        <a href='login.php'><img src='img/lockicon.png' alt='an icon of a padlock'></a>
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
            <a href='https://dev.maydenacademy.co.uk/projects/2019Feb/2019-paint-app/' target='_blank'>
                <article>
                    <h3>PAINTMASTER 3000</h3>
                    <img src='img/paintmasterScreenshot.jpg' alt='A screenshot of our paint game project'>
                    <p>Working in a team using scrum we created a paint game using Javascript.</p>
                    <p class='tag-holder'><span>#JS</span><span class='tag'>#HTML</span><span class='tag'>#CSS</span></p>
                </article>
            </a>
            <a href='apititudeTestProject.php'>
                <article>
                    <h3>APTITUDE TEST</h3>
                    <img src='img/aptitudeIcon.png' alt='A screenshot of the aptitude test'>
                    <p>Worked in a team on an existing Javascript codebase this project involved making bug fixes and adding new features to an aptitude test application supported by an API. We used SASS as a preprocessor for our CSS styles, Handlebars to template data from the API, and Gulp to manage these tools.</p>
                    <p class='tag-holder'><span>#JS</span><span>#SASS</span><span>#Handlebars</span><span>#Gulp</span></p>
                </article>
            </a>
            <a href='http://dev.maydenacademy.co.uk/students/2019/feb/james/w1_pilotShopRebuild/' target='_blank'>
                <article>
                    <h3>PILOT SHOP</h3>
                    <img src='img/pilotShopScreenshot.jpg' alt='A screenshot of my pilot shop rebuild'>
                    <p>As an exercise in responsive web design we recreated the Pilot Shop digital storefront with HTML and CSS.</p>
                    <p class='tag-holder'><span class='tag'>#HTML</span><span class='tag'>#CSS</span></p>
                </article>
            </a>
            <a href='cmsProject.php'>
                <article>
                    <h3>PORTFOLIO CMS</h3>
                    <img src='img/loginPagePreview.png' alt='Screenshot of the login screen'>
                    <p>Using PHP, we added a CMS layer to our portfolio, updating database entries from our own admin screen.</p>
                    <p class='tag-holder'><span class='tag'>#LAMP</span><span class='tag'>#Vagrant</span><span class='tag'>#MySQL</span></p>
                </article>
            </a>
            <a href='../SystemBuilderApp/' target='#'>
                <article>
                    <h3>SYSTEM BUILDER APP</h3>
                    <img src='img/systemBuilderScreenshot.png' alt='A screenshot of my system builder app'>
                    <p>Taking inspiration from an exercise where we made a HTML/CSS animated solar system, I extended a 'Procedural Star System Builder' hobby-project to include a visualisation of created systems.</p>
                    <p class='tag-holder'><span>#JS (ES6)</span><span class='tag'>#HTML</span><span class='tag'>#CSS</span></p>
                </article>
            </a>
            <a href='http://dev.maydenacademy.co.uk/projects/2019Feb/2019-nmr-TopDog/' target='_blank'>
                <article>
                    <h3>TOP DOG APP</h3>
                    <img src='img/topDogScreenshot.png' alt='More coming soon, placeholder image'>
                    <p>Working in an agile team, we created a tool to scrape an online API of dog pictures into a database, then used SOLID-informed object-oriented programming in PHP to design and build an app for viewing the images and highlighting a 'favourite' dog picture.</p>
                    <p class='tag-holder'><span>#OOP</span><span class='tag'>#PHP</span><span class='tag'>#API</span><span class='tag'>#HTML</span><span class='tag'>#CSS</span></p>
                </article>
            </a>
            <a href='http://ashbydog.com' target='_blank'>
                <article>
                    <h3>ASHBYDOG.COM SITE</h3>
                    <img src='img/ashbydogScreenshot.png' alt='A screenshot of the ashbydog website'>
                    <p>Before joining the course at Mayden Academy I created a website for my dog (I promise it's only about 50% as crazy as it sounds) to learn about using Bootstrap, HTML and CSS.</p>
                    <p class='tag-holder'><span class='tag'>#Bootstrap</span><span class='tag'>#HTML</span><span class='tag'>#CSS</span></p>
                </article>
            </a>
            <a href='http://dev.maydenacademy.co.uk/students/2019/feb/james/slimTodoApp/public/' target='_blank'>
                <article>
                    <h3>SLIM TODO LIST APP</h3>
                    <img src='img/todoAppScreenshot.png' alt='A screenshot of my to do list app build in slim'>
                    <p>To practice using an MVC design pattern within the slim framework I built a ‘to-do list’ app.</p>
                    <p class='tag-holder'><span class='tag'>#Slim</span><span class='tag'>#MVC</span><span class='tag'>#PHP</span><span class='tag'>#MySQL</span></p>
                </article>
            </a>
        </div>
    </main>
</body>
</html>